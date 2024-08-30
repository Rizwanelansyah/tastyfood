<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperInbox
 */
class Inbox extends Model
{
    protected $fillable = [
        'subject',
        'name',
        'email',
        'message',
    ];
}
