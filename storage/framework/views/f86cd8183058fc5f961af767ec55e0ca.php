<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 500px; height: 700px; background:#ffffff">
            <h2 class="text-center my-4">Edit Product</h2>
            <form action=" <?php echo e(route('update', $bunga->id)); ?> " method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="text-center">
                    <img src="<?php echo e(asset('storage/image/' . $bunga->gambar)); ?>"
                        style="width: 300px; height: auto; margin-bottom: 10px;">
                </div>
                <div class="form-group mt-3">
                    <label for="namaproduk">Nama Produk</label>
                    <input type="text" class="form-control" value="<?php echo e(old('namaproduk', $bunga->namabunga)); ?>"
                        placeholder="Nama Produk" id="namaproduk" name="namabunga" required>
                </div>
                <div class="form-group mt-3">
                    <label for="hargaproduk">Harga</label>
                    <input type="number" class="form-control" value="<?php echo e(old('hargaproduk', $bunga->harga)); ?>"
                        placeholder="Harga Produk" id="hargaproduk" name="harga" required>
                </div>
                <div class="form-group mt-3">
                    <label for="deskproduk">Deskripsi</label>
                    <input type="text" class="form-control" value="<?php echo e(old('deskproduk', $bunga->deskripsi)); ?>"
                        placeholder="Deskripsi" id="deskproduk" name="deskripsi" required>
                </div>
                <div class="form-group mt-3">
                    <label for="gambar">Pilih Gambar:</label>
                    <input type="file" name="gambar" id="gambar" value="<?php echo e(old('gambar', $bunga->gambar)); ?>"
                        accept="image/*">
                </div>
                <div class="row text-center">
                    <div class="col-12 text-center mt-5 ">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button href="<?php echo e(route('bungas')); ?>" type="submit" class="btn btn-warning ms-2">Kembali</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\Users\LENOVO\Documents\kuliah\Semester 3\Toko Bunga\tokobunga\resources\views/admin/edit.blade.php ENDPATH**/ ?>