<?php $__env->startSection('content'); ?>
    <h1 class="mt-4">Users Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Users Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Agung Gunara Ma'mun</td>
                        <td>agung</td>
                        <td>NICE2022#!</td>
                        <td>agunggnr1@gmail.com</td>
                        <td>Administrator</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Andi Purnama</td>
                        <td>andi</td>
                        <td>Secret123</td>
                        <td>andipurnama@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ratna Sari</td>
                        <td>ratna</td>
                        <td>Password123</td>
                        <td>ratanasari@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Budi Santoso</td>
                        <td>budi</td>
                        <td>SecurePass</td>
                        <td>budisantoso@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Siti Aisyah</td>
                        <td>siti</td>
                        <td>Aisyah123</td>
                        <td>sitiaisyah@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Arief Rahman</td>
                        <td>arief</td>
                        <td>Rahman123</td>
                        <td>ariefrahman@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Indah Wati</td>
                        <td>indah</td>
                        <td>Wati123</td>
                        <td>indahwati@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Rudi Kurniawan</td>
                        <td>rudi</td>
                        <td>Kurniawan123</td>
                        <td>rudikurniawan@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Mira Putri</td>
                        <td>mira</td>
                        <td>Putri123</td>
                        <td>miraputri@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Yoga Prasetyo</td>
                        <td>yoga</td>
                        <td>Prasetyo123</td>
                        <td>yogaprasetyo@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Maya Susanti</td>
                        <td>maya</td>
                        <td>Susanti123</td>
                        <td>mayasusanti@gmail.com</td>
                        <td>user</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pw2-si05\movie-app\resources\views/users/index.blade.php ENDPATH**/ ?>