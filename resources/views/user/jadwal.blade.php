@extends('../layouts/main')

<header>  
    <a href="/user/home" class="home" style="text-decoration: none;">
        <span href="/user/home" ><i class="bi bi-house-door-fill"></i></span>
    </a>
</header>

    <section class="container2 ">
        <h1>Jadwal Klinik Hari Ini</h1> 
        <table class="table caption-top ">
          <caption>List of schedule</caption>
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">Jadwal</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($schedules as $jadwal)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>

              <td>{{ $jadwal->doctor_name }}</td>
              <td>{{ $jadwal->jadwal }}</td>
              
            </tr>
  
            @endforeach
          </tbody>
        </table>

    </section>

