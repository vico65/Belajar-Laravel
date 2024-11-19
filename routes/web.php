<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'Times-Still-Turns-The-Pages',
            'title' => 'Times Still Turns The Pages',
            'author' => 'Alvico',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum, voluptatibus illo omnis numquam, sunt itaque dolor delectus ratione molestiae nesciunt, incidunt in labore dolores quam minima blanditiis facere eligendi?'
        ],
        [
            'id' => 2 ,
            'slug' => 'The-Wild-Robots',
            'title' => 'The Wild Robots',
            'author' => 'Alvico',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae est dolores excepturi explicabo recusandae adipisci maxime vel? Modi veritatis eveniet error maiores quibusdam cumque distinctio, esse vel, possimus quasi laborum?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'Times-Still-Turns-The-Pages',
            'title' => 'Times Still Turns The Pages',
            'author' => 'Alvico',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum, voluptatibus illo omnis numquam, sunt itaque dolor delectus ratione molestiae nesciunt, incidunt in labore dolores quam minima blanditiis facere eligendi?'
        ],
        [
            'id' => 2 ,
            'slug' => 'The-Wild-Robots',
            'title' => 'The Wild Robots',
            'author' => 'Alvico',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae est dolores excepturi explicabo recusandae adipisci maxime vel? Modi veritatis eveniet error maiores quibusdam cumque distinctio, esse vel, possimus quasi laborum?'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});
// 