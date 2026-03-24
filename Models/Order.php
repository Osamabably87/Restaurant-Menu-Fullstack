<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['user_id', 'name', 'email', 'phone', 'Address', 'meal'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

   
}
