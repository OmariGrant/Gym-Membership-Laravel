@extends('template.app')

@section('title', 'Add a Member')

@section('content')
<form method="post" action="/members">
  {{ csrf_field() }}
  <div class="form-group">
    <label> First Name </label>
    <input type="text" name="firstName">
  </div>

  <div class="form-group">
    <label> Last Name </label>
    <input type="text" name="lastName">
  </div>

  <div class="form-group">
    <label> Email </label>
    <input type="email" name="email">
  </div>

  <div class="form-group">
    <label> Address 1 </label>
    <input type="text" name="address1">
  </div>

  <div class="form-group">
    <label> Address 2 </label>
    <input type="text" name="address2">
  </div>

  <div class="form-group">
    <label> Postcode </label>
    <input type="text" name="postcode">
  </div>

  <div class="form-group">
    <label> D.O.B </label>
    <input type="date" name="DOB">
  </div>

  <div class="form-group">
    <label> Phone </label>
    <input type="phone" name="phone">
  </div>

<label> Subscription </label>
  <div class="radio">
    <label><input type="radio" name="subscription" value="M">Monthly</label>
  </div>
  <div class="radio">
    <label><input type="radio" name="subscription" value="Y">Yearly</label>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>

</form>

@endsection
