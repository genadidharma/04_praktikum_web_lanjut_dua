<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::blogs();

        $header = $blogs->where('slug', 'judul-3')->first();
        
        $side_blogs = $blogs->filter(function($item){
            return $item->slug != 'judul-3';
        });

        return view('blog', ['header' => $header, 'side_blogs' => $side_blogs]);
    }
}
