<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewElection;
use App\CandidateDetails;

class ViewElectionController extends Controller
{
    public function view(){
        
        $title=NewElection::all(['id', 'title']);
        return view('admin.viewElection', ['title'=>$title]);
    }
 public function viewCandidates(Request $request){

 	$id=$request->input('opt');
    $cDetails=CandidateDetails::where('eId','=',$id)->get();
     $title=NewElection::all(['id', 'title']);
    return view('admin.viewCandidates', ['title'=>$title, 'cDetails'=>$cDetails]);
    }
}
