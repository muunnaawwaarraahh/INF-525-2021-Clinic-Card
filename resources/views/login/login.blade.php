@extends('../layouts/main')

    <div class="container-fluid">
      <div class="row">
        <!-- IMAGE CONTAINER BEGIN -->
        <div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
        <!-- IMAGE CONTAINER END -->

        <!-- FORM CONTAINER BEGIN -->
        <div class="col-lg-6 col-md-6 infinity-form-container">
          <div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
            <!-- Company Logo -->
            <div class="text-center mb-3 mt-5">
              <img src="../images/logo3.png" width="150px" />
            </div>
            <div class="text-center mb-4">
              <h2>Clinic Card</h2>
              <h5>Log in</h5>
            </div>
            <!-- Form -->
            <div class="row mt-3">
              @if (session()->has('success'))
                  <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                  </div>    
              @endif
              
              @if (session()->has('loginError'))
                  <div class="alert alert-success" role="alert">
                      {{ session('loginError') }}
                  </div>    
              @endif

            {{-- <form action="/" method="POST"> --}}
              {{-- @csrf --}}
            <form class="px-3" action="/user/check " method="post" autocomplete="off">
              @csrf
              <!-- Input Box -->
              <div class="form-input">
                <span><i class="bi bi-person-circle"></i></span>
                <input type="username" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required />
              </div>
                    @error('username')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              <div class="form-input">
                <span><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" required />
              </div>
                  @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  
              <!-- Login Button -->
              <div class="mb-3">
                <button type="submit" class="btn btn-block">Masuk</button>
              </div>
            {{-- </form> --}}

              <div class="text-center mb-5" style="color: #777">
                Belum punya akun?
                <a class="register-link" href="/user/register">Daftar disini!</a>
                <br />
                <a class="register-link" href="/admin/login">Login sebagai admin</a>
              </div>
            </form>
          </div>
          <!-- FORM END -->
        </div>
        <!-- FORM CONTAINER END -->
      </div>
    </div>

