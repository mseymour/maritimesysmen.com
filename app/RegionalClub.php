<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class RegionalClub extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];
  /**
   * Get the president of the club.
   */
  public function president()
  {
      return $this->hasOne('App\RegionalPresident', 'club_id');
  }

  /**
   * Get the district of the club.
   */
  public function district()
  {
      return $this->belongsTo('App\RegionalDistrict');
  }

  /**
   * Get the meeting place's province
   */
  public function meeting_place_province()
  {
    return $this->belongsTo('App\Province');
  }

}
