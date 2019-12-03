<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Listing extends Model
{
    protected $guarded = [];

    protected $casts = [
        'cost_per_night' => 'integer',
        'beds' => 'integer',
        'amenities' => 'array',
        'availability' => 'array',
        'distances' => 'array',
    ];

    protected $appends = ['is_featured'];

    protected $hidden = ['user_id', 'listing_type_id', 'advert_level_id'];

    protected $with = ['images'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function advertLevel(): BelongsTo
    {
        return $this->belongsTo(AdvertLevel::class);
    }

    public function listingType(): BelongsTo
    {
        return $this->belongsTo(ListingType::class);
    }

    public function getIsFeaturedAttribute()
    {
        return $this->advertLevel->id === 3;
    }
}
