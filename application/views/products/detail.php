<div class="container" style="margin-top: 100px;">
    <div class="card mb-3 mt-4 mx-auto" style="max-width: 900px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/products/') . $detail['tipe_produk'] . "/" . $detail['gambar_produk']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $detail['nama_produk']; ?></h5>
                    <p class="card-text">Merk : <?= $detail['merk_produk']; ?></p>
                    <p class="card-text">Tipe : <?= $detail['tipe_produk']; ?></p>
                    <p class="card-text h3 ">Rp <?= $detail['harga_produk']; ?>,-</p>

                    <a href="<?= base_url('Transaction/pesanan'); ?>" class="btn btn-warning mb-2 rounded-0 w-100">Buy</a>
                    <a href="#" class="btn btn-outline-warning rounded-0 w-100">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>