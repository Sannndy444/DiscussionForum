<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Relasi many-to-many dengan model Post.
     */
    public function posts()
    {
        return $this->belongsToMany(Posts::class, 'post_tag', 'tag_id', 'post_id')
        ->withTimestamps(); // Menyertakan kolom waktu jika ada
    }
}
