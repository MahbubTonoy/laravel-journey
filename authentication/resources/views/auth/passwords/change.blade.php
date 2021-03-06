@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('updatePwd') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="password-old" class="col-md-4 col-form-label text-md-end">Old Password</label>

                            <div class="col-md-6">
                                <input id="password-old" type="password" class="form-control @error('password') is-invalid @enderror" name="oldPwd" value="{{ old('password') }}" required autofocus>

                                @error('oldPwd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-new-1" class="col-md-4 col-form-label text-md-end">New Password</label>

                            <div class="col-md-6">
                                <input id="password-new-1" type="password" class="form-control @error('password') is-invalid @enderror" name="newPwd" required autocomplete="current-password">

                                @error('newPwd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-new-2" class="col-md-4 col-form-label text-md-end">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="password-new-2" type="password" class="form-control @error('password') is-invalid @enderror" name="newPwd_confirmation" required autocomplete="current-password">

                                @error('newPwd_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
