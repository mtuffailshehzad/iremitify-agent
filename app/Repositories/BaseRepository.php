<?php
namespace App\Repositories;

use App\Libraries\Settings;
use App\Models\Result;
use Illuminate\Support\Facades\Session;

class BaseRepository
{
	public function privateHeader()
	{
		$client_id	    =	"";
		if(Session::has('client_id'))
		{
            $client_id	=	Session::get('client_id');
		}
		$params['xclient']      =	$client_id;
        $params['secret_key']   =	Settings::ApiSecretKey();
		return $params;
	}
	public function publicHeader()
	{
		$params['secret_key']   =	Settings::ApiSecretKey();
		return $params;
	}

	public function ExceptionHandler($message)
	{
		$result 				=	new Result();
        $result->Rflag		    =	0;
        $result->Code		    =	"99999";
        $result->Message	    =	"An internal error occurred: ";
        $result->Description	=	$message;
		return $result;
	}

	public function ParseResult($objResponse)
	{
		$objResult	=	new \stdClass();
		$result		=	new Result();
		if(isset($objResponse->result->Rflag))
		{
			$result -> Rflag		=	isset($objResponse->result->Rflag) ? (int)$objResponse->result->Rflag : 0;
			$result -> Code			=	isset($objResponse->result->Code) ? $objResponse->result->Code : "99999";
			$result -> Message		=	isset($objResponse->result->Message) ? $objResponse->result->Message : "An internal error occurred: ";
			$result -> Description	=	isset($objResponse->result->Description) ? $objResponse->result->Description : "";
			if($result -> Description != "")
			{
				$descriptions		=	"";
				if(is_array($result->Description) || is_object($result->Description))
				{
					foreach($result->Description as $keys => $values)
					{
						if(is_array($values) || is_object($values))
						{
							$descriptionsError	=	"";
							foreach($values as $value)
							{
								if(end($values))
								{
									$descriptionsError	.=	$value;
								}
								else
								{
									$descriptionsError	.=	$value.", ";
								}
							}
							$descriptions	.=	$keys.": ".$descriptionsError." \n";
						}
						else
						{
							$descriptions	.=	$keys.": ".$values." \n";
						}
					}
				}
				else
				{
					$descriptions	.=	$result->Description;
				}
				$result -> Description		=	$descriptions;
			}
		}
		else
		{
			$result->Rflag		    =	0;
			$result->Code		    =	"99999";
			$result->Message	    =	"An internal error occurred: ";
			$result->Description	=	"";
		}
        $objResult->Result			=	$result;
        $objResult->Data			=	isset($objResponse->data) ? $objResponse->data : null;
        if(isset($objResponse->dashboard))
		{
            $objResult->Dashboard	=	$objResponse->dashboard;
        }
		return $objResult;
	}

	public function PublicParams($pData = null)
	{
		$params	=	$this->publicHeader();
		if( isset($pData) )
		{
		    if (count($pData) > 0)
		    {
                foreach ($pData as $key => $value)
                {
                    if ($value != ''){
                        $params[$key] = $value;
                    }
                }
            }
		}
		return $params;
	}

    public function PrivateParams($pData = null)
    {
        $params	=	$this->privateHeader();
        if( isset($pData) )
        {
            if (count($pData) > 0)
            {
                foreach ($pData as $key => $value)
                {
                    if ($value != ''){
                        $params[$key] = $value;
                    }
                }
            }
        }
        return $params;
    }

