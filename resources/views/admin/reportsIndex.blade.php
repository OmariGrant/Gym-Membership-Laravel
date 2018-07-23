@extends('template.app')

@section('title', 'Reports')

@section('content')

<p>Please select the month and year of the report you would like to view.</p>

<form action="/reports" method="post">
  {{ csrf_field() }}

<div class="form-group">
  <label for="month">Month:</label>
  <select class="form-control" id="month" name="month">
    @for ($i = 1; $i <= 12; $i++)
      <option>{{$i}}</option>
    @endfor
  </select>
</div>


<div class="form-group">
  <label for="sel1">Year:</label>
  <select class="form-control" id="year" name="year">
    @for ($i = 2018; $i <= 2020; $i++)
      <option>{{$i}}</option>
    @endfor
  </select>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-info form-control">View Report</button>
</div>

</form>

@endsection
