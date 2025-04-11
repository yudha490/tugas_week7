<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'email', 'points'];

    public function userMissions()
    {
        return $this->hasMany(UserMission::class);
    }
}
