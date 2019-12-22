<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-md-6">

      <div class="card o-hidden border-0 my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                  <div class="form-group" style="font-family: roboto;">
                    <input type="text" class="form-control form-control-user rounded" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class=" form-group" style="font-family: roboto;">
                    <input type="password" class="form-control form-control-user rounded" id="password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <button type="submit" class="btn btn-warning btn-user btn-block rounded" style="font-family: roboto;">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <!-- <a class="small text-dark" href="forgot-password.html" style="font-family: roboto;">Forgot Password?</a>
                  | -->
                  <a class="small text-dark" href="<?= base_url('auth/registration'); ?>" style="font-family: roboto;">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>