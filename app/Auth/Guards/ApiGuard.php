<?php

declare(strict_types=1);

namespace App\Auth\Guards;

use App\Libraries\Utils;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

/**
 * Class PinGuard
 */
class ApiGuard implements Guard
{
    /**
     * @var null|Authenticatable|User
     */
    protected $user;

    /**
     * @var Request
     */
    protected $request;

    /**
     * OpenAPIGuard constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Check whether user is logged in.
     *
     * @return bool
     */
    public function check(): bool
    {
        return (bool)$this->user();
    }

    /**
     * Check whether user is not logged in.
     *
     * @return bool
     */
    public function guest(): bool
    {
        return !$this->check();
    }

    /**
     * Return user id or null.
     *
     * @return null|int
     */
    public function id(): ?int
    {
        $user = $this->user();
        return $user->id ?? null;
    }

    /**
     * Manually set user as logged in.
     *
     * @param  null|User|Authenticatable $user
     * @return $this
     */
    public function setUser(?Authenticatable $user): self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @param  array $credentials
     * @return bool
     */
    public function validate(array $credentials = []): bool
    {
        throw new \BadMethodCallException('Unexpected method call');
    }

    /**
     * Return user or throw AuthenticationException.
     *
     * @return User
     *@throws AuthenticationException
     */
    public function authenticate(): User
    {
        $user = $this->user();
        if ($user instanceof User) {
            $this->SyncUserPermissions();
            return $user;
        }
        throw new AuthenticationException();
    }

    /**
     * Return cached user or newly authenticate user.
     *
     * @return null|User|Authenticatable
     */
    public function user(): ?User
    {
        return $this->user ?: $this->signInWithToken();
    }

    /**
     * Sign in using requested Token.
     *
     * @return null|User
     */
    protected function signInWithToken(): ?User
    {
        if (Session::get('token') != '')
        {
            $UserData       =   Session::get('User');
            if (isset($UserData->id) && $UserData->id != '')
            {
                $user                   =   new User();
                $user->agent_user_id    =   isset($UserData->agent_user_id) ? $UserData->agent_user_id : '';
                $user->agent_id         =   isset($UserData->agent_id) ? $UserData->agent_id : '';
                $user->branch_id        =   isset($UserData->branch_id) ? $UserData->branch_id : '';
                $user->first_name       =   isset($UserData->first_name) ? $UserData->first_name : '';
                $user->last_name        =   isset($UserData->last_name) ? $UserData->last_name : '';
                $user->house_number     =   isset($UserData->house_number) ? $UserData->house_number : '';
                $user->street_address   =   isset($UserData->street_address) ? $UserData->street_address : '';
                $user->city             =   isset($UserData->city) ? $UserData->city : '';
                $user->state_province   =   isset($UserData->state_province) ? $UserData->state_province : '';
                $user->post_code        =   isset($UserData->post_code) ? $UserData->post_code : '';
                $user->country_iso_code =   isset($UserData->country_iso_code) ? $UserData->country_iso_code : '';
                $user->country_name     =   isset($UserData->country_name) ? $UserData->country_name : '';
                $user->mobile_phone     =   isset($UserData->mobile_phone) ? $UserData->mobile_phone : '';
                $user->email            =   isset($UserData->email) ? $UserData->email : '';
                $user->time_zone        =   isset($UserData->time_zone) ? $UserData->time_zone : '';
                $user->role_name        =   isset($UserData->role_name) ? $UserData->role_name : '';
                return $user;
            }
            else
            {
                $objResponse    =   Utils::getUserInfo();
                if ($objResponse->Result->Rflag == 1 && $objResponse->Data != null)
                {
                    $UserData               =   $objResponse->Data;
                    Session::put('User', $UserData);
                    $user                   =   new User();
                    $user->agent_user_id    =   isset($UserData->agent_user_id) ? $UserData->agent_user_id : '';
                    $user->agent_id         =   isset($UserData->agent_id) ? $UserData->agent_id : '';
                    $user->branch_id        =   isset($UserData->branch_id) ? $UserData->branch_id : '';
                    $user->first_name       =   isset($UserData->first_name) ? $UserData->first_name : '';
                    $user->last_name        =   isset($UserData->last_name) ? $UserData->last_name : '';
                    $user->house_number     =   isset($UserData->house_number) ? $UserData->house_number : '';
                    $user->street_address   =   isset($UserData->street_address) ? $UserData->street_address : '';
                    $user->city             =   isset($UserData->city) ? $UserData->city : '';
                    $user->state_province   =   isset($UserData->state_province) ? $UserData->state_province : '';
                    $user->post_code        =   isset($UserData->post_code) ? $UserData->post_code : '';
                    $user->country_iso_code =   isset($UserData->country_iso_code) ? $UserData->country_iso_code : '';
                    $user->country_name     =   isset($UserData->country_name) ? $UserData->country_name : '';
                    $user->mobile_phone     =   isset($UserData->mobile_phone) ? $UserData->mobile_phone : '';
                    $user->email            =   isset($UserData->email) ? $UserData->email : '';
                    $user->time_zone        =   isset($UserData->time_zone) ? $UserData->time_zone : '';
                    $user->role_name        =   isset($UserData->role_name) ? $UserData->role_name : '';
                    return $user;
                }
                else
                {
                    return null;
                }
            }
        }
        else
        {
            return null;
        }
    }
    /**
     * get permissions of login user.
     *
     * @return void
     */
    protected function SyncUserPermissions(): void
    {
        if (Session::get('token') != '')
        {
            $Permissions        =   Cache::get(Session::get('user_id').'_permissions');
            $UserPermissions    =   Cache::get(Session::get('user_id').'_user_permissions');
            if (empty($Permissions) || empty($UserPermissions))
            {
                $user_permissions   =   Utils::getUserPermissions();
                $permissions        =   array();
                if (count($user_permissions) > 0)
                {
                    foreach ($user_permissions as $permission)
                    {
                        $permissions[]  =   $permission->name;
                    }
                }
                Cache::put(Session::put('user_id').'_permissions', $permissions, Carbon::now()->addHours(12));
                Cache::put(Session::put('user_id').'_user_permissions', $user_permissions, Carbon::now()->addHours(12));
            }
        }
    }
    /**
     * Logout user.
     */
    public function logout(): void
    {
        if ($this->user) {
            //$this->setUser(null);
            Session::forget('User');
            $this->user = null;
        }
    }
}
