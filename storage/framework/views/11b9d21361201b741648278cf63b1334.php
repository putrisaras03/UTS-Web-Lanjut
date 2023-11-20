<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: white">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #45496A">
        <a class="navbar-brand ms-3" href="<?php echo e(route('homes')); ?>">Queen Florist</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('homes')); ?>">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('prod')); ?>">Produk</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo e(route('bungas')); ?>">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Product</h3>
                    
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body" style="background: lightblue">
                        <a href="<?php echo e(route('tambah.bunga')); ?>" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Bunga</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__empty_1 = true; $__currentLoopData = $bunga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bunga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($bunga->namabunga); ?></td>
                                        <td><?php echo e($bunga->harga); ?></td>
                                        <td><?php echo e($bunga->deskripsi); ?></td>
                                        <td><img src="<?php echo e(asset('storage/image/' . $bunga->gambar)); ?>" width="100"></td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="<?php echo e(route('hapus', $bunga->id)); ?>" method="POST">
                                                <a href="<?php echo e(route('edit', $bunga->id)); ?>"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-danger">
                                                Data Post belum Tersedia.
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // // message with toastr
        // <?php if(session()->has('success')): ?>
        //     toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!');
        // <?php elseif(session()->has('error')): ?>
        //     toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!');
        // <?php endif; ?>
    </script>
</body>

</html>
<?php /**PATH C:\Users\LENOVO\Documents\kuliah\Semester 3\Toko Bunga\tokobunga\resources\views/admin/dashmin.blade.php ENDPATH**/ ?>