<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;
use App\UserRole;
use App\Result;
use App\Score;
use App\UserAnswer;
use DB;

class QuestionController extends Controller
{


    public function index()
    {
        $questions = Question::inRandomOrder()->get();

        return view('soal.index', compact('questions'));
    }


    public function create()
    {
        $questions = Question::all();

        return view('soal.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'answer_key' => 'required',
        ]);

        Question::create([

            'question' => request('question'),
            'option_a' =>request('option_a'),
            'option_b' => request('option_b'),
            'option_c' => request('option_c'),
            'option_d' => request('option_d'),
            'answer_key' => request('answer_key'),
        ]);

        return redirect()->route('soal.index');
    }

    public function edit(Question $question)
    {
        return view('soal.edit', compact('question'));
    }

    public function update(Question $question)
    {
        $question->update([
            'question' => request('question'),
            'option_a' =>request('option_a'),
            'option_b' => request('option_b'),
            'option_c' => request('option_c'),
            'option_d' => request('option_d'),
            'answer_key' => request('answer_key')
        ]);

        return redirect()->route('soal.index');
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('soal.index')->withDanger('Data Terhapus!');
    }

    public function nilai(User $id, Result $true_answer, UserRole $role_id)
    {
        $users = User::find($id);
        $users = DB::table('users')->select('id', 'name')->get();
        //$users = User::find(auth()->id());

        $result = Result::find($true_answer);
        $result = DB::table('results')->select('true_answer')->get();

        return view ('user.hasil', compact('users', 'result', 'role_user'));
    }


}

