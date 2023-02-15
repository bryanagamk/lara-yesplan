@extends('layouts.app')

@section('konten')
    <div class="px-2 mt-4">
        <h4>Selamat Datang, {{ Auth::user()->name }}</h4>
        <div class="row">
            <a href="{{ route('tambah-todo') }}">Tambah Task Todo</a>
            <ul>
                @if(count($list) > 0)
                    @foreach($list as $item)
                        <li>{{ $item->name }}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection