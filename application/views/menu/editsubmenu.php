<!-- Begin Page Content -->
<div class="container-fluid">



  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url('menu/editsubmenu/') . $sub_menu['id']; ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= $sub_menu['title']; ?>">
          </div>
          <div class="form-group">
            <select class="form-control" name="menu_id" id="menu_id">
              <option value="">-- Select Menu --</option>
              <?php foreach ($menu as $m) : ?>
                <?php if ($m['id'] == $sub_menu['menu_id']) : ?>
                  <option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
                <?php else : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Url" value="<?= $sub_menu['url']; ?>"">
          </div>
          <div class=" form-group">
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon" value="<?= $sub_menu['icon']; ?>">
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
          <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->