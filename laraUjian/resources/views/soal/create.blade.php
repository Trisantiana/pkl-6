@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="" method="POST" action=" {{ route('soal.store') }} ">
            {{ csrf_field() }}
            <div class="form-group has-feedback{{ $errors->has('id') ? 'has-error' : ''  }}  ">
                <label for=""> Nomor </label>
                <input type="text" class="form-control" name="id" placeholder=" Soal ke-">
                    @if ($errors->has('id'))
                        <span class="help-block">
                            <p> {{ $errors->first('id') }} </p>
                        </span>
                    @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('question') ? 'has-error' : ''  }}  ">
                <label for=""> Soal</label>
                <textarea name="question" rows="5" class="form-control" placeholder="Tulis Soal">  </textarea>
                    @if ($errors->has('question'))
                        <span class="help-block">
                            <p> {{ $errors->first('question') }} </p>
                        </span>
                    @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('option_a') ? 'has-error' : ''  }}  ">
                <label for=""> Jawaban A </label>
                <input type="text" class="form-control" name="option_a" placeholder=" Jawaban A">
                    @if ($errors->has('option_a'))
                        <span class="help-block">
                            <p> {{ $errors->first('option_a') }} </p>
                        </span>
                    @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('option_b') ? 'has-error' : ''  }}  ">
                <label for=""> Jawaban B </label>
                <input type="text" class="form-control" name="option_b" placeholder=" Jawaban B">
                    @if ($errors->has('option_b'))
                        <span class="help-block">
                            <p> {{ $errors->first('option_b') }} </p>
                        </span>
                    @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('option_c') ? 'has-error' : ''  }}  ">
                <label for=""> Jawaban C </label>
                <input type="text" class="form-control" name="option_c" placeholder=" Jawaban C">
                    @if ($errors->has('option_c'))
                        <span class="help-block">
                            <p> {{ $errors->first('option_c') }} </p>
                        </span>
                    @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('option_d') ? 'has-error' : ''  }}  ">
                <label for=""> Jawaban D </label>
                <input type="text" class="form-control" name="option_d" placeholder=" Jawaban D">
                    @if ($errors->has('option_d'))
                        <span class="help-block">
                            <p> {{ $errors->first('option_d') }} </p>
                        </span>
                    @endif
            </div>


            <div class="form-group has-feedback{{ $errors->has('answer_key') ? 'has-error' : ''  }}  ">
                <label for="">  Kunci Jawaban </label>
                <input type="text" class="form-control" name="answer_key" placeholder=" Kunci Jawaban">
                    @if ($errors->has('answer_key'))
                        <span class="help-block">
                            <p> {{ $errors->first('answer_key') }} </p>
                        </span>
                    @endif
            </div>

            <div class="form-group" >
                <input type="submit" value="Tambahkan" class="btn btn-primary">
                <input type="reset" name="reset" class="btn btn-primary" value="Batalkan">
            </div>
        </form>
    </div>

@endsection