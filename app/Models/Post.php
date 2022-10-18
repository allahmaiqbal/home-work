<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'published_at',
    ];

   /*== Relationship start here ==*/
    public function author()
    {
       return $this->belongsTo(User::class,'user_id');
    } 
    /*== Relationship end here==*/

   /*== Custom method start here==*/
   public function is_published():bool
   {
    return $this->published_at == null;
   }
   /*== Custom method end here==*/

}
