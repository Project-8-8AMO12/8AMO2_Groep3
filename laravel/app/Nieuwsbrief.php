<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nieuwsbrief extends Model
{
    protected $fillable = [
        'name', 'file_name'
    ];

    protected $table = "nieuwsbrief";
}
