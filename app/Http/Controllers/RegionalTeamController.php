<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RegionalTeamMember;

class RegionalTeamController extends Controller
{
  /**
   * Show the regional team.
   *
   * @return Response
   */
  public function index()
  {
      return view('team.members', ['team' => RegionalTeamMember::all(), 'years' => region_year()]);
  }

  /**
   * Show the team member for the given ID.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    return view('team.member', ['member' => RegionalTeamMember::findBySlugOrIdOrFail($id)]);
  }
}