<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::factory(20)->create([
            'imageable_id' => Post::all()->random()->id,
            'imageable_type' => Post::class
        ]);
    }
}
