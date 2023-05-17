@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Parasite</td>
                        <td>Andi Purnama</td>
                        <td>8.6</td>
                        <td>2023-05-10</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Avengers: Endgame</td>
                        <td>Ratna Sari</td>
                        <td>8.4</td>
                        <td>2023-05-11</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>The Godfather</td>
                        <td>Budi Santoso</td>
                        <td>9.2</td>
                        <td>2023-05-12</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>The Dark Knight</td>
                        <td>Siti Aisyah</td>
                        <td>9.0</td>
                        <td>2023-05-13</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Forrest Gump</td>
                        <td>Arief Rahman</td>
                        <td>8.8</td>
                        <td>2023-05-14</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Parasite</td>
                        <td>Indah Wati</td>
                        <td>8.7</td>
                        <td>2023-05-15</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Avengers: Endgame</td>
                        <td>Rudi Kurniawan</td>
                        <td>8.5</td>
                        <td>2023-05-16</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>The Godfather</td>
                        <td>Mira Putri</td>
                        <td>9.1</td>
                        <td>2023-05-17</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>The Dark Knight</td>
                        <td>Yoga Prasetyo</td>
                        <td>9.3</td>
                        <td>2023-05-18</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Forrest Gump</td>
                        <td>Maya Susanti</td>
                        <td>8.9</td>
                        <td>2023-05-19</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>   
                </tbody>
            </table>
        </div>
    </div>
@endsection