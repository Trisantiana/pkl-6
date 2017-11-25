@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="" action="" method="post">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3><center>Nilai : {{ $scores->score }}</center></h3>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
