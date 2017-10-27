<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    //
    public function index(){
    	
    }

    public function save(Request $request){
        dump($request->all());
    }



}
