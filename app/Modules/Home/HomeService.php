<?php

declare(strict_types=1);

namespace App\Modules\Home;

use Illuminate\Http\Request;

class HomeService
{
    public function home(Request $request): array
    {
        $pageNumber = $request->query("page", 1);
        return [
            "title" => "My Blog",
            "page_length" => 10,
            "total_blogs" => 11,
            "page_number" => 1,

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
                ],
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
                ],
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
            ],

            "trending" => [
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
                ],
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
                ],
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
            ],
            "recent" => [
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
                ],
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
                ],
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
            ],

            "tags" => [
                [
                    "url" => "/",
                    "name" => "laravel"
                ],
                [
                    "url" => "/",
                    "name" => "Amazon"
                ],
                [
                    "url" => "/",
                    "name" => "COURSE       "
                ],
            ]
        ];
    }
}