@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Edit Movie Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/movies">Movies</a></li>
            <li class="breadcrumb-item active">Edit Movie</li>
        </ol>
    </div>

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
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies/{{ $movie->id }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="judul" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $movie->judul }}">
                </div>
                <div class="mb-3">
                    <label for="poster" class="form-label">Poster:</label>
                    <img style="width: 150px" src="/assets/img/{{$movie->poster}}" alt="">
                    <input type="file" class="form-control" id="poster" name="poster" value="{{ $movie->poster }}">
                </div>
                <div class="mb-3">
                    <label for="genre_id" class="form-label">Genre:</label>
                    <select class="form-select" id="genre_id" name="genre_id">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>{{ $genre->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="negara" class="form-label">Country:</label>
                    <input type="text" class="form-control" id="negara" name="negara" value="{{ $movie->negara }}">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Year:</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $movie->tahun }}">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating:</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ $movie->rating }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Movie</button>
            </form>
        </div>
    </div>
@endsection
