@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>
 
                <div class="panel-body">
                    <div class="alert alert-success">
                        <p>
                            Selamat Datang di halaman Member 
                        </p>
                    </div>
                    <a href=" {{ route('user.index') }} " class="btn btn-primary"> Mulai Mengerjakan Soal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection