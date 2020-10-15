<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominees extends Model
{
    use HasFactory;

     protected $table = 'nomuniees';

     protected $fillable = [
        'committee_id1',
        'committee_id2',
        'committee_id3',
        'committee_id4',
        'committee_id5',
        'committee_id6',
        'committee_id7',
        'committee_id8',
        'committee_id9',
        'committee_id10',
        'status'
    ];
}
