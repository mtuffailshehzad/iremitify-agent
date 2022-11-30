<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAgentValidationRequest;
use App\Libraries\Settings;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $UserRepo;
    protected $template;

    public function __construct(UserRepository $UserRepo)
    {
        $this->template = "templates/" . config('app.template') . "/views/";
        $this->middleware('HasPermission:agent_profile', ['only' => ['dashboard']]);
        $this->UserRepo    =   $UserRepo;
    }

    public function login()
    {
        Settings::getSettings();
        return View::make($this->template . 'auth.login');
    }

    public function loginAction(Request $request)
    {
        $this->ValidateRequest($request, new LoginAgentValidationRequest);
        $data       =   array('username' => $request->username, 'password' => $request->password);
        $objLogin   =   $this->UserRepo->Login($data);
        if ($objLogin->Result->Rflag)
        {
            $request->session()->put('client_id', $objLogin->Data->client_id);
            $request->session()->put('token', $objLogin->Data->token);
            Auth::authenticate();
            return redirect()->route('dashboard');
        }
        else
        {
            return redirect()->back()->withInput()->withErrors([$objLogin->Result->Message]);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        Cache::forget(Auth::id().'_permissions');
        Cache::forget(Auth::id().'_left_menu');
        return redirect()->route('login');
    }

    public function ForgotPassword()
    {
        return View::make($this->template . 'auth.forgot');
    }

    public function dashboard()
    {
        //print_r(Auth::user()); exit();
        return View::make($this->template . 'dashboard');
    }
}
