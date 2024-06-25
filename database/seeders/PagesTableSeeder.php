<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PagesTableSeeder extends Seeder
{
    public function run(): void
    {
        $pages = ['home', 'pesan', 'wisata'];

        foreach ($pages as $page) {
            $filePath = resource_path("views/{$page}.blade.php");

            if (File::exists($filePath)) {
                $content = File::get($filePath);

                // Extract image paths from the content
                preg_match_all('/src=["\'](.+?)["\']/', $content, $matches);
                $imagePaths = $matches[1];

                $images = [];
                foreach ($imagePaths as $path) {
                    if (File::exists(public_path($path))) {
                        $images[] = [
                            'path' => $path,
                            'data' => base64_encode(File::get(public_path($path)))
                        ];
                    }
                }

                Page::updateOrCreate(
                    ['slug' => $page],
                    [
                        'content' => $content,
                        'images' => $images
                    ]
                );
            }
        }
    }
}
