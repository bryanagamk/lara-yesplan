@extends('layouts.app')

@section('konten')
    <div class="px-2 mt-4">
        <h4>Tambahkan Task Todo Baru</h4>
        <div class="row">
            <form action="{{ route('simpan-todo') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input id="nama" type="text" name="nama" class="form-control mt-2" placeholder="Nama" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Tambah</button>
            </form>
        </div>
    </div>
@endsection