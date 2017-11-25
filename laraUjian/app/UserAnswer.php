<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $fillable = ['id', 'user_id', 'question_id', 'a', 'b', 'c', 'd'];

    protected $user_answer = ['a', 'b', 'c', 'd'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public $timestamp = false;
}
