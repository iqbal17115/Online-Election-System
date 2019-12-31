@extends('layouts.adminMaster')
@section('content')
 <div class="newElection">
 	<table class="table table-bordered clearfix font-weight-bold">
 		<form action="{{ route('admin.newElection') }}" method="POST">
 			@csrf
 		<div class="form-group">
 		<tr>
 			<td>Election title</td>
 			<td><input class="form-control border-1 border-dark p-1" type="text" name="title"></td>
 		</tr>
 		</div>
 		<tr>
 			<td>Select Number Of Candidates </td>
 			
 				<td>
 				<select class="custom-select custom-select-lg mb-3" name="noOfCandidates" id="">

 					<option value="1">1</option>
 					<option value="2">2</option>
 					<option value="3">3</option>
 					<option value="4">4</option>
 					<option value="5">5</option>
 					<option value="6">6</option>

 			     </select>
 				</td>
 		
 		</tr>
 		<div class="form-group">
 		<tr>
 			<td>Date</td>
 			<td><input class=" form-control border-1 border-dark p-1" type="date" name="date"></td>
 		</tr>
 		</div>
 		<tr>
 			<td colspan="2"><button type="submit" class="btn btn-success btn-block">Next</button></td>
 		
 		</tr>
 	</form>
 	</table>
 </div>

@endsection