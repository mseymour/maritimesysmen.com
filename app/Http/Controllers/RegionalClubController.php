<?php

namespace App\Http\Controllers;

use App\RegionalClub;
use App\RegionalDistrict;
use App\Http\Controllers\Controller;

class RegionalClubController extends Controller
{
  /**
   * Show the club for the given ID.
   *
   * @param  int  $id
   * @return Response
   */
  public function showIndex($id = null)
  {
    if (!$id) {
      return view('regional.clubs', ['districts' => RegionalDistrict::all()]);
    } else {
      return view('regional.club', ['club' => RegionalClub::findBySlugOrIdOrFail($id)]);
    }
  }
}