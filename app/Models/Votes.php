<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $fillable = ['user_id', 'post_id', 'comment_id', 'type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Posts::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comments::class);
    }
}
