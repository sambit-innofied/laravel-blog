<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "My Blog",

        "blogs" => [
            [
                "url" => "/",
                "is_trending" => true,
                "author" => "Sambit Sarkar",
                "author_image_url" => "https://avatars.githubusercontent.com/u/87202351?v=4",
                "image_url_potrait" => "https://fastly.picsum.photos/id/299/300/350.jpg?hmac=w9b4w232XL4IUBN3jok3KfxDBkntCT5NdUPUpmnooQY",
                "image_url_landscape" => "https://fastly.picsum.photos/id/319/360/160.jpg?hmac=NLWFlVNpsj8z59NQlo7KqTjGlQP2Ab0emA-xqHQ3YAA",
                "title" => "Laravel Websockets | Chat Application",
                "date" => "October 06, 2022",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi dolor officia, architecto sapiente optio earum.",
                "tags" => "newyork,building,street"
            ]
        ]
    ]);
});
