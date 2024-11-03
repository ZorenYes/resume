<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(){
        $info = DB::table ('info')->first();
    
        return view('welcome', ['info' => $info]);
    }
}
