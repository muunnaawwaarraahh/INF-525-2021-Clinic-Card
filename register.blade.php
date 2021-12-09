@extends('../layouts/main')

    <div class="container-fluid">
        <div>
          <div class=" infinity-form registration-form" autocomplete="off">
            <!-- Company Logo -->
            <div class="text-center mb-4">
              <h2>Sign Up</h2>
            </div>

            <div class="result">
              @if(Session::get('success'))
                  <div class="alert alert-success" style="text-align: center">
                      {{ Session::get('success')}}
                  </div>
              @endif

              @if(Session::get('fail'))
                  <div class="alert alert-danger">
                      {{ Session::get('fail')}}
                  </div>
              @endif
            </div>

            <!-- Form -->
            <form class="" action="/user/register" method="post">
              @csrf
              <!-- Input Box -->
              <div class="form-input">
                <span><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama" value="{{ old('name') }}" />
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              </div>
              <div class="form-input">
                <span><i class="bi bi-person-circle"></i></span>
                <input type="username" class="form-control item @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}" />
                    @error('username')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              </div>
              <div class="form-input">
                <span><i class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control item @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" value="{{ old('password') }}" />
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              </div>
              <div class="form-input">
                <span><i class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control item @error('password2') is-invalid @enderror" name="password2" id="password2" placeholder="Ulangi Password" value="{{ old('password2') }}" />
                    @error('password2')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    
              </div>

              <!-- Login Button -->
              <div class="mb-3">
                <button type="submit" class="btn btn-block">Daftar</button>
              </div>

              <div class="text-center mb-5" style="color: #777">
                Sudah punya akun?
                <a class="register-link" href="/user/login">Masuk disini!</a>
              </div>
          </form>
          </div>
          <!-- FORM END -->
        </div>
        <!-- FORM CONTAINER END -->
    </div>

