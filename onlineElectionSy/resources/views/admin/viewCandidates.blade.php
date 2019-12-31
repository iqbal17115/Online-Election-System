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
 <div class="cDetails">
 	<table class="table text-center table-bordered">
 		<thead class="bg-primary font-weight-bolder">
 			<tr>
 				<th>Name</th>
 				<th>Image</th>
 				<th>Information</th>
 			</tr>
 		</thead>
 		<tbody class="font-weight-bold">
 			@foreach($cDetails AS $cDetails)
            <tr class="p-1">
            	<td>{{ $cDetails->cName }}</td>
            	<td class="">
            		<center>		
            			<img style="width: 180px;height: 160px;" src="{{ Storage::url($cDetails->image) }}" alt="Fail">
            		</center>
            	</td>
            	<td>{{ $cDetails->info }}</td>
            </tr>
 			@endforeach
 		</tbody>
 	</table>
 </div>
@endsection