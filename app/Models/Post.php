<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
     protected $casts = [
        'published_at' => 'immutable_datetime',
    ];

    /*== Relationship start here ==*/
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    /*== Relationship end here==*/


    /*== Custom method start here==*/
    public function isPublished(): bool
    {
        return $this->published_at == null;
    }
    /*== Custom method end here==*/


    /*==Local scop start here== */
    public function scopePopular(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id());
    }
    //route key slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*==Local scop end here== */
}
