<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    protected $fillable = [
        'content', 'from_id', 'to_id', 'read_id', 'created_at'
    ];

    public $timestamps = false;

    protected $dates = ['created_at', 'read_at'];

    public function from()
    {
        return $this->belongsTo(User::class, 'from_id');
    }
}
