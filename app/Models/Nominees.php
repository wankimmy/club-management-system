<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominees extends Model
{
    use HasFactory;

     protected $table = 'nomuniees';

    protected $guarded = [];
}
