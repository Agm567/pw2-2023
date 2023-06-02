@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-4">Reviews Data</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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
                Review Data
            </div>
            <div class="card-body">
                <form method="POST" action="/reviews">
                    @csrf
                    <div class="mb-3">
                        <label for="film" class="form-label">Film:</label>
                        <input type="text" id="film" name="film" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">User:</label>
                        <input type="text" id="user" name="user" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating:</label>
                        <input type="text" id="rating" name="rating" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal:</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
