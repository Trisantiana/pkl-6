<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});
// Route untuk user yang baru register
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
    Route::get('/', function(){
        $data['role'] = \App\UserRole::whereUserId(Auth::id())->get();
        return view('home', $data);
    });
    Route::post('upgrade', function(Request $request){
        if($request->ajax()){
            $msg['success'] = 'false';
            $user = \App\User::find($request->id);
            if($user)
                $user->putRole($request->level);
                $msg['success'] = 'true';

            return response()
                ->json($msg);
        }
    });
});
// Route untuk user yang admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
    Route::get('/', function(){
        $data['users'] = \App\User::whereDoesntHave('roles')->get();
        return view('admin', $data);
    });
});
// Route untuk user yang member
Route::group(['prefix' => 'member', 'middleware' => ['auth','role:member']], function(){
    Route::get('/', function(){
        return view('member');
    });
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// route untuk admin
Route::get('/soal', 'QuestionController@index')->name('soal.index');
Route::get('/soal/create', 'QuestionController@create')->name('soal.create');
Route::post('/soal/create', 'QuestionController@store')->name('soal.store');
Route::get('/soal/{question}/edit', 'QuestionController@edit')->name('soal.edit');
Route::patch('/soal/{question}/edit', 'QuestionController@update')->name('soal.update');
Route::delete('/soal/{question}/delete', 'QuestionController@destroy')->name('soal.destroy');
Route::get('/soal/nilai', 'QuestionController@nilai')->name('soal.nilai');
//Route::post('/user', 'QuestionController@submit')->name('user.submit');

// route untuk user
Route::get('/user', 'UserAnswerController@user')->name('user.index');
Route::get('/user/hasil', 'UserAnswerController@userAnswer')->name('user.hasil');
//Route::get('/user/jawab', 'UserAnswerController@answer')->name('user.jawab');
Route::get('/user/check', 'UserAnswerController@answerCheck')->name('user.check');
Route::post('/user', 'UserAnswerController@submit')->name('user.submit');

//result
Route::get('/result/result', 'ResultController@result')->name('result.score');

