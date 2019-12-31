@extends('layouts.userMaster')
@section('uLog')
<a href="{{ route('user.logout') }}" style="color: #c9c424;">Logout</a>
@endsection
@section('content')
<div class="unsuccess">
    <div class="text-danger text-center"><h1>{{ $msg }}</h1></div>
</div>
@endsection