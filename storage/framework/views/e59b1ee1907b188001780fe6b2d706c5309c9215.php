

<header>  
    <a href="/user/home" class="home" style="text-decoration: none;">
        <span href="/user/home" ><i class="bi bi-house-door-fill"></i></span>
    </a>
</header>

    <section class="container2">
        <h1>Dokter Praktik Hari Ini</h1> 
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
          <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
          <div class="col">
            <div class="card">
              <img class="foto card-img-top" src="<?php echo e(asset('storage/'. $dokter->fotodokter)); ?>" alt="foto dokter"> 
              <div class="card-body">
                <h5 class="card-title"><?php echo e($dokter->doctor_name); ?></h5>
                <p class="card-text"><?php echo e($dokter->deskripsi); ?></p>
              </div>
            </div>
          </div>    
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
        </div>
    </section>

<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/user/dokter.blade.php ENDPATH**/ ?>