<div class="container" style="margin-top: 70px;">
    <center>
        <h1 class="d-inline my-3"><?= $title; ?></h1>
    </center>
    <div>
        <a href="#" class="btn btn-primary">Tambah Produk</a>
    </div>

    <div class="row mt-2">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-sm-3 mb-2">
                <div class="card rounded-0">
                    <img class="card-img-top rounded-0" src="<?= base_url('assets/products/headphone/') . $brg['gambar_produk']; ?>" alt="Card image cap" height="200px">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark"><?= $brg['nama_produk']; ?></a></h5>
                        <p class="card-text">Rp <?= $brg['harga_produk'];  ?></p>
                        <a href="#" class="btn btn-warning mb-2 rounded-0 w-100">Edit</a>
                        <a href="#" class="btn btn-danger rounded-0 w-100">Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>