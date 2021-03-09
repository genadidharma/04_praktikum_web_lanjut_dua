<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert(
        [
            'title' => 'Judul 3',
            'slug' => 'judul-3',
            'category' => 'LIFESTYLE',
            'image' => 'images/blog/blog-sidebar-image01.jpg',
            'content' => '',
            'draft' => 0
            ]
        );
    }
}
