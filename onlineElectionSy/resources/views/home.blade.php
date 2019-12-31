@extends('layouts.userMaster')
@section('aLog')
<a href="{{ route('user.logout') }}" style="color: #c9c424;">Logout</a>
@endsection
@section('content')
<div class="w-50 pb-3 rules">
    <h4 class="p-4">ELECTION RULES & REGULATIONS</h4>
    <div>
        <ul>
            <h5>Voting Day Rules:</h5>
            <li>
            Radio and newspaper campaign ads are prohibited on general voting day.
            </li>
            <li>
            Signing a false statement is an offense.
            </li>
            <li>
            Vote buying and intimidation are prohibited. 
            </li>
            <li>
            All 50 states currently allow residents to vote absentee, though 20 require voters to provide an excuse of why they can’t show up on election day. These are often due earlier than the actual election day, so it’s important to check the due date with your local election commission.
            </li>
            <li>
            One person is permitted for single vote. 
            </li>
        </ul>
    </div>
</div>
@endsection
