@extends('../layouts/main')

    <div class="banner" style="background-image: url(../images/jumbotron.jpg)">
      <div class="container">
        

        <a href="logout" class="home" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="text-decoration: none">
          <i class="bi bi-box-arrow-right"></i>
        </a>
        <form action="logout" method="post" id="logout-form" class="d-none">@csrf</form>
        
        <h1 class="judul">Clinic Card</h1>
        <h3>Home page admin</h3>
        <br />
        <br />

        <div class="row">
          <div class="col">
            <a href="/admin/kartu" class="button">Kartu Pasien</a>
          </div>
          <div class="col">
            <a href="/admin/jadwal" class="button">Jadwal Klinik</a>
          </div>
          <div class="col">
            <a href="/admin/dokter" class="button">Dokter Praktik</a>
          </div>
        </div>
      </div>
    </div>
    <!--Akhir Jumbotron-->
    <div class="container teks">
      <br /><br />
      <h4 class="display-4 py-4 fw-normal">Selamat Datang</h4>
      <p>Halaman ini merupakan halaman admin. Web ini diperuntukkan kepada pasien di klinik gigi untuk memudahkan pembuatan kartu pasien sehingga pasien bisa lebih efisien dari segi waktu dan kemungkinan pasien kembali ke rumah jika berkas yang diperlukan tertinggal.</p>

      <br />
      <br />
      <br />
    </div>

