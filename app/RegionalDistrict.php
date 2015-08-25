<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class RegionalDistrict extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];
  /**
   * Get all Regional Presidents for the district.
   */
  public function presidents()
  {
      return $this->hasMany('App\RegionalPresident', 'district_id');
  }

  /**
   * Get all clubs for the district.
   */
  public function clubs()
  {
      return $this->hasMany('App\RegionalClub', 'district_id');
  }
}
