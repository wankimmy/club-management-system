<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

     protected $table = 'activities';

     protected $fillable = [
        'club_id',
        'user_id',
        'poster',
        'date',
        'time',
        'desc',
        'status',
    ];
}
