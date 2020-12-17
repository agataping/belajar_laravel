@extends('layouts.app')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
    <div class="body m-10">
        <div class="form-group">
            {!! Form::label('judul','Judul');!!}
            {!! Form::label('judul', '', ['class' => 'form-control','placeholder'=>'judul berita']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('isi','Isi');!!}
            {!! Form::label('isi', '', ['class' => 'form-control','placeholder'=>'Isi berita']);!!}
        </div>
        <div class="form-group">
            {!! Form::label('created_at','Waktu buat');!!}
            {!! Form::label('created_at', '', ['class' => 'form-control','placeholder'=>'Tanggal pembuatan']);!!}
        </div>
        <div class="form-group">
            {!! Form::label('updated_at','Waktu ubah');!!}
            {!! Form::label('updated_at', '', ['class' => 'form-control','placeholder'=>'Tanggal pembuatan']);!!}
        </div>

    <a href="{!! route ('berita.index') !!}" class="btn btn-warning">Kembali</a>
    </div>
        </div>
    </div>
</div>
   
@endsection
