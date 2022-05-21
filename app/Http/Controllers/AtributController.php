<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AtributController extends Controller
{
    //
    public function index()
    {
        $atributs = DB::table('atribut')->get();
        return view('/atribut/index',compact('atributs'));
    }
}
