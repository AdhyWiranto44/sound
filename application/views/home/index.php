<div class="row" style="margin-top: 50px;">
  <div class="col-6 mt-3 mx-auto">
    <?= $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="container">

  <!-- Jumbotron -->
  <div class="row mt-4">
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('assets/img/carousel/1.png'); ?>" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/img/carousel/2.png'); ?>" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/img/carousel/3.png'); ?>" class="d-block w-100">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of Jumbotron -->

  <!-- Banner -->
  <div class="row my-4">
    <div class="col-sm mb-3">
      <div class="card text-white rounded-0 border-0">
        <img class="card-img imgredup rounded-0" src="<?= base_url('assets/img/banner/'); ?>headphones.png" alt="">
        <div class="card-img-overlay">
          <h4 class="card-title">Headphones</h4>
          <p class="card-text">Enjoy your creativity</p>
          <a class="text-white" href="<?= base_url('products/showHeadphones'); ?>">more ></a>
        </div>
      </div>
    </div>
    <div class="col-sm mb-3">
      <div class="card text-white rounded-0 border-0">
        <img class="card-img imgredup rounded-0" src="<?= base_url('assets/img/banner/'); ?>earphones.png" alt="">
        <div class="card-img-overlay">
          <h4 class="card-title">Earphones</h4>
          <p class="card-text">Just chillin'</p>
          <a class="text-white" href="<?= base_url('products/showEarphones'); ?>">more ></a>
        </div>
      </div>
    </div>
    <div class="col-sm mb-3">
      <div class="card text-white rounded-0 border-0">
        <img class="card-img imgredup rounded-0" src="<?= base_url('assets/img/banner/'); ?>brands.png" alt="">
        <div class="card-img-overlay">
          <h4 class="card-title">Brands</h4>
          <p class="card-text">Find your favorite brand</p>
          <a class="text-white" href="<?= base_url('products/showBrands'); ?>">more ></a>
        </div>
      </div>
    </div>
  </div>
  <!-- end of Banner -->

  <!-- Featured -->
  <h5 class="d-inline">Featured Products</h5>
  <div class="row mt-2">
    <div class="col-sm-3 mb-2">
      <div class="card rounded-0">
        <img class="card-img-top rounded-0" src="<?= base_url('assets/products/headphone/'); ?>h1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Beats Studio 3 Wireless</h5>
          <p class="card-text">Rp 3912000</p>
          <a href="#" class="btn btn-warning mb-2 rounded-0 w-100">Buy</a>
          <a href="#" class="btn btn-outline-warning rounded-0 w-100">Add to cart</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm">
      <a class="text-dark" href="<?= base_url('products/showAll'); ?>">
        <p class="d-inline">see more ></p>
      </a>
    </div>
  </div>
  <!-- end of Featured -->

</div>