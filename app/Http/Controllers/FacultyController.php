<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{

    function index(){
        $facuty = DB::table('facuty')->get();
        return view('facuty',compact('facuty'));
    }
}
