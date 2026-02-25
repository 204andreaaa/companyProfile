<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('logo')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('genset_specs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('brand_id')
                  ->constrained('brands')
                  ->onDelete('cascade');

            $table->string('model');
            $table->string('engine');
            $table->string('alternator');

            // OUTPUT
            $table->integer('prp_kva')->nullable();
            $table->integer('esp_kva')->nullable();
            $table->integer('prp_kw')->nullable();
            $table->integer('esp_kw')->nullable();

            $table->float('fuel')->nullable();

            // OPEN TYPE
            $table->integer('l_open')->nullable();
            $table->integer('w_open')->nullable();
            $table->integer('h_open')->nullable();
            $table->integer('kg_open')->nullable();

            // SILENT TYPE
            $table->integer('l_silent')->nullable();
            $table->integer('w_silent')->nullable();
            $table->integer('h_silent')->nullable();
            $table->integer('kg_silent')->nullable();

            $table->string('image')->nullable();

            $table->timestamps();

            $table->unique(['brand_id','model']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genset_specs');
        Schema::dropIfExists('brands');
    }
};