<nav class="navbar navbar-expand-lg navbar-light border-bottom bg-white fixed-top">
  <a class="navbar-brand" href="<?= base_url('home') ?>">
    <img src="<?= base_url('assets/img/logo/') ?>logo2.png" style="height: 30px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <?php if (current_url() != base_url('transaction/pesanan')) : ?>
      <div class="navbar-nav mx-auto">
        <a class="nav-item nav-link mr-3" href="<?= base_url('home'); ?>">Home</a>
        <a class="nav-item nav-link mr-3" href="<?= base_url('products/headphones'); ?>">Headphones</a>
        <a class="nav-item nav-link mr-3" href="<?= base_url('products/earphones'); ?>">Earphones</a>
        <a class="nav-item nav-link mr-3" href="#" data-toggle="modal" data-target="#aboutModal">About</a>
        <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact us</a>
      </div>
    <?php endif; ?>

    <?php if ($this->session->userdata('email')) : ?>
      <?php if (current_url() != base_url('transaction/pesanan') && $this->session->userdata('role_id') != 1) : ?>
        <a class="text-dark mr-3 text-decoration-none" href="#" data-toggle="modal" data-target="#cartModal"><span class="fa fa-shopping-cart"></span> <span class="badge badge-warning"><?= $count; ?></a>
      <?php endif; ?>

      <?php if (current_url() != base_url('transaction/pesanan')) : ?>
        <p class="text-right small m-0">hello,<b><br><?= $user['name']; ?></b></p>
      <?php else : ?>
        <p class="text-right small m-0 ml-auto">hello,<b><br><?= $user['name']; ?></b></p>
      <?php endif; ?>
      <div class="dropdown">
        <button class="bg-transparent border-0 text-light" data-toggle="dropdown">
          <img class="rounded-circle ml-2" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" style="width: 2.2rem;">
        </button>
        <div class="dropdown-menu shadow-lg customMargin">
          <?php if ($this->session->userdata('role_id') == 1) : ?>
            <a href="<?= base_url('admin'); ?>" class="dropdown-item" style="border-radius: 0px;">Dashboard</a>
          <?php else : ?>
            <a href="<?= base_url('user'); ?>" class="dropdown-item" style="border-radius: 0px;">My Profile</a>
          <?php endif; ?>
          <?php if ($this->session->userdata('role_id') != 1) : ?>
            <hr class="border">
            <a href="<?= base_url('transaction/pesanan'); ?>" class="dropdown-item" style="border-radius: 0px;">My Order</a>
          <?php endif; ?>
          <hr class="border">
          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#logoutModal" style="border-radius: 0px;">Logout</a>
        </div>
      </div>
    <?php else : ?>
      <a class="btn btn-secondary mr-2" style="width: 75px;" href="<?= base_url('auth/index'); ?>" role="button">Login</a>
      <a class="btn btn-outline-secondary" style="width: 75px;" href="<?= base_url('auth/registration'); ?>" role="button">Register</a>
    <?php endif; ?>


  </div>
</nav>