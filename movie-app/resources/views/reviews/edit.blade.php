@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Edit Review Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/reviews">Reviews</a></li>
            <li class="breadcrumb-item active">Edit Review</li>
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
            <form method="POST" action="/reviews/{{ $review->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="film" class="form-label">Film:</label>
                    <input type="text" class="form-control" id="film" name="film" value="{{ $review->film }}">
                </div>
                <div class="mb-3">
                    <label for="user" class="form-label">User:</label>
                    <input type="text" class="form-control" id="user" name="user" value="{{ $review->user }}">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating:</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ $review->rating }}">
                </div>
                <div class="mb-3">
                    <label for="review" class="form-label">Review:</label>
                    <input type="text" class="form-control" id="review" name="review" value="{{ $review->review }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $review->tanggal }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Review</button>
            </form>
        </div>
    </div>
@endsection
