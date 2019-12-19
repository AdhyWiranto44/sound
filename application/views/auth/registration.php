<div class="container">

  <div class="card o-hidden border-0 my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
              <div class="form-group" style="font-family: roboto;">
                <input type="text" class="form-control form-control-user rounded" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group" style="font-family: roboto;">
                <select class="form-control form-control-sm" id="role" name="role">
                  <option value="2">As a Member</option>
                  <option value="1">As a Administrator</option>
                </select>
              </div>
              <div class="form-group" style="font-family: roboto;">
                <input type="text" class="form-control form-control-user rounded" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0" style="font-family: roboto;">
                  <input type="password" class="form-control form-control-user rounded" id="password1" name="password1" placeholder="Password">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6" style="font-family: roboto;">
                  <input type="password" class="form-control form-control-user rounded" id="password2" name="password2" placeholder="Repeat Password">
                  <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <button type="submit" class="btn btn-warning btn-user btn-block rounded" style="font-family: roboto;">
                Register Account
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small text-dark" href="<?= base_url('auth'); ?>" style="font-family: roboto;">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>