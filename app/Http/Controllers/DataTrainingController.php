<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTrainingModel as DataT;
use DB;

class DataTrainingController extends Controller
{
    //
    public function index()
    {
        $datatrainings = DataT::get();
        return view('data_training.index',compact('datatrainings'));
    }

    public function create()
    {
        return view('data_training.create');
    }

    public function store(Request $request)
    {
        $form = new DAtaT;
        $form->age = $request->age;
        $form->year = $request->year;
        $form->axillary = $request->axillary;
        $form->survival_status = $request->survival_status;
        $form->save();
        return redirect('data_training');

    }
}
