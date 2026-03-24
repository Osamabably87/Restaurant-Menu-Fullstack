<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    use HasFactory;

    // Connects to the 'menus' table
    protected $table = 'menus';

    // These fields are mass-assignable
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
        'available',
        'stock'
    ];






}


