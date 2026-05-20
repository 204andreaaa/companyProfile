<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('website_settings', function (Blueprint $table) {
            $table->string('navbar_color_start', 7)->default('#5aa1e3')->after('contact_footer_names');
            $table->string('navbar_color_end', 7)->default('#2f6fb1')->after('navbar_color_start');
            $table->string('button_color', 7)->default('#b91c1c')->after('navbar_color_end');
            $table->string('button_text_color', 7)->default('#ffffff')->after('button_color');
        });
    }

    public function down(): void
    {
        Schema::table('website_settings', function (Blueprint $table) {
            $table->dropColumn([
                'navbar_color_start',
                'navbar_color_end',
                'button_color',
                'button_text_color',
            ]);
        });
    }
};
