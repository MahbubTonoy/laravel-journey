@extends('auth.authMaster')

@section('section')

  <div class="main">

    <!-- Verify  Form -->
    <section class="sign-in">
      <div class="container">
        <div class="signin-content">
          <div class="signin-image">
            <figure><img src="{{asset('images/signin-image.jpg')}}" alt="sign up image"></figure>
            <a href="{{route('register')}}" class="signup-image-link">Create an account</a>
          </div>

          <div class="signin-form">
            <h2 class="form-title">Password Recovery</h2>
            <form method="POST" action="{{ route('password.email') }}" class="register-form" id="login-form">
              @csrf
              <div class="form-group">
                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" cclass="@error('email') is-invalid @enderror" name="email" id="your_name" placeholder="Email" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="{{ __('Send Password Reset Link') }}" />
              </div>
            </form>
            <div class="social-login">
              <a href="{{route('login')}}" class="social-label">Have an Account?</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  @endSection