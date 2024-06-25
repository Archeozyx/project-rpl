<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = ['home', 'pesan', 'wisata'];

        foreach ($pages as $page) {
            $filePath = resource_path("views/{$page}.blade.php");

            if (File::exists($filePath)) {
                $content = File::get($filePath);

                Page::updateOrCreate(
                    ['slug' => $page],
                    ['content' => $content]
                );
            }
        }
    }
}
