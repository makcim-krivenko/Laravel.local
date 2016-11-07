<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public $timestamps = true;

    protected $guarded = [
        'title', 'slug', 'content', 'user_id', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
