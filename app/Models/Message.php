<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'message', 'user_id', 'user_name', 'user_email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}