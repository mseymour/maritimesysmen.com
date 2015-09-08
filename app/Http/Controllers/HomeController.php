<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;

class HomeController extends Controller
{
  /**
   * Show the club for the given ID.
   *
   * @param  int  $id
   * @return Response
   */
  public function index()
  {
      return view('home', ['events_major' => Event::majorEvents(), 'events_other' => Event::otherEvents()]);
  }
}