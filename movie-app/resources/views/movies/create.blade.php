@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-4">Movies Data</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Movies</li>
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
                Movies Data
            </div>
            <div class="card-body">
                <form method="POST" action="/movies">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Title:</label>
                        <input type="text" id="judul" name="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster:</label>
                        <input type="text" id="poster" name="poster" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre:</label>
                        <select id="genre" name="genre_id" class="form-select">
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="negara" class="form-label">Country:</label>
                        <input type="text" id="negara" name="negara" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Year:</label>
                        <input type="text" id="tahun" name="tahun" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating:</label>
                        <input type="text" id="rating" name="rating" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
