<div class="container" style="margin-top: 70px;">
    <h3 class="d-inline my-3"><?= $title; ?></h3>
    <div>
        <button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Produk
        </button>
    </div>

    <div class="row mt-2">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-sm-3 mb-2">
                <div class="card rounded-0">
                    <img class="card-img-top rounded-0" src="<?= base_url('assets/products/earphone/') . $brg['gambar_produk']; ?>" alt="Card image cap" height="200px">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark"><?= $brg['nama_produk']; ?></a></h5>
                        <p class="card-text">Rp <?= $brg['harga_produk'];  ?></p>
                        <a class="btn btn-warning">EDIT</a>
                        <a class="btn btn-danger float-right" onclick="return confirm('Apakah anda yakin?');">DELETE</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>