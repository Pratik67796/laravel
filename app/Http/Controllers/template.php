<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contents;
use App\about;
use App\services;
use App\features;
use App\portfolio;
use App\team;
use App\qestion;
use App\contact_detail;
use App\footar;

class template extends Controller
{
    function showw(Request $req)
    {
        $data = contents::all();
        $data2 = about::all();
        $data3 = services::all();
        $data4 = features::all();
        $data5 = portfolio::all();
        $data6 = team::all();
        $data7 = qestion::all();
        $data8 = contact_detail::all();
        $data9 = footar::all();
        return view('welcome',compact('data','data2','data3','data4','data5','data6','data7','data8','data9'));

    }

    
}
