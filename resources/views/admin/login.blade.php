@extends('layouts.auth')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>Admin</b>Sign In</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('admin.login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control  @error('email') is-invalid @enderror" id="login-username"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your valid email..">
          @error('email')
            <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
            </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="login-password" name="password" required autocomplete="current-password" placeholder="Enter password..">
             @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

        {{-- <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-body-dark bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                <!-- Header -->
                                <div class="py-30 text-center">
                                    <h1 class="h4 font-w700 mt-30 mb-10">Welcome to Your Dashboard Admin</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>
                                </div>
                                <form class="js-validation-signin" action="{{ route('admin.login') }}" method="post">
                                    @csrf
                                    <div class="block block-themed block-rounded block-shadow">
                                        <div class="block-header bg-primary">
                                            <h3 class="block-title">Please Sign In</h3>
                
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-username">Email</label>
                                                    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="login-username"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your valid email..">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-password">Password</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="login-password" name="password" required autocomplete="current-password" placeholder="Enter password..">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-6 d-sm-flex align-items-center push">
                                                    <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="remember">Remember Me</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-sm-right push">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="si si-login mr-10"></i> Sign In
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content bg-body-light">
                                            <div class="form-group text-center">
                                                @if (Route::has('password.request'))
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                                                    <i class="fa fa-warning mr-5"></i> Forgot Password
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container --> --}}

@endsection
