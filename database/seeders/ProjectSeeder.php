<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            'Instalasi Genset 5x2000 KVA @Mall Pesona Square Depok',
            'Instalasi Genset 2x1250 KVA Pabrik Minyak Sel Mangkel',
            'Instalasi Genset 2000 KVA @BNI Pejompongan',
        ];

        foreach ($projects as $index => $title) {
            Project::firstOrCreate(
                ['slug' => Str::slug($title)],
                [
                    'title' => $title,
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
