<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Seeder;

class WebsiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $locationName = 'PT. BIMASAKTI PRIMA PERKASA';

        $address = 'Wisma 81, Jl. Cideng Barat No.81, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150';

        $zoom = 18;

        WebsiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'location_name' => $locationName,

                'whatsapp_number' => '6281234567890',

                'address' => $address,

                'map_zoom' => $zoom,

                'map_embed_url' =>
                    "https://www.google.com/maps?q=" . urlencode($address) . "&z={$zoom}&output=embed",

                'wa_template' => "Halo {name},

Terima kasih atas inquiry Anda mengenai:
{brand} {model}

Catatan:
{note}

Tim kami akan segera menghubungi Anda.",

                'contact_footer_names' => "Kubota
Perkins
Mitsubishi
MTU
Himoinsa
Doosan
Yanmar
Cummins
FPT_Iveco",

                'navbar_color_start' => '#5aa1e3',
                'navbar_color_end' => '#2f6fb1',
                'button_color' => '#b91c1c',
                'button_text_color' => '#ffffff',
            ]
        );
    }
}
