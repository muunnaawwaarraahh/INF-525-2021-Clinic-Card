@extends('../layouts/main')

<header>  
    <a href="/user/home" class="home" style="text-decoration: none;">
        <span href="/user/home" ><i class="bi bi-house-door-fill"></i></span>
    </a>
</header>

    <section class="container2">
        <h1>Dokter Praktik Hari Ini</h1> 
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
          @foreach ($doctors as $dokter)    
          <div class="col">
            <div class="card">
              <img class="foto card-img-top" src="{{ asset('storage/'. $dokter->fotodokter) }}" alt="foto dokter"> 
              <div class="card-body">
                <h5 class="card-title">{{ $dokter->doctor_name }}</h5>
                <p class="card-text">{{ $dokter->deskripsi }}</p>
              </div>
            </div>
          </div>    
          @endforeach   
        </div>
    </section>
