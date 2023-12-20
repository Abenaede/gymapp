<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\memberModel;
use App\Models\trainerModel as ModelsTrainerModel;
use App\trainerModel;

class MemberController extends Controller
{
    public function index()
    {
        $member = memberModel::all();
        $trainer = ModelsTrainerModel::all();
        return view('AllMember')->with(['member' => $member,'trainer' => $trainer]);
    }

    public function create(){

    }

    public function store(Request $request)
    {
        $memberObj = new memberModel;
        $memberObj->Member_Name = $request->Member_Name;
        $memberObj->Member_Phone = $request->Member_phone;
        $memberObj->Trainer_id = $request->Trainer_id;
        $memberObj->save();
        return redirect('member');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update()
    {

    }

    public function destory($id)
    {
       $memberToDelete = memberModel::find($id);
       $memberToDelete->delete();
       return redirect('member');
    }
}