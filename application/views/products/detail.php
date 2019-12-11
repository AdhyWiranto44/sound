<div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/products/') . $detail['tipe_produk'] . "/" . $detail['gambar_produk']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $detail['nama_produk']; ?></h5>
                    <p class="card-text">Merk : <?= $detail['merk_produk']; ?></p>
                    <p class="card-text">Tipe : <?= $detail['tipe_produk']; ?></p>
                    <p class="card-text">Harga : <?= $detail['harga_produk']; ?></p>
                </div>
            </div>
        </div>
    </div>