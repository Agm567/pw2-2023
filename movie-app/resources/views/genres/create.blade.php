@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-4">Genres Data</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Genres</li>
            </ol>
        </nav>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Genres Data
            </div>
            <div class="card-body">
                <form method="POST" action="/genres">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
