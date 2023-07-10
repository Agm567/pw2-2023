@extends('dashboard.layouts.app')
@section('konten')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Movies</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/movies') }}">Movies</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Edit Data {{ $movies->name }}
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{ url('/dashboard/movies', $movies->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="title" class="col-4 col-form-label">Title</label>
                                        <div class="col-8">
                                            <input id="title" name="title" value="{{ $movies->title }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="poster" class="col-4 col-form-label">Poster</label>
                                        <div class="col-8">
                                            <input id="poster" name="poster" value="{{ $movies->poster }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="genres_id" class="col-4 col-form-label">Genres</label>
                                        <div class="col-8">
                                            <select id="genres_id" name="genres_id" class="form-control">
                                                <option value="">-- Select Genres --</option>
                                                @foreach ($genres as $genre)
                                                    <option value="{{ $genre->id }}"
                                                        {{ $genre->id == $movies->genres_id ? 'selected' : '' }}>
                                                        {{ $genre->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="countries_id" class="col-4 col-form-label">Countries</label>
                                        <div class="col-8">
                                            <select id="countries_id" name="countries_id" class="form-control">
                                                <option value="">-- Select Countries --</option>
                                                @foreach ($countries as $countrie)
                                                    <option value="{{ $countrie->id }}"
                                                        {{ $countrie->id == $movies->countries_id ? 'selected' : '' }}>
                                                        {{ $countrie->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="release_date" class="col-4 col-form-label">Release_date</label>
                                        <div class="col-8">
                                            <input id="release_date" name="release_date" value="{{ $movies->release_date }}"
                                                type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rating" class="col-4 col-form-label">Rating</label>
                                        <div class="col-8">
                                            <input id="rating" name="rating" value="{{ $movies->rating }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="synopsis" class="col-4 col-form-label">Synopsis</label>
                                        <div class="col-8">
                                            <textarea id="synopsis" name="synopsis" value="{{ $movies->synopsis }}" class="form-control">{{ $movies->synopsis }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{ url('/dashboard/movies') }}" class="btn btn-secondary">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
