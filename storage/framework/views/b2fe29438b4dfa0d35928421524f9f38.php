<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body style="background: #ffffff;">
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
                    <a class="nav-link" href="<?php echo e(route('log')); ?>">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
   
    <div class="container-fluid">
        <div class="row">
            <div>
                <h3 class="text-center my-4">Produk Kami</h3>
            </div>
            <?php $__empty_1 = true; $__currentLoopData = $bunga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-3">
                <div class="card" style="width: 18rem; margin-top: 20px; background: #f8f9fa;">
                    <img src="<?php echo e(asset('storage/image/' . $produk->gambar)); ?>" width="100" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #343a40;"><?php echo e($produk->namabunga); ?></h5>
                        <p class="card-text" style="color: #343a40;"><?php echo e($produk->deskripsi); ?></p>
                        <p class="card-text">Harga: Rp<?php echo e($produk->harga); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Tidak ada produk.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\LENOVO\Documents\kuliah\Semester 3\Toko Bunga\tokobunga\resources\views/produk.blade.php ENDPATH**/ ?>