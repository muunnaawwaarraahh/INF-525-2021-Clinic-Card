

    <div class="container-fluid">
        <div>
          <div class=" infinity-form registration-form" autocomplete="off">
            <!-- Company Logo -->
            <div class="text-center mb-4">
              <h2>Sign Up</h2>
            </div>

            <div class="result">
              <?php if(Session::get('success')): ?>
                  <div class="alert alert-success" style="text-align: center">
                      <?php echo e(Session::get('success')); ?>

                  </div>
              <?php endif; ?>

              <?php if(Session::get('fail')): ?>
                  <div class="alert alert-danger">
                      <?php echo e(Session::get('fail')); ?>

                  </div>
              <?php endif; ?>
            </div>

            <!-- Form -->
            <form class="" action="/user/register" method="post">
              <?php echo csrf_field(); ?>
              <!-- Input Box -->
              <div class="form-input">
                <span><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="name" placeholder="Nama" value="<?php echo e(old('name')); ?>" />
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-input">
                <span><i class="bi bi-person-circle"></i></span>
                <input type="username" class="form-control item <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" id="username" placeholder="Username" value="<?php echo e(old('username')); ?>" />
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
              </div>
              <div class="form-input">
                <span><i class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control item <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" id="password" placeholder="Password" value="<?php echo e(old('password')); ?>" />
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-input">
                <span><i class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control item <?php $__errorArgs = ['password2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password2" id="password2" placeholder="Ulangi Password" value="<?php echo e(old('password2')); ?>" />
                    <?php $__errorArgs = ['password2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
              </div>

              <!-- Login Button -->
              <div class="mb-3">
                <button type="submit" class="btn btn-block">Daftar</button>
              </div>

              <div class="text-center mb-5" style="color: #777">
                Sudah punya akun?
                <a class="register-link" href="/user/login">Masuk disini!</a>
              </div>
          </form>
          </div>
          <!-- FORM END -->
        </div>
        <!-- FORM CONTAINER END -->
    </div>


<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/login/register.blade.php ENDPATH**/ ?>