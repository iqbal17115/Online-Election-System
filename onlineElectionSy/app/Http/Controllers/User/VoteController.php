<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewElection;
use App\Vote;

class VoteController extends Controller
{
    public function votingForm(){

    	$title=NewElection::all(['id', 'title']);
    	return view('user/vote', ['title'=>$title]);

    }

    public function votingCandidate(Request $request){
        
    	$title=NewElection::all(['id', 'title']);
    	$user=NewElection::find($request->opt)->candidateDetails;
    	return view('user/voteCandidate', ['title'=>$title, 'user'=>$user]);

    }
    public function vote(Request $request){
     
       $dateCheck=NewElection::where('id',$request->eId)->value('endDate');
       if($dateCheck == 'On going!'){

         $row=Vote::where('email', $request->session()->get('email'))->where('eId', $request->eId)->where('vote','1')->count();
       if($row==0){
         Vote::create([
         'eId'=>$request->eId,
         'cId'=>$request->cId,
         'email'=>$request->session()->get('email'),
         'vote'=>'1',
       ]);
         return view('user/success')->with('msg','You have voted just now!');
       }else{
          return view('user/unsuccess')->with('msg','You are not capable for voting!');
       }
       }else{
          return view('user/unsuccess')->with("msg","This election has already ended!");
       }
       
    }
}
