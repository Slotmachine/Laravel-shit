<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'id_number',
        'team',
        'firstname',
        'lasname',
        'shoulder_width',
        'shirts_long',
        'chest_size',
        'size',
        'comment',
        'join_activity',
        'join_activityed',
        'phone',
        'email',
    ];
    protected $table = 'shirts';
}
