<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/simpan_register'); ?>">
                <div class="form-group row">
                
                <div class="form-group">
                </div>
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full name" value="<?= set_value ('nama'); ?>">

                  <?= form_error('nama','<small class="text-danger pl-4">','</small>'); ?>
                  
                </div>  
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username"value="<?= set_value ('username'); ?>"
>
                
                <?= form_error('username','<small class="text-danger pl-4">','</small>'); ?>

                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">

                <?= form_error('password1','<small class="text-danger pl-4">','</small>'); ?>


                </div>
                  
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth '); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 img-hero">
                                <img src="<?= base_url('assets/user/'); ?>img/logo.png" alt="logo ditlantas" class="img-fluid">
                </div>
            </div>
  </div>

  
