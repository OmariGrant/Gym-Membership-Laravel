<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{


// The attributes that are mass assignable.

protected $fillable = [
  'firstName',
  'lastName',
  'address',
  'DOB',
  'phone',
  'subscription'
];


// Find user

public function user()
{
  return $this->belongsTo(User::class);
}


}
