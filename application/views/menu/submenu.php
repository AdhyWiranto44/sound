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

      <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#addSubmenuModal"><i class="fas fa-plus"></i> Add New Submenu</button>

      <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Menu</th>
            <th scope="col">Url</th>
            <th scope="col">Icon</th>
            <th scope="col">Active</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php $i = 1; ?>
          <?php foreach ($sub_menu as $sm) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $sm['title']; ?></td>
              <td><?= $sm['menu']; ?></td>
              <td><?= $sm['url']; ?></td>
              <td><?= $sm['icon']; ?></td>
              <?php if ($sm['is_active'] == 1) : ?>
                <td>Yes</td>
              <?php else : ?>
                <td>No</td>
              <?php endif; ?>
              <td>
                <a href="<?= base_url('menu/editsubmenu/') . $sm['id']; ?>" class="badge badge-success">Edit</a>
                <a href="<?= base_url('menu/deletesubmenu/') . $sm['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus sub menu?')">Delete</a>
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