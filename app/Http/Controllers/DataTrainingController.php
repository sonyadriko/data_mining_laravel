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
        return redirect('/data_training');

    }

    public function edit($id)
    {
        $datat = DataT::find($id);

        return view('data_training.edit',compact('datat'));
    }

    public function update(Request $request, $id)
    {
        DataT::where('id_datatraining',$id)->update([
            'age' => $request->age,
            'year' => $request->year,
            'axillary' => $request->axillary,
            'survival_status' => $request->survival_status,
        ]);
        return redirect('data_training');
    }
}
