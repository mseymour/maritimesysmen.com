<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  /**
   * Show the club for the given ID.
   *
   * @param  int  $id
   * @return Response
   */
  public function showIndex()
  {
      return view('home', ['events_major' => Event::majorEvents(), 'events_other' => Event::otherEvents()]);
  }
}