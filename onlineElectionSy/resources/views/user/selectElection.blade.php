@extends('layouts.userMaster')
@section('uLog')
<a href="{{ route('user.logout') }}" style="color: #c9c424;">Logout</a>
@endsection
@section('content')
<div class="newElection">
 	<table class="table table-bordered clearfix font-weight-bold">
 		<form action="{{ route('user.voteCount') }}" method="POST">
 			@csrf
 		<div class="form-group">
 		<tr>
 			<td>Select Election To Count Vote</td>
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
@endsection