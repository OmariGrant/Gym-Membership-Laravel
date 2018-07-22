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
  public function getMember($id)
  {
    return Members::find($id);
  }
}


 ?>
