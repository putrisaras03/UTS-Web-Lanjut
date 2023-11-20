<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 500px; height: 500px;" >
            <h2 class="text-center my-4">Add Product</h2>
            <form action=" <?php echo e(route('tambah')); ?> " method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group mt-3">
                    <label for="namaproduk">Nama Produk</label>
                    <input type="text" class="form-control" value="<?php echo e(old('namaproduk')); ?>" placeholder="Nama Produk" id="namaproduk" name="namabunga" required>
                </div>
                <div class="form-group mt-3">
                    <label for="hargaproduk">Harga</label>
                    <input type="number" class="form-control" value="<?php echo e(old('hargaproduk')); ?>" placeholder="Harga Produk" id="hargaproduk" name="harga" required>
                </div>
                <div class="form-group mt-3">
                    <label for="deskproduk">Deskripsi</label>
                    <input type="text" class="form-control" value="<?php echo e(old('deskproduk')); ?>" placeholder="Deskripsi" id="deskproduk" name="deskripsi" required>
                </div>
                <div class="form-group mt-3">
                    <label for="gambar">Pilih Gambar:</label>
                    <input type="file" name="gambar" id="gambar" accept="image/*">
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary">Tambah Product</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html><?php /**PATH C:\Users\LENOVO\Documents\kuliah\Semester 3\Toko Bunga\tokobunga\resources\views/admin/store.blade.php ENDPATH**/ ?>