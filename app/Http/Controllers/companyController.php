<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class companyController extends Controller
{
    function index(){
        $Company = Company::all();
        $Company = Company::with('user')->get();
        return view('company',compact('Company'));
    }
}
