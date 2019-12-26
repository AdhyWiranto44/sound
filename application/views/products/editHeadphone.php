<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mb-3">
        <div class="col-sm-6">
            <form action="<?= base_url('products/editheadphone/') . $headphone['id_headset']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="<?= $headphone['nama_produk']; ?>">
                </div>
                <div class="form-group">
                    <label>Merk Produk</label>
                    <input type="text" name="merk_produk" class="form-control" value="<?= $headphone['merk_produk']; ?>">
                </div>
                <div class="form-group">
                    <label>Harga Produk</label>
                    <input type="text" name="harga_produk" class="form-control" value="<?= $headphone['harga_produk']; ?>">
                </div>
                <div class="form-group">
                    <label>Gambar Produk</label></br>
                    <img src="<?= base_url('assets/products/headphone/') . $headphone['gambar_produk']; ?>" class="img-thumbnail mb-3" style="max-width: 250px;">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label for="image" class="custom-file-label">Choose image</label>
                    </div>
                </div>
                <a href="<?= base_url('products/dataHeadphones'); ?>" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->