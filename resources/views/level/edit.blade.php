@extends('adminlte::page')
@section('title', 'Edit Level')
@section('content_header')
    <h1>Edit Level</h1>
@stop
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Level
                    </div>
                    <div class="card-body">
                        <form action="{{ route('level.update', [$level->level_id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="level_kode">Level Kode</label>
                                <input type="text" name="level_kode" id="level_kode" class="form-control" value="{{ $level->level_kode }}" required>
                            </div>

                            <div class="form-group">
                                <label for="level_nama">Level Nama</label>
                                <input type="text" name="level_nama" id="level_nama" class="form-control" value="{{ $level->level_nama }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
