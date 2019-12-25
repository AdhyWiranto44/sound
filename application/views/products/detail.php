<div class="container" style="margin-top: 50px; margin-bottom: 250px;">

  <div class="row">
    <div class="col-4 mt-3 mx-auto">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>

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
          <p class="card-text h3 ">Rp <?= number_format($detail['harga_produk']); ?>,-</p>
          <?php if ($user['role_id'] != 1) { ?>
            <a href="<?= base_url('transaction/buy/') . $detail['id_headset']; ?>" class="btn btn-warning mb-2 rounded w-100">Buy</a>
            <a href="<?= base_url('Transaction/addtocart/') . $detail['id_headset']; ?>" class="btn btn-outline-warning rounded w-100">Add to cart</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>