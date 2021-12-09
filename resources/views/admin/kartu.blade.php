@extends('../layouts/main')

    <header>  
        <a href="/admin/home" class="home" style="text-decoration: none;">
            <span href="/admin/home" ><i class="bi bi-house-door-fill"></i></span>
        </a>
    </header>

    <section class="container3 ">
      <h2>List Data Pasien</h2>
      <a href="/admin/kartu/tambah_pasien" type="button" class="btn btn-primary mb-2" style="margin-left:5px ">Tambah</a>
      <div>
          @if (session()->has('success'))
              <div class="alert alert-success" role="alert">
                  {{ session('success') }}
              </div>    
          @endif
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
            <th scope="col">No BPJS</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($patients as $pasien)
              
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pasien->name }}</td>
            <td>{{ $pasien->tanggalLahir }}</td>
            <td>{{ $pasien->alamat }}</td>
            <td>{{ $pasien->pekerjaan }}</td>
            <td>{{ $pasien->nik }}</td>
            <td>{{ $pasien->nobpjs }}</td>
            <td>
              <a href="/admin/kartu/detail/{{ $pasien->id }}" class="badge bg-info">
                <i class="bi bi-eye-fill"></i>
              </a>
              <a href="" class="badge bg-warning">
                <i class="bi bi-pencil-fill"></i>
              </a>

              <form action="/admin/kartu/{{ $pasien->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf

                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                  <i class="bi bi-x-circle-fill"></i>
                </button>
              </form>
            

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </section>
    

