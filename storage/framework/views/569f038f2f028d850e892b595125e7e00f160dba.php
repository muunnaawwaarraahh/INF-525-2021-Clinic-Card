

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
              <h5>Log in</h5>
            </div>
            <!-- Form -->
            <div class="row mt-3">
              <?php if(session()->has('success')): ?>
                  <div class="alert alert-success" role="alert">
                      <?php echo e(session('success')); ?>

                  </div>    
              <?php endif; ?>
              
              <?php if(session()->has('loginError')): ?>
                  <div class="alert alert-success" role="alert">
                      <?php echo e(session('loginError')); ?>

                  </div>    
              <?php endif; ?>

            
              
            <form class="px-3" action="/user/check " method="post" autocomplete="off">
              <?php echo csrf_field(); ?>
              <!-- Input Box -->
              <div class="form-input">
                <span><i class="bi bi-person-circle"></i></span>
                <input type="username" name="username" id="username" placeholder="Username" value="<?php echo e(old('username')); ?>" required />
              </div>
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <div class="form-input">
                <span><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password" placeholder="Password" value="<?php echo e(old('password')); ?>" required />
              </div>
                  <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="invalid-feedback"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  
              <!-- Login Button -->
              <div class="mb-3">
                <button type="submit" class="btn btn-block">Masuk</button>
              </div>
            

              <div class="text-center mb-5" style="color: #777">
                Belum punya akun?
                <a class="register-link" href="/user/register">Daftar disini!</a>
                <br />
                <a class="register-link" href="/admin/login">Login sebagai admin</a>
              </div>
            </form>
          </div>
          <!-- FORM END -->
        </div>
        <!-- FORM CONTAINER END -->
      </div>
    </div>


<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/login/login.blade.php ENDPATH**/ ?>