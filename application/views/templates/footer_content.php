<div class="container-fluid bg-white">
  <div class="row border-top">
    <div class="col">
      <p class="text-center my-3">Copyright &copy; sound, Inc 2019</p>
    </div>
  </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Do you want to logout?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
        <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Yes</a>
      </div>
    </div>
  </div>
</div>

<!-- About Modal-->
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" style="font-family: roboto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, eaque nisi in recusandae voluptatum nesciunt provident esse adipisci. Aliquid velit debitis ipsum neque aliquam blanditiis facere iure eius. Facere, fugiat!</div>
    </div>
  </div>
</div>

<!-- Contact Modal-->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact us!</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Jika ingin mengenal lebih dekat dengan kami:</p>
        <ul class="list-group">
          <li class="list-group-item"><i class="fas fa-at"></i> : adhywiranto68@gmail.com</li>
          <li class="list-group-item"><i class="fas fa-phone"></i> : 0819 1143 7177</li>
        </ul>
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