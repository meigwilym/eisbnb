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
}
