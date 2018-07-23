@extends('template.app')

@section('title', 'Add a Member')

@section('content')


<p>First Name: {{ $member->firstName }}</p>
<p>Last Name: {{ $member->lastName }}</p>
<p>Email: {{ $member->email }}</p>
<p>Address: {{ $member->address1 }}, {{ $member->address2 }}, {{ $member->postcode }}</p>
<p>DOB: {{ $member->DOB }}</p>
<p>Phone: {{ $member->phone }}</p>
<p>Subscription: @if($member->subscription == 'M') Monthly @else Yearly @endif</p>

<a href="{{ url('/members\/').$member->id }}/edit" class="btn btn-link" role="button">Edit {{$member->firstName.' '.$member->lastName}}</a>

@endsection
