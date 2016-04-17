<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RegionalClub;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }
}
