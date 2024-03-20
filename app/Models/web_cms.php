<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class web_cms extends Model
{
    use HasFactory;

    protected $table = 'web_cms';

    protected $fillable = [
        'name',
        'slug',
        'value',
        'tag',
    ];
}
