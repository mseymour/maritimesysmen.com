<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Event extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];
  /**
   * Get the event links.
   */
  public function links()
  {
      return $this->hasMany('App\EventLink');
  }

  /**
   * Get the event location's province
   */
  public function location_province()
  {
    return $this->belongsTo('App\Province', 'location_province_id');
  }
}
