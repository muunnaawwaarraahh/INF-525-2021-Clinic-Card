

<header>  
    <a href="/user/home" class="home" style="text-decoration: none;">
        <span href="/user/home" ><i class="bi bi-house-door-fill"></i></span>
    </a>
</header>

    <section class="container2 ">
        <h1>Jadwal Klinik Hari Ini</h1> 
        <table class="table caption-top ">
          <caption>List of schedule</caption>
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">Jadwal</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th scope="row"><?php echo e($loop->iteration); ?></th>

              <td><?php echo e($jadwal->doctor_name); ?></td>
              <td><?php echo e($jadwal->jadwal); ?></td>
              
            </tr>
  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>

    </section>


<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/user/jadwal.blade.php ENDPATH**/ ?>