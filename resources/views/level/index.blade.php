@extends('layout.app')

@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Daftar Level')

@section('content_body')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex gap-3 align-items-center">
                <h3 class="card-title">Daftar Level</h3>
                <a href="{{ route('level.create') }}" class="btn btn-primary">Tambah Level</a>
            </div>
            <div class="card-body">{{ $dataTable->table() }}</div>
        </div>
    </div>
@endsection

@push('js')
    {{ $dataTable->scripts() }}
@endpush
