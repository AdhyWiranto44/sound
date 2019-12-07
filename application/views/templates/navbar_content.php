<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">soUnd</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-item nav-link mr-3" href="<?= base_url('products/showHeadphones'); ?>">Headphones</a>
      <a class="nav-item nav-link mr-3" href="<?= base_url('products/showEarphones'); ?>">Earphones</a>
      <a class="nav-item nav-link mr-3" href="<?= base_url('products/showBrands'); ?>">Brands</a>
      <a class="nav-item nav-link mr-3" href="#">About</a>
      <a class="nav-item nav-link" href="#">Contact us</a>
    </div>
    <a class="btn btn-secondary mr-2" style="width: 75px;" href="<?= base_url('auth/index'); ?>" role="button">Login</a>
    <a class="btn btn-outline-secondary" style="width: 75px;" href="<?= base_url('auth/registration'); ?>" role="button">Register</a>
  </div>
</nav>