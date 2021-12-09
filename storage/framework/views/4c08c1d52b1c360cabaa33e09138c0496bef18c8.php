

    <header>  
        <a href="/admin/home" class="home" style="text-decoration: none;">
            <span href="/home" ><i class="bi bi-house-door-fill"></i></span>
        </a>
    </header>

    <section class="container3 ">
      <h2>List Data Pasien</h2>
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
            <th scope="col">Foto Ktp</th>
            <th scope="col">No BPJS</th>
            <th scope="col">Foto BPJS</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Muna</td>
            <td>2001-08-10</td>
            <td>Lmabaro</td>
            <td>programmer</td>
            <td>10292938382883288</td>
            <td>foto1</td>
            <td>12345</td>
            <td>foto2</td>
            <td>a</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Muna</td>
            <td>2001-08-10</td>
            <td>Lmabaro</td>
            <td>programmer</td>
            <td>10292938382883288</td>
            <td>foto1</td>
            <td>12345</td>
            <td>foto2</td>
            <td>b</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Muna</td>
            <td>2001-08-10</td>
            <td>Lmabaro</td>
            <td>programmer</td>
            <td>10292938382883288</td>
            <td>foto1</td>
            <td>12345</td>
            <td>foto2</td>
            <td>c</td>
          </tr>
        </tbody>
      </table>

    </section>
    


<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views//admin/kartu.blade.php ENDPATH**/ ?>