<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'profile';

    protected $fillable = [
        'user_id',
        'address',
        'job',
        'salary',
        'nomad_flag',
        'smoke_flag',
        'alcohol_flag',
        'introduce',
        'image_path'
    ];


    // Relations
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }
}
