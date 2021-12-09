@extends('../layouts/main')

<header>  
    <a href="/admin/home" class="home" style="text-decoration: none;">
        <span href="/admin/home" ><i class="bi bi-house-door-fill"></i></span>
    </a>
</header>

    <section class="container2">
        <h1>Laman List Dokter Praktik Hari Ini</h1> 
        <a href="/admin/dokter/tambah_dokter" type="button" class="btn btn-primary mb-2" style="margin-left:5px ">Tambah</a>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">

          @foreach ($doctors as $dokter)    
          <div class="col">
            <div class="card">
              <img class="foto card-img-top" src="{{ asset('storage/'. $dokter->fotodokter) }}" alt="foto dokter"> 
              <div class="card-body">
                <h5 class="card-title">{{ $dokter->doctor_name }}</h5>
                <p class="card-text">{{ $dokter->deskripsi }}</p>
                <a href="" class="badge bg-warning">
                  <i class="bi bi-pencil-fill"></i>
                </a>
                <a href="" class="badge bg-danger">
                  <i class="bi bi-x-circle-fill"></i>
                </a>
              </div>
            </div>
          </div>    
          @endforeach

        </div>
      </section>
