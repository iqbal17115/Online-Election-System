@extends('layouts.adminMaster')
@section('aLog')
<a href="{{ route('user.logout') }}" style="color: #c9c424;">Logout</a>
@endsection
@section('content')
<div class="result">
    <table class="table table-bordered">
        <thead class="bg-primary font-weight-bold">
            <tr>
                <th>Candidate Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Info</th>
                <th>Election Name</th>
                <th>Vote Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result AS $result)
               <tr>
                   <td>{{ $result->cId }}</td>
                   <td><img src="{{ Storage::url($result->image) }}" alt="" style="width: 180px; height: 160px"></td>
                   <td>{{ $result->cName }}</td>
                   <td>{{ $result->info }}</td>
                   <td>{{ $result->title }}</td>
                   <td>{{ $result->vote }}</td>
               </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection