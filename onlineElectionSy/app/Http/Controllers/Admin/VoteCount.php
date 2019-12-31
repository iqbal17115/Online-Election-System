<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\NewElection;
use App\Vote;
use App\User;
use App\CandidateDetails;

class VoteCount extends Controller
{
     public function voteForm(){
		$title=NewElection::all(['id', 'title']);
       return view('admin/selectElection', ['title'=>$title]);
	}

    public function count(Request $request){
        
       $result=DB::table('votes')
        ->select('cId','candidate_details.cName','info','image','title',DB::raw('COUNT(vote) AS vote'))
        ->join('candidate_details', 'candidate_details.id', 'votes.cId')
        ->join('new_elections', 'new_elections.id', 'votes.eId')
        ->where('votes.eId',$request->opt)
        ->groupBy('cId')
        ->groupBy('cName')
        ->groupBy('info')
        ->groupBy('image')
        ->groupBy('title')
        ->get();
    
       return view('admin/electionResult',['result'=>$result]);
    }
}
