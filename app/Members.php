<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{


// The attributes that are mass assignable.

protected $fillable = ['firstName'];
protected $fillable = ['lastName'];
protected $fillable = ['address'];
protected $fillable = ['DOB'];
protected $fillable = ['phone'];
protected $fillable = ['subscription'];

// Find user

public function user()
{
  return $this->belongsTo(User::class);
}


}
