<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
   public static function all()
   {
      return [
         [
            'id' => 1,
            'slug' => 'Times-Still-Turns-The-Pages',
            'title' => 'Times Still Turns The Pages',
            'author' => 'Alvico',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum, voluptatibus illo omnis numquam, sunt itaque dolor delectus ratione molestiae nesciunt, incidunt in labore dolores quam minima blanditiis facere eligendi?'
         ],
         [
            'id' => 2,
            'slug' => 'The-Wild-Robots',
            'title' => 'The Wild Robots',
            'author' => 'Alvico',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae est dolores excepturi explicabo recusandae adipisci maxime vel? Modi veritatis eveniet error maiores quibusdam cumque distinctio, esse vel, possimus quasi laborum?'
         ]
      ];
   }

   public static function find($slug): array
   {
      // return Arr::first(static::all(), function ($post) use ($slug) {
      //    return $post['slug'] == $slug;
      // });

      $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

      if(! $post) {
         abort(404);
      }

      return $post;
   }
}
