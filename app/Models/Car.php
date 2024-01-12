<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//TODO: php artisan make:model car
class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'make',
        'model',
        'year',
        'color'
    ];
}
