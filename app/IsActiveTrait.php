<?php

namespace App;

use \Illuminate\Database\Eloquent\Builder;

trait IsActiveTrait {

    public function scopeIsActive(Builder $q)
    {
        $q->where('active', true);
    }
}
