<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beat;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $rap = Genre::create([
            'name'=> 'rap'
        ]);

        $trap = Genre::create([
            'name'=> 'trap'
        ]);

        $rnb = Genre::create([
            'name'=> 'rnb'
        ]);

        Beat::create([
            'genre_id' => $rap->id,
            'name' => 'Crash',
            'bpm' => 80,
            'price' => 30,
            'slug' => 'crash',
            'filename' => 'crash.mp3'
        ]);

        Beat::create([
            'genre_id' => $rap->id,
            'name' => 'Light',
            'bpm' => 80,
            'price' => 30,
            'slug' => 'light',
            'filename' => 'light.mp3'
        ]);

        Beat::create([
            'genre_id' => $rnb->id,
            'name' => 'Bands',
            'bpm' => 80,
            'price' => 30,
            'slug' => 'bands',
            'filename' => 'bands.mp3'
        ]);

        Beat::create([
            'genre_id' => $trap->id,
            'name' => 'Smoke',
            'bpm' => 130,
            'price' => 50,
            'slug' => 'smoke',
            'filename' => 'smoke.mp3'
        ]);

    }
}
