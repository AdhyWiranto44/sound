<div class="container">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <button class="btn btn-warning mb-3" data-toggle="modal" data-target="#tambah_produk"><i class="fas fa-plus"></i> Add New Headphone</button>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Menu</th>
                <th scope="col">Merk</th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 1; ?>
            <?php foreach ($barang as $b) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $b['nama_produk']; ?></td>
                    <td><?= $b['merk_produk']; ?></td>
                    <td><?= $b['harga_produk']; ?></td>
                    <td>
                        <img src="<?= base_url('assets/products/headphone/') . $b['gambar_produk']; ?>" style="height: 30px;">
                    </td>
                    <td>
                        <a href="#" class="badge badge-success">Edit</a>
                        <a href="#" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- <div class="row mt-2">
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
    </div> -->
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'Products/tambahHeadphone'; ?>" method="post" enctype="multipart/form-data">
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
                        <label>Tipe Produk</label>
                        <input type="text" name="tipe_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label></br>
                        <input type="file" name="gambar_produk" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>