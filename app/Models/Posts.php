<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'image',
        'upvotes',
        'downvotes',
    ];

    /**
     * Relasi many-to-many dengan model Tag.
     */
    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'post_tag', 'post_id', 'tag_id')
        ->withTimestamps(); // Menyertakan kolom waktu jika ada
    }

    public function bookmarkedBy()
    {
        return $this->belongsToMany(User::class, 'bookmarks', 'post_id', 'user_id')
        ->withTimestamps();
    }
}
