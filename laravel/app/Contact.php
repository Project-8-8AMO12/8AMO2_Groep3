<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'question_to', 'user_email', 'content'
    ];

    protected $table = "contact";
}
