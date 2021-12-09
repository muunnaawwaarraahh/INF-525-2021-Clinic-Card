

    <header>  
        <a href="/admin/home" class="home" style="text-decoration: none;">
            <span href="/admin/home" ><i class="bi bi-house-door-fill"></i></span>
        </a>
    </header>

    <section class="container3 ">
        <a href="/admin/kartu" type="button" class="btn btn-secondary mb-2" style="margin-left:15px ">Kembali</a>

        <div class="col-md-11">
              <div class="card mb-3">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama </h6>
                    </div>
                    <div class="col-sm-1">
                      <h6 class="mb-0">:</h6>
                    </div>
                    <div class="col-sm-8 text-dark">
                    <?php echo e($patient->name); ?>                  
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tanggal Lahir </h6>
                    </div>
                    <div class="col-sm-1">
                      <h6 class="mb-0">:</h6>
                    </div>
                    <div class="col-sm-8 text-dark">
                    <?php echo e($patient->tanggalLahir); ?>                  
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat </h6>
                    </div>
                    <div class="col-sm-1">
                      <h6 class="mb-0">:</h6>
                    </div>
                    <div class="col-sm-8 text-dark">
                    <?php echo e($patient->alamat); ?>                  
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pekerjaan </h6>
                    </div>
                    <div class="col-sm-1">
                      <h6 class="mb-0">:</h6>
                    </div>
                    <div class="col-sm-8 text-dark">
                    <?php echo e($patient->pekerjaan); ?>                  
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK </h6>
                    </div>
                    <div class="col-sm-1">
                      <h6 class="mb-0">:</h6>
                    </div>
                    <div class="col-sm-8 text-dark">
                    <?php echo e($patient->nik); ?>                  
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <h6 class="mb-0">Bukti Foto KTP </h6>
                        </div>
                        <div class="col-sm-1">
                            <h6 class="mb-0">:</h6>
                        </div>
                        <div class="col-sm-8 text-dark">
                            <img class="foto" src="<?php echo e(asset('storage/'. $patient->fotoktp)); ?>" alt="Bukti unggah KTP">               
                        </div>
                    </div>
                    
                    <hr>
                    
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">No BPJS </h6>
                        </div>
                        <div class="col-sm-1">
                            <h6 class="mb-0">:</h6>
                        </div>
                        <div class="col-sm-8 text-dark">
                            <?php echo e($patient->nik); ?>                  
                        </div>
                    </div>
                    
                    <hr>
                    
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Bukti Foto BPJS </h6>
                          </div>
                          <div class="col-sm-1">
                              <h6 class="mb-0">:</h6>
                          </div>
                          <div class="col-sm-8 text-dark">
                              <img class="foto" src="<?php echo e(asset('storage/'. $patient->fotobpjs)); ?>" alt="bukti unggah bpjs">               
                          </div>
                      </div>
                      <hr>
                      
                </div>
            </div>
        </div>
    </section>


<?php echo $__env->make('../layouts/main1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/admin/data_detail.blade.php ENDPATH**/ ?>