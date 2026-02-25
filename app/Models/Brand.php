<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'is_active'
    ];

    public function specs()
    {
        return $this->hasMany(GensetSpec::class);
    }

    public function getLogoUrlAttribute()
    {
        if ($this->logo && file_exists(public_path('storage/' . $this->logo))) {
            return asset('storage/' . $this->logo);
        }

        $dummyPath = public_path('genset-website/img/brand/' . $this->slug . '.png');

        if (file_exists($dummyPath)) {
            return asset('genset-website/img/brand/' . $this->slug . '.png');
        }

        return asset('genset-website/img/brand/default.png');
    }
}