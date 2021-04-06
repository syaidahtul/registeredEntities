<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        $page_title = 'Login';
        $page_description = 'Login page';

        return view('auth.login', compact('page_title', 'page_description'));
    }

    public function login(Request $request) 
    {
        $page_title = 'Datatable';
        $page_description = 'Some description for the page';
        
        return view('pages.dashboard', compact('page_title', 'page_description'));
    }
}
