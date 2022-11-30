<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repositories\RemitterRepository;
use App\Transformers\Remitters\RemitterTransformer;
use App\Models\Remitter;
use App\Http\Requests\RemitterRequest;
use App\Libraries\Utils;

class RemitterController extends Controller
{
    /**
     * @var RemitterRepository
     */
    protected $RemitterRepo;
    protected $template;

    public function __construct(RemitterRepository $RemitterRepo)
    {
        $this->template     =   "templates/" . config('app.template') . "/views/";
        $this->RemitterRepo =   $RemitterRepo;
    }

    public function index()
    {
        return View::make($this->template . 'remitters.index');
    }

    public function Remitters(Request $request)
    {
        $remitters      =   array();
        $searchData           =    $request->only('remitter_id','first_name','email','document_number','post_code','mobile_phone', 'country_iso_code');
        $objRemitters   =	$this->RemitterRepo->search($searchData);
        if (isset($objRemitters->Result->Rflag) && $objRemitters->Result->Rflag == 1)
        {
            $remitters   =   $objRemitters->Data;
        }
        return response()->json($remitters);
    }

    public function Add()
    {
        return View::make($this->template . 'remitters.add');
    }

    public function store(Request $request)
    {
        $this->ValidateRequest($request, New RemitterRequest());
        $data           =   $request->only('first_name','middle_name','last_name','fourth_name','post_code','house_number','street_address','city','state_province','mobile_phone','date_of_birth','gender','country_iso_code','nationality','country_of_birth','place_of_birth','source_of_income_code','occupation_code','remitter_type_code');
        $objRemitter    =   RemitterTransformer::transformAvailableRequest($data);
        $objRemitter    =   $this->RemitterRepo->create($objRemitter);
        if ($objRemitter->Result->Rflag == 1)
        {
            return redirect()->route('remitters')->withSuccess('New Remitter Added Successfully!');
        }
        else
        {
            return redirect()->back()->withInput()->withErrors([$objRemitter->Result->Message]);
        }
    }
    public function Edit($remitter_id)
    {
        $searchData = array("remitter_id" => "$remitter_id");
        $remitter      =   array();
        $objRemitters   =   $this->RemitterRepo->search($searchData);
        if (isset($objRemitters->Result->Rflag) && $objRemitters->Result->Rflag == 1)
        {
            $remitter   =   $objRemitters->Data->data[0];
            $remitter   =   json_decode(json_encode($remitter), true);
        }
        return view($this->template . 'remitters.edit', compact('remitter'));
    }

    public function update(Request $request)
     {
        $data           =   $request->only('remitter_id','first_name','middle_name','last_name','fourth_name','post_code','house_number','street_address','city','state_province','mobile_phone','date_of_birth','gender','country_iso_code','nationality','country_of_birth','place_of_birth','source_of_income_code','occupation_code','remitter_type_code');
        $objRemitter    =   RemitterTransformer::transformAvailableRequest($data);
            $objValidation  =   $this->ValidateRequest($request, New RemitterRequest);
        $objRemitter    =   $this->RemitterRepo->update($data);
        if ($objRemitter->Result->Rflag == 1)
        {
            return redirect()->route('remitters')->withSuccess('Remitter Updated Successfully!');
        }
        else
        {
            return redirect()->back()->withInput()->withErrors([$objRemitter->Result->Message]);
        }
     }

     public function profile($remitter_id)
    {
        $searchData= array("remitter_id" => "$remitter_id");
        $remitter      =   array();
        $objRemitters   =   $this->RemitterRepo->search($searchData);
        if (isset($objRemitters->Result->Rflag) && $objRemitters->Result->Rflag == 1)
        {
            $remitter   =   $objRemitters->Data->data[0];
            $remitter   =   json_decode(json_encode($remitter), true);
        }
        return View::make($this->template . 'remitters.profile',compact('remitter'));
    }

    public function add_bene(Request $request)
    {

        $this->ValidateRequest($request, New RemitterRequest());
        $data           =   $request->only('first_name','middle_name','last_name','fourth_name','post_code','house_number','street_address','city','state_province','mobile_phone','date_of_birth','gender','country_iso_code','nationality','country_of_birth','place_of_birth','source_of_income_code','occupation_code','remitter_type_code');
        $objRemitter    =   RemitterTransformer::transformAvailableRequest($data);
        $objRemitter    =   $this->RemitterRepo->create($objRemitter);
        if ($objRemitter->Result->Rflag == 1)
        {
            return redirect()->route('remitters')->withSuccess('New Remitter Added Successfully!');
        }
        else
        {
            return redirect()->back()->withInput()->withErrors([$objRemitter->Result->Message]);
        }
    }
}
