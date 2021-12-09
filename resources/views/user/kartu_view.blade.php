@extends('../layouts/main')

    <header>  
        <a href="/user/home" class="home" style="text-decoration: none;">
            <span href="/user/home" ><i class="bi bi-house-door-fill"></i></span>
        </a>
    </header>

    <section class="container3 ">
      <h2>Kartu Pasien</h2>
      <a href="/user/kartu" class="mb-3" style="margin-left:5px ">Belum isi data? klik disini</a>
      <br>
      <div>
          @if (session()->has('success'))
              <div class="alert alert-success" role="alert">
                  {{ session('success') }}
              </div>    
          @endif
      <table class="table caption-top mt-5">

        @foreach($patients as $patient)
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
                  {{ $patient->name }}                  
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
                  {{ $patient->tanggalLahir }}                  
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
                  {{ $patient->alamat }}                  
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
                  {{ $patient->pekerjaan }}                  
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
                  {{ $patient->nik }}                  
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
                          <img class="foto" src="{{ asset('storage/'. $patient->fotoktp) }}" alt="Bukti unggah KTP">               
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
                          {{ $patient->nik }}                  
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
                            <img class="foto" src="{{ asset('storage/'. $patient->fotobpjs) }}" alt="bukti unggah bpjs">               
                        </div>
                    </div>
                    <hr>
                    @endforeach 
              </div>
          </div>
      </div>
  </section>
