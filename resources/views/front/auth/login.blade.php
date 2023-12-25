@section('title',' Admin Login Page')
<!doctype html>
<html lang="en">
@include('front.partials.authHead')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('assets-front')}}/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">DashBoard Login</p>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="mb-3">
                    <label for="email" :value="__('Email')" class="form-label">Username</label>
                    <input id="email"  type="email" name="email" :value="old('email')"  autofocus autocomplete="username" class="form-control"  aria-describedby="emailHelp">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                  </div>

                  <div class="mb-4">
                    <label for="password" :value="__('Password')" class="form-label">Password</label>
                    <input type="password" class="form-control"
                            name="password"  id="password"
                             autocomplete="current-password">
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>

                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox"  name="remember" id="remember_me" checked>
                      <label class="form-check-label text-dark" for="remember_me">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="{{route('password.request')}}">Forgot Password ?</a>
                  </div>
                  <button  class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New?</p>
                    <a class="text-primary fw-bold ms-2" href="{{route('register')}}">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('front.partials.AuthScripts')
  
</body>

</html>