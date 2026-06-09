<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = '_bill';
    protected $fillable  =[
        'name',
        'phone',
        'email',
        'city',
        'zipcode',
        'date',
        'source',
        'Srequest',
        'lastName',
        'phoneWork',
        'address',
        'state',
        'time',
    ];
}
