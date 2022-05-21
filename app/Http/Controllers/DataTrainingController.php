<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTrainingModel as DataT;

class DataTrainingController extends Controller
{
    //
    public function index()
    {
        $datatrainings = DataT::get();
        return view('data_training.index',compact('datatrainings'));
    }
}
