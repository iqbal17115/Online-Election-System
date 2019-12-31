@extends('layouts.adminMaster')
@section('aLog')
<a href="{{ route('admin.logout') }}" style="color: #c9c424;">Logout</a>
@endsection
@section('content')
   <div class="newElection">
 	<table class="table table-bordered clearfix font-weight-bold">
 		<form action="{{ route('admin.viewElection') }}" method="POST" enctype="multipart/form-data">
 			@csrf
 		<div class="form-group">
 		<tr>
 			<td>Select Election To View Candidates</td>
 			<td>
 				<select name="opt" id="">
 				    @foreach($title AS $title1)

                     <option value="{{ $title1->id }}">
                        {{ $title1->title }}
                     </option>

 				    @endforeach
 				</select>
 			</td>
 		</tr>
 		</div>
 		
 		<tr>
 			<td colspan="2"><button type="submit" class="btn btn-success btn-block">Search</button></td>
 		</tr>
 	</form>
 	</table>
 </div>
@endsection