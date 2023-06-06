<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function satu(){
        return view('dashboard.first');
    }
    public function dua(){
        return view('dashboard.second');
    }
}
