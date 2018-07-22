<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{


// The attributes that are mass assignable.

protected $fillable = [
  'firstName',
  'lastName',
  'email',
  'address1',
  'address2',
  'postcode',
  'DOB',
  'phone',
  'subscription'
];

}
