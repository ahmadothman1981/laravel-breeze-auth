@section('title','Register Page')
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
                <p class="text-center">DashBoard Register</p>
                 <form method="POST" action="{{ route('register') }}">
                   @csrf

                  <div class="mb-3">
                    <label for="name" :value="__('Name')" class="form-label">Name</label>
                    <input type="text" id="name" class="form-control" name="name" :value="old('name')"  autofocus autocomplete="name"  aria-describedby="textHelp">
                   <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  </div>

                  <div class="mb-3">
                    <label for="email" :value="__('Email')" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" :value="old('email')"  autocomplete="username"  aria-describedby="emailHelp">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>

                  <div class="mb-4">
                    <label for="password" :value="__('Password')" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" type="password"  name="password"  autocomplete="new-password" >
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>

                  <div class="mb-4">
                    <label for="password_confirmation" :value="__('Confirm Password')" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" type="password" name="password_confirmation"  autocomplete="new-password" id="password_confirmation">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  </div>
                  <button class="btn btn-primary d-grid w-100">Sign Up</button>
                
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="{{route('login')}}">Sign In</a>
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