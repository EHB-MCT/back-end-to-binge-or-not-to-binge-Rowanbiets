<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'description', 'video_url'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
