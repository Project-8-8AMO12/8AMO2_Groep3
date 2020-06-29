<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NieuwsbriefUsers extends Model
{
    protected $fillable = [
        'username', 'email'
    ];

    protected $table = "nieuwsbrief_users";
}
