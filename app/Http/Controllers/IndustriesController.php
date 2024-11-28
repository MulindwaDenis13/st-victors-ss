<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModulesData;

class IndustriesController extends Controller
{
    public function index(){
        return view('pages.industries');
    } 
}
