<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg">

      <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>

      <?= $this->session->flashdata('message'); ?>

      <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Produk</th>
            <th scope="col">Quantity</th>
            <th scope="col">Jasa Kurir</th>
            <th scope="col">Metode Pembayaran</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>

          <?php $i = 1; ?>
          <?php foreach ($transactionlist as $tl) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $tl['alamat']; ?></td>
              <td><?= $tl['no_telp']; ?></td>
              <td><?= $tl['nama_produk']; ?></td>
              <td><?= $tl['quantity']; ?></td>
              <td><?= $tl['nama_kurir']; ?></td>
              <td><?= $tl['metode_pembayaran']; ?></td>
              <td>Rp <?= number_format($tl['total_pesanan']); ?>,-</td>
            <?php endforeach; ?>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<div class="modal fade" id="addSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="addSubmenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addSubmenuModalLabel">Add New Submenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu/submenu'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
          </div>
          <div class="form-group">
            <select class="form-control" name="menu_id" id="menu_id">
              <option value="">-- Select Menu --</option>
              <?php foreach ($menu as $m) : ?>
                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Url">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon">
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
              <label class="form-check-label" for="is_active">
                Active?
              </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i> Cancel</button>
          <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Add</button>
        </div>
      </form>
    </div>
  </div>
</div>