    public function getPermissions()
    {
        return array(
                array('id' => '1','label' => 'Administration','name' => 'administration','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-superpowers','tooltip' => 'Administration','sort_order' => '1','created_by' => '1','created_at' => '2022-01-28 06:32:50','updated_at' => '2022-01-28 06:32:50','deleted_at' => NULL),
                array('id' => '2','label' => 'Agents','name' => 'agents','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-building','tooltip' => 'Agent management','sort_order' => '2','created_by' => '1','created_at' => '2022-01-28 06:32:50','updated_at' => '2022-01-28 06:32:50','deleted_at' => NULL),
                array('id' => '3','label' => 'Payout Network','name' => 'payout','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-handshake-o','tooltip' => 'Manage Payout network','sort_order' => '3','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '4','label' => 'Compliance','name' => 'compliance','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-check-square-o','tooltip' => 'Compliance','sort_order' => '4','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '5','label' => 'Operations','name' => 'operations','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-wrench','tooltip' => 'Operations','sort_order' => '5','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '6','label' => 'Treasury','name' => 'treasury','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-usd','tooltip' => 'Treasury','sort_order' => '6','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '7','label' => 'Export Tranx','name' => 'exportimport','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-random','tooltip' => 'Export/Payout Transactions','sort_order' => '7','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '8','label' => 'Remitters','name' => 'remitters','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-users','tooltip' => 'Remitter management','sort_order' => '8','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '9','label' => 'Beneficiaries','name' => 'beneficiaries','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-user-circle','tooltip' => 'Beneficiary management','sort_order' => '9','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '10','label' => 'Customer Care','name' => 'customercare','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-headphones','tooltip' => 'Customer Care','sort_order' => '10','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '11','label' => 'Promotions','name' => 'promotions','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-gift','tooltip' => 'Promotions','sort_order' => '11','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '12','label' => 'Rails Bank','name' => 'railsbank','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'glyphicon glyphicon-cog','tooltip' => 'Rails Bank','sort_order' => '12','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '13','label' => 'Reports','name' => 'reports','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-bar-chart','tooltip' => 'Reports','sort_order' => '13','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '14','label' => 'Trainings','name' => 'trainings','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-certificate','tooltip' => 'Trainings','sort_order' => '14','created_by' => '1','created_at' => '2022-01-28 06:32:51','updated_at' => '2022-01-28 06:32:51','deleted_at' => NULL),
                array('id' => '15','label' => 'Wallets','name' => 'wallets','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-money','tooltip' => 'Remitter Wallets','sort_order' => '11','created_by' => '1','created_at' => '2022-03-01 09:13:09','updated_at' => '2022-03-01 09:13:09','deleted_at' => NULL),
                array('id' => '16','label' => 'Settings','name' => 'settings','guard_name' => 'cp','parent_id' => '0','show_on_menu' => '1','route_name' => '#','icon' => 'fa fa-cogs','tooltip' => 'Settings','sort_order' => '16','created_by' => '1','created_at' => '2022-01-28 06:32:52','updated_at' => '2022-01-28 06:32:52','deleted_at' => NULL),
            );
    }

    /**
     * @return null
     */
    public function getClassName()
    {
        return null;
    }

    /**
     * @return mixed
     */
    private function getInstance()
    {
        $className = $this->getClassName();

        return new $className();
    }



    /**
     * @param $entity
     * @param $type
     *
     * @return string
     */
    private function getEventClass($entity, $type)
    {
        return 'App\Events\\' . ucfirst($entity->getEntityType()) . 'Was' . $type;
    }

    /**
     * @param $entity
     */
    public function archive($entity)
    {
        if ($entity->trashed()) {
            return;
        }

        $entity->delete();

        $className = $this->getEventClass($entity, 'Archived');

        if (class_exists($className)) {
            event(new $className($entity));
        }
    }

    /**
     * @param $entity
     */
    public function restore($entity)
    {
        if (! $entity->trashed()) {
            return;
        }

        $fromDeleted = false;
        $entity->restore();

        if ($entity->is_deleted) {
            $fromDeleted = true;
            $entity->is_deleted = false;
            $entity->save();
        }

        $className = $this->getEventClass($entity, 'Restored');

        if (class_exists($className)) {
            event(new $className($entity, $fromDeleted));
        }
    }

    /**
     * @param $entity
     */
    public function delete($entity)
    {
        if ($entity->is_deleted) {
            return;
        }

        $entity->is_deleted = true;
        $entity->save();

        $entity->delete();

        $className = $this->getEventClass($entity, 'Deleted');

        if (class_exists($className)) {
            event(new $className($entity));
        }
    }

    /**
     * @param $ids
     * @param $action
     *
     * @return int
     */
    public function bulk($ids, $action)
    {
        if (! $ids) {
            return 0;
        }

        $entities = $this->findByPublicIdsWithTrashed($ids);

        foreach ($entities as $entity) {
            if (Auth::user()->can('edit', $entity)) {
                $this->$action($entity);
            }
        }

        return count($entities);
    }
    /**
     * @param $ids
     *
     * @return mixed
     */
    public function findByPublicIds($ids)
    {
        return $this->getInstance()->scope($ids)->get();
    }

    /**
     * @param $ids
     *
     * @return mixed
     */
    public function findByPublicIdsWithTrashed($ids)
    {
        return $this->getInstance()->scope($ids)->withTrashed()->get();
    }

    protected function applyFilters($query, $entityType, $table = false)
    {
        $table = Utils::pluralizeEntityType($table ?: $entityType);

        if ($filter = session('entity_state_filter:' . $entityType, STATUS_ACTIVE)) {
            $filters = explode(',', $filter);
            $query->where(function ($query) use ($filters, $table) {
                $query->whereNull($table . '.id');

                if (in_array(STATUS_ACTIVE, $filters)) {
                    $query->orWhereNull($table . '.deleted_at');
                }
                if (in_array(STATUS_ARCHIVED, $filters)) {
                    $query->orWhere(function ($query) use ($table) {
                        $query->whereNotNull($table . '.deleted_at');

                        if (! in_array($table, ['users'])) {
                            $query->where($table . '.is_deleted', '=', 0);
                        }
                    });
                }
                if (in_array(STATUS_DELETED, $filters)) {
                    $query->orWhere(function ($query) use ($table) {
                        $query->whereNotNull($table . '.deleted_at')
                            ->where($table . '.is_deleted', '=', 1);
                    });
                }
            });
        }

        return $query;
    }
}
