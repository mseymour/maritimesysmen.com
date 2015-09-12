<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\RegionalClub;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      RegionalClub::updating(function ($club) {
      $geocode = \Geocoder::geocode(
                   $club->meeting_place_address . ' ' .
                   $club->meeting_place_city . ', ' .
                   $club->meeting_place_province->code.' '.
                   $club->meeting_place_postal_code);
        $club->meeting_place_lat = $geocode->getLatitude();
        $club->meeting_place_long = $geocode->getLongitude();
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
