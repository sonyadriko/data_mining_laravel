<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $query1 = DB::table('data_training')->count();
        $query2 = DB::table('atribut')->count();
        $query3 = DB::table('user')->count();

        return view('dashboard',compact('query1','query2','query3'));
    }
}
