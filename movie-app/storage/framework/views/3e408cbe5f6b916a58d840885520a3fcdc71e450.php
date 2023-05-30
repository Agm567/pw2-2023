<?php $__env->startSection('content'); ?>
<h1 class="mt-4">Movies Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Movies</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Movies Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Poster</th>
                    <th>Genre</th>
                    <th>Negara</th>
                    <th>Tahun</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Poster</th>
                    <th>Genre</th>
                    <th>Negara</th>
                    <th>Tahun</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($movie['no']); ?></td>
                    <td><?php echo e($movie['judul']); ?></td>
                    <td><?php echo e($movie['poster']); ?></td>
                    <td><?php echo e($movie['genre']); ?></td>
                    <td><?php echo e($movie['negara']); ?></td>
                    <td><?php echo e($movie['tahun']); ?></td>
                    <td><?php echo e($movie['rating']); ?></td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pw2-si05/movie-app/resources/views/movies/index.blade.php ENDPATH**/ ?>