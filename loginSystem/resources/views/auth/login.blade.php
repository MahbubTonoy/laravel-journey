@extends('auth.authMaster')

@section('section')

  <div class="main">

    <!-- Sign in  Form -->
    <section class="sign-in">
      <div class="container">
        <div class="signin-content">
          <div class="signin-image">
            <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
            <a href="{{route('register')}}" class="signup-image-link">Create an account</a>
          </div>

          <div class="signin-form">
            <h2 class="form-title">Sign up</h2>
            <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
              @csrf
              <div class="form-group">
                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" class="@error('email') is-invalid @enderror" name="email" id="your_name" placeholder="Email" />

                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" class="@error('password') is-invalid @enderror" name="password" id="your_pass" placeholder="Password" />
              </div>
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <div class="form-group">
                <input type="checkbox" name="remember" id="remember-me" class="agree-term" {{ old('remember') ? 'checked' : '' }} />
                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
              </div>
              <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" /> 
                <a href="{{route('password.request')}}" style="text-align: left " class="signup-image-link">Forget Password</a>
              </div>
            </form>
            <div class="social-login">
              <span class="social-label">Or login with</span>
              <ul class="socials">
                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

@endSection