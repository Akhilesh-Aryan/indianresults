<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function homepage(){
        return view('home',["data"=>Result::all()]);
    }
    public function insertResult(Request $req){
        $req->validate([
            'name'=>'required',
            'father'=>'required',
            'contact'=>'required|min:8',
            'email'=>'required|email',
            'school'=>'required|min:5',
            'city'=>'required',
            'dob'=>'required|date',
            'gender'=>'required',
            'roll_no'=>'required',
            'roll_code'=>'required',
            'math'=>'required|max:3',
            'science'=>'required|max:3',
            'sst'=>'required|max:3',
            'hindi'=>'required|max:3',
            'english'=>'required|max:3',
        ]);
        Result::create([
            'name'=>$req->name,
            'father'=>$req->father,
            'contact'=>$req->contact,
            'email'=>$req->email,
            'school'=>$req->school,
            'city'=>$req->city,
            'dob'=>$req->dob,
            'gender'=>$req->gender,
            'roll_no'=>$req->roll_no,
            'roll_code'=>$req->roll_code,
            'math'=>$req->math,
            'science'=>$req->science,
            'sst'=>$req->sst,
            'hindi'=>$req->hindi,
            'english'=>$req->english,
        ]);
        return redirect()->back();
    }
    public function result($id){
        return view('result',["item"=>Result::find($id)]);
    }
    public function delete($id){
        Result::find($id)->delete();
        return redirect()->back();
    }
    // public function search($id){
    //     Result::find($id)->where()->get();
    // }

    public function update($edit_id){
          $data['record']=Result::find($edit_id);
          return view('edit',$data);
    }
    public function updateResult(Request $req){
        $req->validate([
            'name'=>'required',
            'father'=>'required',
            'contact'=>'required|min:8',
            'email'=>'required|email',
            'school'=>'required|min:5',
            'city'=>'required',
            'dob'=>'required|date',
            'gender'=>'required',
            'roll_no'=>'required',
            'roll_code'=>'required',
            'math'=>'required|max:3',
            'science'=>'required|max:3',
            'sst'=>'required|max:3',
            'hindi'=>'required|max:3',
            'english'=>'required|max:3',
        ]);
          Result::find($req->id)->update([
            'name'=>$req->name,
            'father'=>$req->father,
            'contact'=>$req->contact,
            'email'=>$req->email,
            'school'=>$req->school,
            'city'=>$req->city,
            'dob'=>$req->dob,
            'gender'=>$req->gender,
            'roll_no'=>$req->roll_no,
            'roll_code'=>$req->roll_code,
            'math'=>$req->math,
            'science'=>$req->science,
            'sst'=>$req->sst,
            'hindi'=>$req->hindi,
            'english'=>$req->english,
        ]);
        return redirect()->back();
    }
}
