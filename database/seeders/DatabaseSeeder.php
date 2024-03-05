<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $directoryPath = 'storage/posts';

        // Verifica si el directorio ya existe utilizando Storage
        if (Storage::exists($directoryPath)) {
            // Elimina el directorio si ya existe
            Storage::deleteDirectory($directoryPath);
        }

        // Crea el directorio utilizando Storage
        Storage::makeDirectory($directoryPath, 0755, true);
        //File::makeDirectory($directoryPath, 0755, true);
        // Storage::makeDirectory('posts');

        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class);
    }
}
