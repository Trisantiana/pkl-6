<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\UserAnswer;
use App\User;
use App\Result;
use App\Score;
use DB;

class UserAnswerController extends Controller
{
    public function user()
    {
        $questions = Question::all();

        return view('user.index', compact('questions'));
    }

    /*
    public function userAnswer(Request $request, Question $answer_key)
    {

            $questions = DB::table('questions')->select('answer_key')->get();
            $user_answer = ['a', 'b', 'c', 'd'];
            $score = 0;

            switch($user_answer) {
                case 'a':
                    if(a == $answer_key){
                        return $score += 5;
                    }
                    else {
                        return 'false';
                    }
                break;

                case 'b':
                    if(b == $answer_key){
                        return $score += 5;
                    }
                    else {
                        return 'false';
                    }
                break;

                case 'c':
                    if(c == $answer_key){
                        return $score += 5;
                    }
                    else {
                        return 'false';
                    }
                break;

                case 'd':
                    if(d == $answer_key){
                        return $score += 5;
                    }
                    else {
                        return 'false';
                    }
                break;
            default:
                return $score;
                break;
        }
        return redirect()->route('user.hasil');
    }
    */


    public function submit()
    {
        $question = Question::all();
        $answer = [
            request('answer1'),
            request('answer2'),
            request('answer3'),
            request('answer4'),
            request('answer5'),
            request('answer6'),
            request('answer7'),
            request('answer8'),
            request('answer9'),
            request('answer10'),
            request('answer11'),
            request('answer12'),
            request('answer13'),
            request('answer14'),
            request('answer15'),
            request('answer16'),
            request('answer17'),
            request('answer18'),
            request('answer19'),
            request('answer20'),
        ];

        $score = 0;

        foreach ($question as $id => $question) {
            switch($answer[$id]) {
                case 'a':
                    if($question->answer_key == 'a'){
                        $score += 5;
                    }

                break;

                case 'b':
                    if($question->answer_key == 'b'){
                        $score += 5;
                    }

                break;

                case 'c':
                    if($question->answer_key == 'c'){
                        $score += 5;
                    }

                break;

                case 'd':
                    if($question->answer_key == 'd'){
                        $score += 5;
                    }

                break;



        }
        }

        if (Score::where('user_id', auth()->id())->exists()) {
            Score::where('user_id', auth()->id())->update([
                'score' => $score,
            ]);
        } else {
            Score::create([
                'user_id' => auth()->id(),
                'score' => $score
            ]);
        }

        return redirect()->route('result.score');
    }


}
