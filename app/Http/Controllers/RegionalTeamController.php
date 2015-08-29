<?php

namespace App\Http\Controllers;

use App\RegionalTeamMember;
use App\Http\Controllers\Controller;

class RegionalTeamController extends Controller
{
  /**
   * Show the club for the given ID.
   *
   * @return Response
   */
  public function showIndex()
  {
      return view('team.members', ['team' => RegionalTeamMember::all()]);
  }
}