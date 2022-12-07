<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function welcome(){
    //     return view('backend.welcome');
    // }
    public function dashboard(){
        dd("ok");
        return view('backend.pages.dashboard.admin');
    }
}
