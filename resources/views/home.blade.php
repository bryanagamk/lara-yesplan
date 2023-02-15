@extends('layouts.app')

@section('konten')
    <div class="px-2 mt-4">
        <h4>Selamat Datang, {{ Auth::user()->name }}</h4>
    </div>
@endsection