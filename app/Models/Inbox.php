<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $fillable = [
        'subject',
        'name',
        'email',
        'message',
    ];
}
