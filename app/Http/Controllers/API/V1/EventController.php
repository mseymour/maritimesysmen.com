<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feature = Event::findBySlugOrIdOrFail($id)->load(['links', 'location_province']);
        $features = [];

        $address = implode(' ', [
            $feature->location_address,
            $feature->location_postal_code,
            $feature->location_city,
            $feature->location_province->code
        ]);
        $address = \Geocoder::geocode($address);
        $point = new \GeoJson\Geometry\Point([$address->getLongitude(), $address->getLatitude()]);

        $description =
            '<div class="event-address"><span class="name">' .
            $feature->location_name .
            '</span><br><span class="street-address">' .
            $feature->location_address .
            '</span><br><span class="postal-code">' .
            $feature->location_postal_code .
            '</span><br><span class="locality">' .
            $feature->location_city . ' ' . $feature->location_province->code .
            '</span></div>';

        $properties = [
            'title' => $feature->name,
            'description' => $description,
            'marker-color' => '#FF0E24',
            'marker-size' => 'large',
            'marker-symbol' => 'star',
        ];

        array_push($features, new \GeoJson\Feature\Feature($point, $properties));

        return \Response::json(new \GeoJson\Feature\FeatureCollection($features));
    }
}
