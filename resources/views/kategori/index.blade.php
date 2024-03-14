@extends('layout.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Daftar Kategori')

@section('content_body')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex gap-3 align-items-center">
                <h3 class="card-title">Daftar Kategori</h3>
                <a href="{{ url('kategori/create') }}" class="btn btn-primary">Tambah Kategori</a>
            </div>
            <div class="card-body">{{ $dataTable->table() }}</div>
        </div>
    </div>
@endsection

@push('js')
    {{ $dataTable->scripts() }}
@endpush
