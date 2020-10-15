<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $table = 'proposals';

     protected $fillable = [
        'club_id',
        'user_id',
        'propose',
        'status',
    ];
}
