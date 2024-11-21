<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{

   //kalau nama table beda
   // protected $table = 'posts';

   protected $fillable = ['title', 'author', 'slug', 'body'];
}
