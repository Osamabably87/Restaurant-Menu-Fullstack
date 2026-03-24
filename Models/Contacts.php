<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    // Connect to the 'contacts' table explicitly
    protected $table = 'contacts';

    // These fields are mass-assignable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'user_id'
    ];

}
