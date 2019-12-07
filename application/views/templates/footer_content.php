<footer>
  <div class="container border-top mt-5">
    <p class="text-center my-3">Copyright &copy; sound, Inc 2019</p>
  </div>
</footer>

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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/vendor/jquery/'); ?>jquery.js"></script>
<script src="<?= base_url('assets/vendor/popper/'); ?>popper.min.js"></script>
<script src="<?= base_url('assets/vendor/bootstrap/'); ?>js/bootstrap.min.js"></script>
</body>

</html>