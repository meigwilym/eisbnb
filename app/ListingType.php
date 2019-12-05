<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingType extends Model
{
    protected $appends = ['icon'];

    public function getIconAttribute()
    {
        return '/img/icons/listing_type_'.$this->id.'.png';
    }
}
