<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    
    protected $table = 'clubs';

     protected $fillable = [
        'club_name',
        'club_prefix',
        'club_picture',
        'club_desc',
    ];
}
