<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class RegionalPresident extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];
  /**
   * Get the club of the president.
   */
  public function club()
  {
      return $this->belongsTo('App\RegionalClub');
  }

  /**
   * Get the district of the president.
   */
  public function district()
  {
      return $this->belongsTo('App\RegionalDistrict');
  }

  /**
   * Get the club president's province
   */
  public function province()
  {
    return $this->belongsTo('App\Province');
  }

}
