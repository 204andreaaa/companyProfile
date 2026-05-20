<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'location',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)->orderBy('sort_order')->orderBy('id');
    }

    public function getCoverUrlAttribute(): string
    {
        $image = $this->images->first();

        if ($image) {
            return $image->image_url;
        }

        $fallbackNumber = (($this->id ?: 1) % 4) + 1;

        return asset('genset-website/imgGenset/'.$fallbackNumber.'.jpg');
    }

    public function fallbackSlides(): array
    {
        return [
            asset('genset-website/imgGenset/1.jpg'),
            asset('genset-website/imgGenset/2.jpg'),
            asset('genset-website/imgGenset/3.jpg'),
        ];
    }
}
