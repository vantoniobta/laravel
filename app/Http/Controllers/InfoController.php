<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use Auth;
use Image;
use DB;
use Auth;


class InfoController extends Controller
{
    //
    public function index(){
    	
    }

    public function save(Request $request){
        dump($request->all());
    }



}
