<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GensetInquiry;
use App\Models\WebsiteSetting;
use App\Support\OptimizedImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteSettingController extends Controller
{
    public function index()
    {
        $inquiries = GensetInquiry::with('spec.brand')
                    ->latest()
                    ->get();
        $settings = WebsiteSetting::first();
        return view('admin.settings.index', compact('inquiries','settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'location_name' => 'nullable|string|max:150',
            'whatsapp_number' => 'nullable|string|max:30',
            'address' => 'nullable|string',
            'map_zoom' => 'nullable|integer|min:10|max:20',
            'wa_template' => 'nullable|string',
            'contact_footer_names' => 'nullable|string',
            'navbar_color_start' => ['nullable', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'navbar_color_end' => ['nullable', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'button_color' => ['nullable', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'button_text_color' => ['nullable', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:15360',
        ]);

        $settings = WebsiteSetting::first();

        $data = [
            'location_name' => $request->location_name,
            'whatsapp_number' => $request->whatsapp_number,
            'address' => $request->address,
            'map_zoom' => $request->map_zoom ?? 17,
            'wa_template' => $request->wa_template,
            'contact_footer_names' => $request->contact_footer_names,
            'navbar_color_start' => $request->navbar_color_start ?? '#5aa1e3',
            'navbar_color_end' => $request->navbar_color_end ?? '#2f6fb1',
            'button_color' => $request->button_color ?? '#b91c1c',
            'button_text_color' => $request->button_text_color ?? '#ffffff',
        ];

        // 🔥 AUTO GENERATE EMBED LINK
        if ($request->address) {
            $encoded = urlencode($request->address);
            $zoom = $request->map_zoom ?? 17;

            $data['map_embed_url'] =
                "https://www.google.com/maps?q={$encoded}&z={$zoom}&output=embed";
        }

        if ($request->hasFile('logo')) {

            if ($settings->logo && Storage::exists('public/'.$settings->logo)) {
                Storage::delete('public/'.$settings->logo);
            }

            $data['logo'] = OptimizedImageStorage::store($request->file('logo'), 'settings', [
                'max_width' => 1000,
                'max_height' => 1000,
                'quality' => 86,
            ]);
        }

        $settings->update($data);

        return back()->with('success','Settings updated successfully!');
    }
}
