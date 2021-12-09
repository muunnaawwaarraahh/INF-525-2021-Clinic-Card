

    <div class="banner" style="background-image: url(../images/jumbotron.jpg)">
      <div class="container">
        <a href="logout" class="home" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="text-decoration: none">
          <i class="bi bi-box-arrow-right"></i>
        </a>
        <form action="logout" method="post" id="logout-form" class="d-none"><?php echo csrf_field(); ?></form>
        <h1 class="judul">Clinic Card</h1>
        <br />
        <br />

        <div class="row">
          <div class="col">
            <a href="/user/kartu_view" class="button">Kartu Pasien</a>
          </div>
          <div class="col">
            <a href="/user/jadwal" class="button">Jadwal Klinik</a>
          </div>
          <div class="col">
            <a href="/user/dokter" class="button">Dokter Praktik</a>
          </div>
        </div>
      </div>
    </div>
    <!--Akhir Jumbotron-->
    <div class="container teks">
      <br /><br />
      <h4 class="display-4 py-4 fw-normal">Selamat Datang</h4>
      <p>Web ini diperuntukkan kepada pasien di klinik gigi untuk memudahkan pembuatan kartu pasien sehingga pasien bisa lebih efisien dari segi waktu dan kemungkinan pasien kembali ke rumah jika berkas yang diperlukan tertinggal.</p>

      <br />
      <br />
      <br />
    </div>


<?php echo $__env->make('../layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek Laravel\MakeCliniCard\resources\views/user/home.blade.php ENDPATH**/ ?>