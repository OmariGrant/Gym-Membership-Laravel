@extends('template.app')

@section('title', $title)

@section('content')


  @if(isset($isEditPage))
    <form class="form-horizontal" method="post" action="/members/{{ $members->id }}">
    @method('PUT')
    <input type="hidden" name="id" name="id" value="{{ $members->id }}">
  @else
    <form class="form-horizontal" method="post" action="/members">
  @endif

  {{ csrf_field() }}

  <div class="form-group">
    <label class="control-label" for="fname"> First Name </label>
    <input type="text" name="firstName" class="form-control"
      placeholder="Enter your first name..."
      @if(isset($isEditPage)) value="{{ $members->firstName }}" @endif
      id="fname" required>
  </div>

  <div class="form-group">
    <label class="control-label" for="lname"> Last Name </label>
    <input type="text" name="lastName" class="form-control"
      placeholder="Enter your last name..."
      @if(isset($isEditPage)) value="{{ $members->lastName }}" @endif
      id="lname" required>
  </div>

  <div class="form-group">
    <label class="control-label" for="email"> Email </label>
    <input type="email" name="email" class="form-control"
      placeholder="Enter your email..."
      @if(isset($isEditPage)) value="{{ $members->email }}" @endif
      id="email" required>
  </div>

  <div class="form-group">
    <label class="control-label" for="add1"> Address 1 </label>
    <input type="text" name="address1" class="form-control"
    placeholder="Enter your address line 1..."
    @if(isset($isEditPage)) value="{{ $members->address1 }}" @endif
    id="add1" required>
  </div>

  <div class="form-group">
    <label class="control-label" for="add2"> Address 2 </label>
    <input type="text" name="address2" class="form-control"
    placeholder="Enter your address line 2..."
    @if(isset($isEditPage)) value="{{ $members->address2 }}" @endif
    id="add2">
  </div>

  <div class="form-group">
    <label class="control-label" for="postcode"> Postcode </label>
    <input type="text" name="postcode" class="form-control"
      placeholder="Enter your postcode..."
      @if(isset($isEditPage)) value="{{ $members->postcode }}" @endif
      id="postcode" required>
  </div>

  <label class="control-label"> Subscription </label>
  <div class="radio">
    <label class="control-label" for="monthly">
      <input type="radio" name="subscription"
      value="M" class="form-control"
      @if(isset($isEditPage))
        @if($members->subscription == 'M')
          checked="checked"
        @endif
      @endif
      id="monthly">
        Monthly
    </label>
  </div>
  <div class="radio">
    <label class="control-label" for="yearly">
      <input type="radio" name="subscription"
        value="Y" class="form-control"
        @if(isset($isEditPage))
          @if($members->subscription == 'Y')
            checked="checked"
          @endif
        @else {{-- if not the edit page check the yearly membership radio button --}}
          checked="checked"
        @endif
        id="yearly">
      Yearly
    </label>
  </div>

  <div class="form-group">
    <label class="control-label" for="DOB"> D.O.B </label>
    <input type="date" name="DOB" class="form-control"
      placeholder="Enter your date of birth..."
      @if(isset($isEditPage)) value="{{ $members->DOB }}" @endif
      id="DOB">
  </div>

  <div class="form-group">
    <label class="control-label" for="phone"> Phone </label>
    <input type="phone" name="phone" class="form-control"
      placeholder="Enter your phone number..."
      @if(isset($isEditPage)) value="{{ $members->phone }}" @endif
      id="phone">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-info form-control">Submit</button>
  </div>

</form>

@endsection
