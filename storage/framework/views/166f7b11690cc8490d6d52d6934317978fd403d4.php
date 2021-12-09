

<header>  
    <a href="/admin/home" class="home" style="text-decoration: none;">
        <span href="/admin/home" ><i class="bi bi-house-door-fill"></i></span>
    </a>
</header>

    <div class="container2 " autocomplete="off">
        <h2>Tambah Data Dokter Sedang Praktik</h2>
        <a href="/admin/dokter" type="button" class="btn btn-secondary mb-2" style=" ">Kembali</a>
    <form class="" action="/admin/dokter/tambah_dokter" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row mt-3">
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('success')); ?>

                </div>    
            <?php endif; ?>

            <div class="mb-2 row">
                <label for="doctor_name" class="col-sm-3 col-form-label">Nama dokter</label>
                <div class="col-sm-8 col">
                    <input class="form-control <?php $__errorArgs = ['doctor_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="Nama dokter"  id="doctor_name" name="doctor_name" value="<?php echo e(old('doctor_name')); ?>">
                    <?php $__errorArgs = ['doctor_name'];
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
            </div>
            <div class="mb-3 row">
                <label for="fotodokter" class="col-sm-3 col-form-label">Unggah Foto Dokter</label>
                <div class="col-sm-8 col-4">
                    <input type="file" class="form-control <?php $__errorArgs = ['fotodokter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="fotodokter" id="fotodokter"  />
                    <?php $__errorArgs = ['fotodokter'];
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
            </div>
            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                <div class="col-sm-8 col">
                    <input class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="Deskripsi terkait dokter" name="deskripsi" id="deskripsi" value="<?php echo e(old('deskripsi')); ?>">
                    <?php $__errorArgs = ['deskripsi'];
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
            </div>
        
            <div class="">
                <button type="submit" class="btn btn-primary mb-3" style="float: right;">Simpan</button>
            </div>
        </div>
    </form>

    </div>



<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/admin/tambah_dokter.blade.php ENDPATH**/ ?>