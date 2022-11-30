<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repositories\UserRepository;

class ProfileController extends Controller
{
    /**
     * @var ProfileRepository
     */
    protected $UserRepo;
    protected $template;

    public function __construct(UserRepository $UserRepo)
    {
        $this->template =   "templates/" . config('app.template') . "/views/";
        $this->UserRepo =   $UserRepo;
    }

    public function index()
    {
      $objProfile   =   $this->UserRepo->profile();
    
      if($objProfile->Result->Rflag == 1){
              $data = $objProfile->Data;
        $data_agent = $objProfile->Data->agent;
      }
      return View::make($this->template . 'Profile.index', compact('data','data_agent'));
    
       
    }
    public function index_update()
    {
        return View::make($this->template . 'Profile.update');
    }
    public function Change_pass()
    {
        return View::make($this->template . 'Profile.change_password');
    }

   
    public function Generate_pin()
    {
        return View::make($this->template . 'Profile.generate_pin');
    }

}
