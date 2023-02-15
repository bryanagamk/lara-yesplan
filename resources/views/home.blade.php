@extends('layouts.app')

@section('konten')
    <div class="px-2 mt-4">
        @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
        @endif
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <h4>Selamat Datang, {{ Auth::user()->name }}</h4>
        <div class="row mt-3">
            <a href="{{ route('tambah-todo') }}">Tambah Task Todo</a>
            <ol class="p-3">
                @if(count($list) > 0)
                    @foreach($list as $item)
                        <li class="mb-3">
                            <h4>{{ $item->name }}</h4>
                            <div>
                                <a href="{{ route('edit-todo', [$item->id]) }}">Edit</a>
                                <a href="{{ route('delete-todo', [$item->id]) }}">Hapus</a>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ol>
        </div>
    </div>
@endsection