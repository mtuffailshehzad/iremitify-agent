<?php

namespace App\Http\Controllers;

use App\Repositories\BeneficiaryRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    /**
     * @var BeneficiaryRepository
     */
    private $BeneficiaryRepo;

    public function __construct(BeneficiaryRepository $BeneficiaryRepo)
    {
        $this->middleware('HasPermission:administration', ['only' => ['index']]);
        $this->BeneficiaryRepo    =   $BeneficiaryRepo;
    }

    public function index()
    {
        $timestamp  =   Carbon::now()->timestamp;
        $url        =   route('beneficiaries');
        $token      =   $this->createToken($url, $timestamp);
        return view('beneficiaries.index', compact('token', 'timestamp'));
    }

    public function ApiBeneficiaries(Request $request)
    {
        $sort               =   isset($request->sort) && count($request->sort) > 0 ? $request->sort : array();
        $searchData         =   $request->only('bene_id', 'bene_name', 'email');
        $items_per_page     =   $request->pageSize;
        $columns            =   ['beneficiary_id', 'full_name', 'first_name', 'middle_name', 'last_name', 'fourth_name', 'address1', 'address1', 'city', 'state_province', 'post_code', 'country_iso_code', 'home_phone', 'work_phone', 'mobile_phone', 'email', 'password', 'gender', 'created_by', 'created_at', 'updated_at'];
        $beneficiaries      =   array();
        $objBeneficiaries   =	$this->BeneficiaryRepo->beneficiaryList($items_per_page, $searchData, $sort, $columns);
        if ($objBeneficiaries->Result->Rflag == 1)
        {
            $beneficiaries   =   $objBeneficiaries->Data;
        }
        return response()->json($beneficiaries);
    }

    public function edit($id)
    {
        $timestamp  =   Carbon::now()->timestamp;
        $url        =   route('beneficiaries.edit', $id);
        $token      =   $this->createToken($url, $timestamp);
        return view('beneficiaries.edit', compact('id', 'token', 'timestamp'));
    }
}
