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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'start_date', 'end_date'];

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

  public function scopeMajorEvents($query)
  {
    return $query->where('major', true)->get();
  }

  public function scopeOtherEvents($query)
  {
    return $query->where('major', false)->get();
  }
}
