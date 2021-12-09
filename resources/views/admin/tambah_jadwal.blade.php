@extends('../layouts/main')

<header>  
    <a href="/admin/home" class="home" style="text-decoration: none;">
        <span href="/admin/home" ><i class="bi bi-house-door-fill"></i></span>
    </a>
</header>

    <div class="container2 " autocomplete="off">
        <h2>Tambah Jadwal Klinik</h2>
        <a href="/admin/jadwal" type="button" class="btn btn-secondary mb-2" style=" ">Kembali</a>
    <form class="" action="/admin/jadwal/tambah_jadwal" method="post" >
        @csrf

        <div class="row mt-3">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>    
            @endif

            <div class="mb-2 row">
                <label for="doctor_name" class="col-sm-2 col-form-label">Nama dokter</label>
                <div class="col-sm-8 col">
                    <input class="form-control @error('doctor_name') is-invalid @enderror" type="text" placeholder="Nama dokter"  id="doctor_name" name="doctor_name" value="{{ old('doctor_name') }}">
                    @error('doctor_name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jadwal" class="col-sm-2 col-form-label">Jadwal</label>
                <div class="col-sm-8 col">
                    <input class="form-control @error('jadwal') is-invalid @enderror" type="text" placeholder="Jadwal" name="jadwal" id="jadwal" value="{{ old('jadwal') }}">
                    @error('jadwal')
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


