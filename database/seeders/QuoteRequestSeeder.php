<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GensetSpec;
use App\Models\GensetInquiry;
use Faker\Factory as Faker; // 👈 TAMBAHIN INI

class QuoteRequestSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create(); // 👈 TAMBAHIN INI

        $specs = GensetSpec::all();

        if ($specs->count() === 0) {
            $this->command->info('No genset specs found. Run GensetSeeder first.');
            return;
        }

        for ($i = 1; $i <= 2; $i++) {

            $spec = $specs->random();

            GensetInquiry::create([
                'name' => $faker->name(),
                'email' => $faker->safeEmail(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
                'note' => $faker->sentence(),
                'brand_id' => $spec->brand_id,
                'genset_spec_id' => $spec->id,
            ]);
        }
    }
}