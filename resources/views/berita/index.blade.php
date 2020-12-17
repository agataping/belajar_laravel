@extends('layouts.app')

@section('content')
<div class="content">
    <div class="card">
        <divc lass="card-header">
        <a href="{!! route ('berita.create') !!}" class="btn btn-info">Buat data</a>
        <div class="card-body">
        @include('berita.table')
       
        </div>
    </div>
</div>
@endsection