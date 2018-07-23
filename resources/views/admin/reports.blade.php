@extends('template.app')

@section('title', 'Reports')

@section('content')

<p>There are {{$total}} records in this report</p>
  <table class="table table-hover">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>DOB</th>
          <th>Phone</th>
          <th>Subscription</th>
        </tr>
      </thead>
      <tbody>

@foreach ($members as $member)
      <tr>
        <td>{{ $member->firstName }}</td>
        <td>{{ $member->lastName }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->address1 }}, {{ $member->address2 }}, {{ $member->postcode }}</td>
        <td>{{ $member->DOB }}</td>
        <td>{{ $member->phone }}</td>
        <td>{{ $member->subscription }}</td>
      </tr>

@endforeach

</tbody>
</table>

@endsection
