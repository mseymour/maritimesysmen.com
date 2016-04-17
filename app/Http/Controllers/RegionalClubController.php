<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RegionalClub;
use App\RegionalDistrict;

class RegionalClubController extends Controller
{
  /**
   * Show all districts with clubs and presidents
   *
   * @return Response
   */
  public function index()
  {
    return view('clubs.clubs', ['districts' => RegionalDistrict::with('clubs.president', 'clubs.meeting_place_province')->get()]);
  }

  /**
   * Show the club for the given ID.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    return view('clubs.club', ['club' => RegionalClub::findBySlugOrIdOrFail($id)]);
  }
}