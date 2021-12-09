

    <div class="container-fluid">
      <div class="row">
        <!-- IMAGE CONTAINER BEGIN -->
        <div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
        <!-- IMAGE CONTAINER END -->

        <!-- FORM CONTAINER BEGIN -->
        <div class="col-lg-6 col-md-6 infinity-form-container">
          <div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
            <!-- Company Logo -->
            <div class="text-center mb-3 mt-5">
              <img src="../images/logo3.png" width="150px" />
            </div>
            <div class="text-center mb-4">
              <h2>Clinic Card</h2>
              <h5>Log in Admin</h5>
            </div>
            <!-- Form -->
            <form class="px-3" action="/admin/check" method="post">
              <?php echo csrf_field(); ?>
              <!-- Input Box -->
              <div class="form-input">
                <span><i class="bi bi-person-circle"></i></span>
                <input type="text" name="username" id="username" placeholder="Username" tabindex="10" value="<?php echo e(old('username')); ?>" required />
              </div>
              <div class="form-input">
                <span><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password" id="password" placeholder="Password" required />
              </div>

              <!-- Login Button -->
              <div class="mb-3">
                <button type="submit" class="btn btn-block">Masuk</button>
              </div>

              <div class="text-center mb-5" style="color: #777">
                
                <a class="register-link" href="/user/login">Login sebagai user</a>
              </div>
            </form>
          </div>
          <!-- FORM END -->
        </div>
        <!-- FORM CONTAINER END -->
      </div>
    </div>


<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/login/adminLogin.blade.php ENDPATH**/ ?>