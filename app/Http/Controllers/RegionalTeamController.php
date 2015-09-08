<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RegionalTeamMember;

class RegionalTeamController extends Controller
{
  /**
   * Show the club for the given ID.
   *
   * @return Response
   */
  public function index()
  {
      return view('team.members', ['team' => RegionalTeamMember::all()]);
  }
}