<div class="container-fluid">
    <!-- <h3><i class="fas fa-edit">EDIT DATA PRODUK</i></h3> -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($barang as $b) : ?>
        <form method="post" action="<?= base_url() . 'Products/ubahHeadphone' ?>">
            <div class="for-group">
                <label>Nama</label>
                <input type="text" name="nama_produk" class="form-control" value="<?= $b->nama_produk ?>">

                <input type="hidden" name="id_headset" class="form-control" value="<?= $b->id_headset ?>">
            </div>

            <div class="for-group">
                <label>Merk</label>
                <input type="text" name="merk_produk" class="form-control" value="<?= $b->merk_produk ?>">
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga_produk" class="form-control" value="<?= $b->harga_produk ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>