<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'What do you think about this?';

        return view('pages.dashboard', compact('page_title', 'page_description'));
    }

}
