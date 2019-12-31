@extends('layouts.adminMaster')
@section('content')
<div class="newElection">
 	<table class="table table-bordered clearfix font-weight-bold">
 		<form action="{{ route('admin.endElection') }}" method="POST">
 			@csrf
 		<div class="form-group">
 		<tr>
 			<td>Select Election To End Election</td>
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
 			<td colspan="2"><button type="submit" class="btn btn-danger btn-block">End Election</button></td>
 		</tr>
 	</form>
 	</table>
 </div>
@endsection