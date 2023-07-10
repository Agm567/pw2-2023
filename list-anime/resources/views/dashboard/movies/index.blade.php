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
                            <li class="breadcrumb-item active">Movies</li>
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
                                <h3 class="card-title">Data Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ url('/dashboard/movies/create') }}" class="btn btn-primary w-100">Add Data</a>
                                <table id="example2" class="datatable1 table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Countries</th>
                                            <th>Genre</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($movies as $movie)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $movie->title }}</td>
                                                <td>{{ $movie->countries->name }}</td>
                                                <td>{{ $movie->genres->name }}</td>
                                                <td>{{ $movie->rating }}</td>
                                                <td>
                                                    <a href="{{url('/movies', $movie->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ url('dashboard/movies/'. $movie->id. '/edit') }}"
                                                        class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
                                                    <form action="{{ url('dashboard/movies', $movie->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="if(!confirm('Yakin hapus data ini?')) {return false}"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Countries</th>
                                            <th>Genre</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
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
