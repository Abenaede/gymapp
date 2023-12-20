<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trainerModel;

class TrainerController extends Controller
{
    public function index(){
        $trainer = trainerModel::all();
        return view('AllTrainer')->with('trainer',$trainer);
    }

    public function create(){

    }

    public function store(Request $request){
        $trainerObj = new trainerModel;
        $trainerObj->Trainer_Name =$request->Trainer_Name;
        $trainerObj->Trainer_Batch =$request->Trainer_Batch;
        $trainerObj->save();
        return redirect('trainer');
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
      $trainerObj = trainerModel::find($id);
      $trainerObj->Trainer_Name = $request->Trainer_Name;
      $trainerObj->Trainer_Batch = $request->Trainer_Batch;
      $trainerObj->save();
      return redirect('trainer');
    }

    public function destory($id)
    {
      $trainerToDelete = trainerModel::find($id);
      $trainerToDelete->delete();
      return redirect('trainer');
    }

}
