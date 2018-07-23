@extends('template.app')

@section('title', 'Add a Member')

@section('content')

  <table class="table table-hover">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Subscription</th>
          <th>View Member?</th>
          <th>Edit Member?</th>
        </tr>
      </thead>
      <tbody>

@foreach ($members as $member)
      <tr>
        <td>{{ $member->firstName }}</td>
        <td>{{ $member->lastName }}</td>
        <td>{{ $member->email }}</td>
        <td>@if($member->subscription == 'M') Monthly @else Yearly @endif</td>
        <td><a href="{{ url('/members\/').$member->id }}" class="btn btn-link" role="button">View Member</a></td>
        <td><a href="{{ url('/members\/').$member->id }}/edit" class="btn btn-link" role="button">Edit Member</a></td>
      </tr>

@endforeach

</tbody>
</table>

@endsection
