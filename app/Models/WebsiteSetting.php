<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class WebsiteSetting extends Model
{
    protected $fillable = [
        'logo',
        'whatsapp_number',
        'location_name',
        'address',
        'map_zoom',
        'map_embed_url',
        'wa_template',
        'contact_footer_names',
        'navbar_color_start',
        'navbar_color_end',
        'button_color',
        'button_text_color',
    ];

    public function getLogoUrlAttribute()
    {
        if ($this->logo && Storage::exists('public/'.$this->logo)) {
            return asset('storage/'.$this->logo);
        }

        return asset('genset-website/imgGenset/logo.png');
    }

    public static function getSettings()
    {
        return self::first();
    }
}
