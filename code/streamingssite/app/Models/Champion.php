<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    use HasFactory;

    protected $fillable = [
        'champion_name',
        'tier',
        'win_rate',
        'pick_rate',
        'ban_rate',
        'games_played',
    ];
}
