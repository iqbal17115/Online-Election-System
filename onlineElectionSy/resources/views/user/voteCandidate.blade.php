@extends('layouts.userMaster')
@section('uLog')
<a href="{{ route('user.logout') }}" style="color: #c9c424;">Logout</a>
@endsection
@section('content')
<div class="newElection">
 	<table class="table table-bordered clearfix font-weight-bold">
 		<form action="{{ route('user.vote') }}" method="POST">
 			@csrf
 		<div class="form-group">
 		<tr>
 			<td>Select Election To View Candidate</td>
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
 			<td colspan="2"><button type="submit" class="btn btn-danger btn-block">Submit</button></td>
 		</tr>
 	</form>
 	</table>
 </div>
 <div class="vote">
 	<table class="table table-bordered">
 		<thead class="bg-primary font-weight-bolder">
 			<tr>
 				<th>Name</th>
 				<th>Image</th>
 				<th>Information</th>
 				<th>Vote For Candidate</th>
 			</tr>
 		</thead>
 		<tbody>
 			<form action="{{ route('user.pressVote') }}" method="POST">
 				@csrf
 				@foreach($user AS $user)
              <tr>
              	<td>{{ $user->cName }}</td>
              	<td>
              		<center>
              			<img src="{{ Storage::url($user->image) }}" alt="" style="width: 180px;height: 160px;">
              		</center>
              	</td>
              	<input type="number" value="{{ $user->eId }}" name="eId">
              	<td>{{ $user->info }}</td>
              	<td>Vote For Candidate: <input type="submit" value="{{ $user->id }}" name="cId"></td>
              </tr>
 			@endforeach
 			</form>
 		</tbody>
 	</table>
 </div>
@endsection