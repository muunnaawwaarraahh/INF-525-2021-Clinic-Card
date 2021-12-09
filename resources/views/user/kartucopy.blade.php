@extends('../layouts/main')

<header>  
    <a href="/home" class="home" style="text-decoration: none;">
        <span href="/home" ><i class="bi bi-house-door-fill"></i></span>
    </a>
</header>

    <div class="container3 " autocomplete="off">
        <h2>Buat Kartu Pasien Klinik</h2>
        <div class="result">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success')}}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail')}}
                </div>
            @endif
          </div>

    <form class="" action="/kartu" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row mt-3">
            <div class="mb-2 row">
                <label for="name" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-8 col">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Nama"  id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggallahir" class="col-sm-3 col-form-label">Tanggal lahir</label>
                <div class="col-sm-8 col">
                    <input class="form-control @error('tanggalLahir') is-invalid @enderror" type="date" placeholder="Tanggal lahir" name="tanggalLahir" id="tanggalLahir" value="{{ old('tanggalLahir') }}">
                    @error('tanggalLahir')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-8 col">
                    <input class="form-control @error('alamat') is-invalid @enderror" type="text" placeholder="Alamat" name="alamat" id="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-8 col">
                    <input class="form-control @error('pekerjaan') is-invalid @enderror" type="text" placeholder="Pekerjaan" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan') }}">
                    @error('pekerjaan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                <div class="col-sm-8 col">
                    <input class="form-control @error('nik') is-invalid @enderror" type="text" placeholder="NIK" aria-label="nik" name="nik" id="nik" value="{{ old('nik') }}">
                    @error('nik')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="fotoktp" class="col-sm-3 col-form-label">Unggah Foto KTP</label>
                <div class="col-sm-8 col-4">
                    <input type="file" class="form-control @error('fotoktp') is-invalid @enderror" name="fotoktp" id="fotoktp" />
                    @error('fotoktp')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nobpjs" class="col-sm-3 col-form-label">No BPJS</label>
                <div class="col-sm-8 col">
                    <input class="form-control @error('nobpjs') is-invalid @enderror" type="text" placeholder="Nomor BPJS" name="nobpjs" value="{{ old('nobpjs') }}">
                    @error('nobpjs')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="fotobpjs" class="col-sm-3 col-form-label">Unggah Foto BPJS</label>
                <div class="col-sm-8 col-4">
                    <input type="file" class="form-control @error('fotobpjs') is-invalid @enderror" name="fotobpjs" id="fotobpjs"  />
                    @error('fotobpjs')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary mb-3" style="float: right;">Simpan</button>
            </div>
        </div>
    </form>

    </div>


