<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;

class EventController extends Controller
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
      return view('events.index', ['events' => Event::all()]);
    } else {
      return view('events.single', ['event' => Event::findBySlugOrIdOrFail($id)]);
    }
  }
}