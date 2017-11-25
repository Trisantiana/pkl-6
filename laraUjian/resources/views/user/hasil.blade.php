@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Hasil Ujian</div>

                <div class="panel-body">
                    <table class=" table table-hover table-bordered">
                    	<thead>
                    	<tr>
                    		<th> No.Siswa</th>
                    		<th> Nama Siswa</th>
                    		<th> Jawaban Benar</th>
                    		<th> Nilai</th>
                    	</tr>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<td> {{ $users->id }} </td>
                    			<td> {{ $users->name }} </td>
                    			<td> </td>
                    			<td> </td>
                    		</tr>
                    	</tbody>
                    </table>
                        
                         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection