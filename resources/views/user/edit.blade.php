@extends('adminlte::page')

@section('title', 'Form Ubah Data User')

@section('content_header')
    <h1>Form Ubah Data User</h1>
@stop

@section('content')
    <a href="/user" class="btn btn-primary">Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="/user/{{ $data->user_id }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" value="{{ $data->username }}">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $data->nama }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" value="{{ $data->password }}">
                </div>

                <div class="form-group">
                    <label for="level_id">Level ID</label>
                    <input type="text" name="level_id" id="level_id" class="form-control" placeholder="Masukkan ID Level Pengguna" value="{{ $data->level_id }}">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Ubah">
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
@stop
