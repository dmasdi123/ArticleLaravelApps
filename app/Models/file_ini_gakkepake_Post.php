<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Dimas",
            "body" => "  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita eaque natus eos provident similique quia ducimus repellat sint doloribus neque, quisquam maxime est aut assumenda velit reiciendis nobis quaerat alias! Tenetur aliquam blanditiis laboriosam omnis sunt impedit, officia obcaecati maxime?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Vezaaa",
            "body" => "  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita eaque natus eos provident similique quia ducimus repellat sint doloribus neque, quisquam maxime est aut assumenda velit reiciendis nobis quaerat alias! Tenetur aliquam blanditiis laboriosam omnis sunt impedit, officia obcaecati maxime?"
        ]
    ];

    public static function all() {
        return collect(self::$blog_post);
    }

    public static function find($slug) {
        // return static::all()->firstWhere('slug', $slug);
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
