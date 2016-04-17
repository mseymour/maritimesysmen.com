<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class ReportForm extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    public function report()
    {
        return $this->hasMany(Report::class);
    }

    public function getDataAttribute()
    {
        return json_decode($this->getOriginal('data'));
    }
}
