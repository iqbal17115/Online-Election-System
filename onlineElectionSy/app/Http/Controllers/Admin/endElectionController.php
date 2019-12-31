<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewElection;

class endElectionController extends Controller
{
    public function endElectionForm(){
       $title=NewElection::all(['id', 'title']);
       return view('admin.endElectionForm',['title'=>$title]);
    }
    
    public function endElection(Request $request){
    	$check=NewElection::where('id',$request->opt)->value('endDate');
    	if($check == 'On going!'){
    		$date=date('Y-m-d');
            $id=NewElection::where('id',$request->opt)->update(['endDate'=> date('Y-m-d')]);
    	}else{
    		return view('admin.unsuccess')->with('msg','This election previously ended!');
    	}
    }
}
