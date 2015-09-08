<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RegionalDistrict;
use App\RegionalClub;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function showTheRegion()
    {
        return view('about.the_region', [
          'district_count' => RegionalDistrict::count(),
          'club_count' => RegionalClub::count()
        ]);
    }
}
