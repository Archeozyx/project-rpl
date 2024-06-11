<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pages = [
            ['slug' => 'home', 'file_path' => 'resources/views/home.blade.php'],
            ['slug' => 'pesan', 'file_path' => 'resources/views/pesan.blade.php'],
            ['slug' => 'wisata', 'file_path' => 'resources/views/wisata.blade.php'],
        ];
        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
