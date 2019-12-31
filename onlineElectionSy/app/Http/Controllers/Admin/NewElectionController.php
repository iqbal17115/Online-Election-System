<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewElection;

class NewElectionController extends Controller
{
    public function addNewElection(){
    	return view('admin.newElection');
    }

    public function addCandidates(Request $request){
       $this->validate($request, [
         'title'=>'required',
         'date'=>'required',
       ]);
    
       $data=[
        'title'=>$request->title,
        'date'=>$request->date,
        'noOfCandidate'=>$request->noOfCandidates,
       ];
       NewElection::create([
         'title'=>$data['title'],
         'date'=>$data['date'],
         'noOfCandidate'=>$data['noOfCandidate'],
       ]);
       $total=$data['noOfCandidate'];
       ++$total;
       return view('admin.addCandidate',['total'=>$total]);
    }
}
