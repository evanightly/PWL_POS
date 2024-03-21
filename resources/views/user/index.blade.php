@extends('layout.app')

@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Daftar User')

@section('content_body')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex gap-3 align-items-center">
                <h3 class="card-title">Daftar User</h3>
                <a href="{{ url('user/create') }}" class="btn btn-primary">Tambah User</a>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{ $dataTable->scripts() }}
@endpush
