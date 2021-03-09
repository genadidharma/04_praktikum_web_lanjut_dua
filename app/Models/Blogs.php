<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    public static function blogs() {
        return blogs::orderBy('category')
            ->get();
    }

    public static function getBlogBySlug($slug) {
        return Blogs::where('slug', $slug)
            ->first();
    }
}
