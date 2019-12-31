<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewElection;
use App\CandidateDetails;

class AddCandidateController extends Controller
{

    	public function cadidateDetails(Request $request){
         if($request->total > 0){
         
         $this->validate($request, [
          'name'=>'required',
          'info'=>'required',
          'image'=>'required',
         ]);
         
         $data=[
           'name'=>$request->name,
           'info'=>$request->info,
           'image'=>$request->image,
         ];
          $id=NewElection::select('id')
        ->orderBy('id', 'desc')
        ->limit(1)->value('id');
        $image=$data['image']->store('public/images');
         CandidateDetails::create([
          'eId'=>$id,
          'cName'=>$data['name'],
          'info'=>$data['info'],
          'image'=>$image,
         ]);
         
         if($request->total == 1){
            return view('admin.success')->with("msg","You added all members successfully!");
         }
         return view('admin.addCandidate',['total'=>$request->total]);
        }else{
       return view('admin.success')->with("msg","You added all members successfully!");
        }
    	}
}