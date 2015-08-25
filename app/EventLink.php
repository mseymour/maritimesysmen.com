<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLink extends Model
{

  /**
   * Get the link's associated event
   */
  public function event()
  {
      return $this->belongsTo('App\Event');
  }
}
