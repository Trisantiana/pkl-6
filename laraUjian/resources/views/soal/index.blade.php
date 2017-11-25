@extends('layouts.app')

@section('content')
    <center>
        <h1> Soal Soal Ujian </h1>
    </center>

    <a href=" {{ route('soal.create') }} " class="btn btn-success" style="margin-bottom: 10px;  margin-left: 50px;"> Tambahkan Soal Baru</a>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width="5">No</th>
                            <th>Soal</th>
                            <th>Jawaban A</th>
                            <th>Jawaban B</th>
                            <th>Jawaban C</th>
                            <th>Jawaban D</th>
                            <th>Kunci Jawaban</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $key => $question)
                            <tr>
                                <td> {{ ($key+1) }} </td>
                                <td> {{ ($question->question) }} </td>
                                <td> {{ ($question->option_a) }} </td>
                                <td> {{ ($question->option_b) }} </td>
                                <td> {{ ($question->option_c) }} </td>
                                <td> {{ ($question->option_d) }} </td>
                                <td> {{ ($question->answer_key) }} </td>
                                
                                <td> 
                                    <center>
                                        <a href=" {{ route('soal.edit', $question)}}  " class="btn btn-xs btn-info"> Edit</a>
                                        <form class="" action=" {{ route('soal.destroy', $question) }} " method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-xs btn-danger"> Hapus </button>
                                        </form>
                                    </center>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
                {!! $questions->render() !!}

                <a href=" {{ route('soal.nilai') }}  " class="btn btn-primary" style="float: right; margin-right: 40px; margin-top: 25px;"> Lihat Nilai Hasil Ujian</a>
            </div>
        </div>
    </div>
</div>

@endsection