<?php
namespace App\Repositories;

use App\Members;
use App\User;
use Illuminate\Support\Facades\DB;

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

  // run reports by month and year.
  public function runReport($month, $year)
  {
    // return Members where month and year match created column
    return DB::table('members')->whereMonth('created_at', $month)->whereYear('created_at', $year)->get();
  }

  // value of total amount of potential members
  public function maxMembersRecords()
  {
    return Members::all()->pluck('id')->last();
  }
}


 ?>
