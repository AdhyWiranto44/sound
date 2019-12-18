<div class="row" style="margin-top: 50px;">
  <div class="col-4 mt-3 mx-auto">
    <?= $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="container">

  <!-- Jumbotron -->
  <div class="row mt-4 mr-0">
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="<?= base_url('products/detail/11'); ?>">
              <img src="<?= base_url('assets/img/carousel/1.png'); ?>" class="d-block w-100">
            </a>
          </div>
          <div class="carousel-item">
            <a href="<?= base_url('products/detail/19'); ?>">
              <img src="<?= base_url('assets/img/carousel/2.png'); ?>" class="d-block w-100">
            </a>
          </div>
          <div class="carousel-item">
            <a href="<?= base_url('products/detail/9'); ?>">
              <img src="<?= base_url('assets/img/carousel/3.png'); ?>" class="d-block w-100">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of Jumbotron -->

  <!-- Banner -->
  <div class="row my-4 mr-0">
    <div class="col-sm mb-3">
      <div class="card text-white rounded-0 border-0">
        <img class="card-img imgredup rounded-0" src="<?= base_url('assets/img/banner/'); ?>headphones.png" alt="">
        <div class="card-img-overlay">
          <h4 class="card-title">Headphones</h4>
          <p class="card-text">Enjoy your creativity</p>
          <a class="text-white" href="<?= base_url('products/headphones'); ?>">more ></a>
        </div>
      </div>
    </div>
    <div class="col-sm mb-3">
      <div class="card text-white rounded-0 border-0">
        <img class="card-img imgredup rounded-0" src="<?= base_url('assets/img/banner/'); ?>earphones.png" alt="">
        <div class="card-img-overlay">
          <h4 class="card-title">Earphones</h4>
          <p class="card-text">Just chillin'</p>
          <a class="text-white" href="<?= base_url('products/earphones'); ?>">more ></a>
        </div>
      </div>
    </div>
    
    <!-- <div class="col-sm mb-3">
      <div class="card text-white rounded-0 border-0">
        <img class="card-img imgredup rounded-0" src="<?= base_url('assets/img/banner/'); ?>brands.png" alt="">
        <div class="card-img-overlay">
          <h4 class="card-title">Brands</h4>
          <p class="card-text">Find your favorite brand</p>
          <a class="text-white" href="<?= base_url('products/brands'); ?>">more ></a>
        </div>
      </div>
    </div> -->
  </div>
  <!-- end of Banner -->

</div>