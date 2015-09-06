<?php

namespace App\Http\Controllers;

use App\RegionalClub;
use App\RegionalDistrict;
use App\Http\Controllers\Controller;

class RegionalClubController extends Controller
{
  /**
   * Show all districts with clubs and presidents
   *
   * @return Response
   */
  public function showIndex()
  {

    if (\Request::ajax()) {
      return \Response::json(RegionalClub::with('meeting_place_province')->get());
    } else {
        return view('clubs.clubs', ['districts' => RegionalDistrict::all()]);
    }
  }

  /**
   * Show the club for the given ID.
   *
   * @param  int  $id
   * @return Response
   */
  public function showClub($id)
  {
    return view('clubs.club', ['club' => RegionalClub::findBySlugOrIdOrFail($id)]);
  }
  
}