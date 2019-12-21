<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-6">

      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>

      <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#addMenuModal"><i class="fas fa-plus"></i> Add New Menu</button>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Menu</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php $i = 1; ?>
          <?php foreach ($menu as $m) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $m['menu']; ?></td>
              <td>
                <a href="<?= base_url('menu/editmenu/') . $m['id']; ?>" class="badge badge-success">Edit</a>
                <a href="<?= base_url('menu/deletemenu/') . $m['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus menu?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<div class="modal fade" id="addMenuModal" tabindex="-1" role="dialog" aria-labelledby="addMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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

<!-- Delete Menu Modal -->
<div class="modal fade" id="deleteMenuModal" tabindex="-1" role="dialog" aria-labelledby="deleteMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteMenuModalLabel">Delete menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin ingin menghapus menu?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i> Cancel</button>
        <a href="<?= base_url('menu/deletemenu/') . $m['id']; ?>" class="btn btn-warning">Delete</a>
      </div>
    </div>
  </div>
</div>