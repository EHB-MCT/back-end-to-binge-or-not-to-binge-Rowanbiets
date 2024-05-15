<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'description', 'video_url','role'];


    public function championTierList()
    {
        return $this->hasOne(ChampionTierList::class);
    }

    public function favoritedByUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_video_favorites')->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }



}
