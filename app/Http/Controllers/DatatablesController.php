<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    public function getIndex(){
    	return view('datatables.index');
    }

    public function anyData(){
    	 return Datatables::of(Job::query())->make(true);
    }


}
