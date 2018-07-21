<?php
namespace App\Repositories;

use App\Members;
use App\User;

/**
 *
 */
class MembersRepository
{


  // get all Members
  public function listMembers()
  {
    return Members::all();
  }

// get particular member
  public function getMember(User $user)
  {
    return User::find($user->id)->Member->get();
  }
}


 ?>
