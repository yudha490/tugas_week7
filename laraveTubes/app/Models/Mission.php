<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'points', 'image_url'];

    public function userMissions()
    {
        return $this->hasMany(UserMission::class);
    }
}