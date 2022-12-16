<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "headerItems" => [
            [
                "name" => "Characters",
                "href" => "/characters"
            ],
            [
                "name" => "Comics",
                "href" => "/comics"
            ],
            [
                "name" => "Movies",
                "href" => "/movies"
            ],
            [
                "name" => "TV",
                "href" => "/tv"
            ],
            [
                "name" => "Games",
                "href" => "/games"
            ],
            [
                "name" => "Collectibles",
                "href" => "/collectibles"
            ],
            [
                "name" => "Videos",
                "href" => "/videos"
            ],
            [
                "name" => "Fans",
                "href" => "/fans"
            ],
            [
                "name" => "News",
                "href" => "/news"
            ],
            [
                "name" => "Shop",
                "href" => "/shop"
            ],
        ]
    ];
    $comics = config('comics');
    return view('home', $data, compact("comics"));
});

Route::get('/comic/{index}', function ($index) {
    $data = [
        "headerItems" => [
            [
                "name" => "Characters",
                "href" => "/characters"
            ],
            [
                "name" => "Comics",
                "href" => "/comics"
            ],
            [
                "name" => "Movies",
                "href" => "/movies"
            ],
            [
                "name" => "TV",
                "href" => "/tv"
            ],
            [
                "name" => "Games",
                "href" => "/games"
            ],
            [
                "name" => "Collectibles",
                "href" => "/collectibles"
            ],
            [
                "name" => "Videos",
                "href" => "/videos"
            ],
            [
                "name" => "Fans",
                "href" => "/fans"
            ],
            [
                "name" => "News",
                "href" => "/news"
            ],
            [
                "name" => "Shop",
                "href" => "/shop"
            ],
        ]
    ];
    $comics = config('comics');
    return view('comic', $data, compact("comics"));
});
