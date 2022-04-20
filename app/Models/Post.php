<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relación uno a muchos inversa
       //relación uno a muchos

       public function user()
       {
           return $this-> belongsTo(User::class);
       }

       public function category()
       {
           return $this-> belongsTo(Category::class);
       }


       //relación muchos a muchos con TAGS

       public function tags()
       {
           return $this-> belongsToMany(Tag::class);
       }

       //relacion uno a uno polimorfica

          public function image()
          {
              return $this->morphOne(Image::class, 'imageable');
          }
      
   
}
