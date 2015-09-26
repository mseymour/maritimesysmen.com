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

  /**
   * Returns all clubs as GeoJSON
   *
   * @return Response
   */
  public function clubsGeoJson()
  {
    $features = [];
    foreach (RegionalClub::with('meeting_place_province')->get() as $feature) {
      $point = new \GeoJson\Geometry\Point([(float)$feature->meeting_place_long, (float)$feature->meeting_place_lat]);

      $description =
        '<div class="club-address"><span class="name">' .
        $feature->meeting_place_name .
        '</span><br><span class="street-address">' .
        $feature->meeting_place_address .
        '</span><br><span class="postal-code">' .
        $feature->meeting_place_postal_code .
        '</span><br><span class="locality">' .
        $feature->meeting_place_city . ' ' . $feature->meeting_place_province->code .
        '</span></div>';

      $properties = [
        'title' => $feature->name,
        'description' => $description,
        'marker-color' => '#FF0E24',
        'marker-size' => 'large',
        'marker-symbol' => 'star'
      ];

      array_push($features, new \GeoJson\Feature\Feature($point, $properties));
    }
    return \Response::json(new \GeoJson\Feature\FeatureCollection($features));
  }
}