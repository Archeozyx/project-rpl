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
            ['slug' => 'home', 'content' => '<h1>Welcome to the Homepage</h1>'],
            ['slug' => 'wisata', 'content' => '<h1>Wisata Page</h1>'],
            ['slug' => 'pesan', 'content' => '<h1>Pesan Page</h1>'],
        ];
        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
