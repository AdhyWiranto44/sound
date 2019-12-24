<div class="container">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php echo $this->session->flashdata('message'); ?>

    <button class="btn btn-warning mb-3" data-toggle="modal" data-target="#tambah_produk"><i class="fas fa-plus"></i> Add New Earphone</button>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Menu</th>
                <th scope="col">Merk</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 1; ?>
            <?php foreach ($barang as $b) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td>
                        <img src="<?= base_url('assets/products/earphone/') . $b['gambar_produk']; ?>" style="height: 100px;">
                    </td>
                    <td><?= $b['nama_produk']; ?></td>
                    <td><?= $b['merk_produk']; ?></td>
                    <td>Rp <?= number_format($b['harga_produk']); ?>,-</td>
                    <td>
                        <a href="<?= base_url(); ?>products/editEarphone/<?= $b['id_headset']; ?>" class="badge badge-success">Edit</a>
                        <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#hapusModal">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Tambah Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Earphone</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'products/tambahearphone'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Merk Produk</label>
                        <input type="text" name="merk_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="text" name="harga_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label></br>
                        <input type="file" name="gambar_produk" class="form-control-file">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-warning">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Hapus Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Produk?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Yakin ingin menghapus produk?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a href="<?= base_url('Products/hapusEarphone/') . $b['id_headset']; ?>" class="btn btn-warning">Ya</a>
            </div>
        </div>
    </div>
</div>