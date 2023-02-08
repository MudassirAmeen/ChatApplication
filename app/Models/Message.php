<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable=[
        'sender_id',
        'receiver_id',
        'conversations_id',
        'read',
        'type',
        'body'
    ];

      // Relation Ship

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
      // This means that each message belongs to a conversation

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
      // This means that sender id must be in users table

}
