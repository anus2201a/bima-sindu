<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    use HasFactory;

    protected $table = 'hospital';

    protected $fillable = [
        'name',
        'phone_no',
        'address',
        'city',
        'state',
        'zipcode',
        'type',
        'timing',
        'description',
        'image',
    ];
}
