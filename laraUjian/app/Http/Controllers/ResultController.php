<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Result;
use App\Score;

class ResultController extends Controller
{
    public function result()
    {
        $scores = Score::select('score')->where('user_id', auth()->id())->first();

        return view('result.score', compact('scores'));
    }
}
