@extends('layouts.adminMaster')
@section('aLog')
<a href="{{ route('admin.logout') }}" style="color: #c9c424;">Logout</a>
@endsection
@section('content')
   <div class="newElection">
 	<table class="table table-bordered clearfix font-weight-bold">
 		<form action="{{ route('admin.addCandidateDetails') }}" method="POST" enctype="multipart/form-data">
 			@csrf

 			<input type="number" value="{{ --$total }}" name="total">
 		<div class="form-group">
 		<tr>
 			<td>Candidate Name</td>
 			<td><input class="form-control border-1 border-dark p-1" type="text" name="name"></td>
 		</tr>
 		</div>
 		<tr>
 			<td>Info</td>
 			<td><input class="form-control border-1 border-dark p-1" type="text" name="info"></td>
 		
 		</tr>
 		<div class="form-group">
 		<tr>
 			<td>Image</td>
 			<td><input class="form-control border-1 border-dark p-1" type="file" name="image"></td>
 		</tr>
 		</div>
 		<tr>
 			<td colspan="2"><button type="submit" class="btn btn-success btn-block">Next</button></td>
 		
 		</tr>
 	</form>
 	</table>
 </div>
@endsection
