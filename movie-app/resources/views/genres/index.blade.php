@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Genres Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Genre</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Genre</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Action</td>
                        <td>Film dengan aksi dan pertarungan yang seru</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Comedy</td>
                        <td>Film dengan humor dan situasi lucu</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Drama</td>
                        <td>Film dengan kisah emosional dan konflik pribadi</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Romance</td>
                        <td>Film dengan kisah cinta dan hubungan romantis</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Thriller</td>
                        <td>Film dengan ketegangan dan suspense yang tinggi</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Horror</td>
                        <td>Film dengan elemen horor dan ketakutan</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Sci-Fi</td>
                        <td>Film dengan elemen fiksi ilmiah dan teknologi canggih</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Adventure</td>
                        <td>Film dengan petualangan dan eksplorasi</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Fantasy</td>
                        <td>Film dengan unsur dunia fantasi dan makhluk ajaib</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Crime</td>
                        <td>Film dengan cerita kejahatan dan penyelidikan</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Mystery</td>
                        <td>Film dengan teka-teki dan misteri yang harus dipecahkan</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Animation</td>
                        <td>Film dengan animasi dan karakter fiktif</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Family</td>
                        <td>Film yang cocok untuk ditonton bersama keluarga</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Historical</td>
                        <td>Film dengan latar belakang sejarah dan peristiwa bersejarah</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>War</td>
                        <td>Film dengan tema perang dan konflik militer</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Romantic Comedy</td>
                        <td>Film dengan kombinasi kisah romantis dan komedi</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Sci-Fi Thriller</td>
                        <td>Film dengan gabungan elemen fiksi ilmiah dan ketegangan</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Adventure Fantasy</td>
                        <td>Film dengan perpaduan petualangan dan dunia fantasi</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Drama Crime</td>
                        <td>Film dengan kombinasi cerita dramatis dan kejahatan</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Action Comedy</td>
                        <td>Film dengan aksi dan unsur komedi</td>
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