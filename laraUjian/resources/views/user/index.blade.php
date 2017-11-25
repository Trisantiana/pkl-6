@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="table-responsive">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3> Kerjakan Soal dibawah ini dengan memilih jawaban A,B,C, atau D pada jawaban yang benar!</h3>
                    </div> <br>
                <form action="" method="post">
                {{ csrf_field() }}

            <div class="panel-body">
                    @foreach($questions as $key => $question)

                        <p> {{ ($key+1) }}. {{($question->question) }} </p>


                            <input type="radio" name="answer {{ $question->id }} " id="option_a" value="A"> A. {{ $question->option_a }} <br>
                            <input type="radio" name="answer {{ $question->id }} " id="option_b" value="B"> B. {{ $question->option_b }}<br>
                            <input type="radio" name="answer {{ $question->id }} " id="option_c" value="C"> C. {{ $question->option_c }} <br>
                            <input type="radio" name="answer {{ $question->id }} " id="option_d" value="D"> D. {{ $question->option_d }}
                            <br><br>


                @endforeach

                    <input type="submit" value="Selesai" class="btn btn-info" style="float: right; margin-right: 50px; width:80px; height: 40px; font-size: 15px; ">
                    <a href=" {{ route('user.index') }} " class="btn btn-info" style="float: right; margin-right: 50px; width:80px; height: 40px; font-size: 15px; "> Ulangi</a>
                </form>
                <br>

        </div>
        </div>
        </div>
        </div>
        </div>


@endsection

