<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


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

</div>

</body>
</html>
