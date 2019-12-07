<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap'); ?>/css/bootstrap.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

  <style>
    .imgRedup {
      filter: brightness(50%);
    }
  </style>

  <title>soUnd</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">soUnd</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-item nav-link mr-3" href="#">Headphones</a>
        <a class="nav-item nav-link mr-3" href="#">Earphones</a>
        <a class="nav-item nav-link mr-3" href="#">Brands</a>
        <a class="nav-item nav-link mr-3" href="#">About</a>
        <a class="nav-item nav-link" href="#">Contact us</a>
      </div>
      <a class="btn btn-secondary mr-2" style="width: 75px;" href="<?= base_url('auth/index'); ?>" role="button">Login</a>
      <a class="btn btn-outline-secondary" style="width: 75px;" href="<?= base_url('auth/registration'); ?>" role="button">Register</a>
    </div>
  </nav>

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
              <a href="http://bukalapak.com">
                <img src="<?= base_url('assets/img/carousel/1.png'); ?>" class="d-block w-100">
              </a>
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

    <div class="row mt-4 mb-5">
      <div class="col-sm">
        <div class="card text-white">
          <img class="card-img imgRedup" src="<?= base_url('assets/img/banner/'); ?>headphones.png" alt="">
          <div class="card-img-overlay">
            <h4 class="card-title">Headphones</h4>
            <p class="card-text">Enjoy your creativity</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card text-white">
          <img class="card-img imgRedup" src="<?= base_url('assets/img/banner/'); ?>earphones.png" alt="">
          <div class="card-img-overlay">
            <h4 class="card-title">Earphones</h4>
            <p class="card-text">Just chill</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card text-white">
          <img class="card-img imgRedup" src="<?= base_url('assets/img/banner/'); ?>brands.png" alt="">
          <div class="card-img-overlay">
            <h4 class="card-title">Brands</h4>
            <p class="card-text">Find your favorite brand</p>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url('assets/vendor/jquery/'); ?>jquery.js"></script>
  <script src="<?= base_url('assets/vendor/popper/'); ?>popper.min.js"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/'); ?>js/bootstrap.min.js"></script>
</body>

</html>