<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

      // Fillables 
    protected $fillable=[
        'sender_id',
        'receiver_id',
        'last_time_message'
    ];

      // Relation Ships

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
      // This means that a conversations could be many messages.

    public function user()
    {
        return $this->belongsTo(User::class);
    }
      // This means that every conversations belongs to a user

}
