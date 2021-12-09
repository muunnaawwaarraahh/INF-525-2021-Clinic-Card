

    <header>  
        <a href="/admin/home" class="home" style="text-decoration: none;">
            <span href="/admin/home" ><i class="bi bi-house-door-fill"></i></span>
        </a>
    </header>

    <section class="container3 ">
      <h2>List Data Pasien</h2>
      <a href="/admin/kartu/tambah_pasien" type="button" class="btn btn-primary mb-2" style="margin-left:5px ">Tambah</a>
      <div>
          <?php if(session()->has('success')): ?>
              <div class="alert alert-success" role="alert">
                  <?php echo e(session('success')); ?>

              </div>    
          <?php endif; ?>
      <table class="table caption-top mt-4">
        <caption>List of patients</caption>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Nik</th>
            <th scope="col">No BPJS</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
          <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($pasien->name); ?></td>
            <td><?php echo e($pasien->tanggalLahir); ?></td>
            <td><?php echo e($pasien->alamat); ?></td>
            <td><?php echo e($pasien->pekerjaan); ?></td>
            <td><?php echo e($pasien->nik); ?></td>
            <td><?php echo e($pasien->nobpjs); ?></td>
            <td>
              <a href="/admin/kartu/detail/<?php echo e($pasien->id); ?>" class="badge bg-info">
                <i class="bi bi-eye-fill"></i>
              </a>
              <a href="" class="badge bg-warning">
                <i class="bi bi-pencil-fill"></i>
              </a>

              <form action="/admin/kartu/<?php echo e($pasien->id); ?>" method="post" class="d-inline">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>

                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                  <i class="bi bi-x-circle-fill"></i>
                </button>
              </form>
            

            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

    </section>
    


<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/admin/kartu.blade.php ENDPATH**/ ?>