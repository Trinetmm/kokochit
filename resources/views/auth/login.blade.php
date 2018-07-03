@extends('layouts.home')

@section('title', 'Login')

@section('content')
  @component('components.breadcrumb')
    @slot('breadcrumb')
      Login
    @endslot
  @endcomponent
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="box-authentication">
            <h4>Login</h4>
            <form method="POST" action="{{ route('login') }}">
            @csrf
              <p class="before-login-text">Welcome back! Sign in to your account</p>
              <label for="email">Email address<span class="required">*</span></label>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                    <label class="text-danger">{{ $errors->first('email') }}</label>
                    <br>
              @endif
              <label for="password">Password<span class="required">*</span></label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
              <p class="forgot-pass"><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
              <button class="button"><i class="fa fa-lock"></i>&nbsp; <span>Login</span></button>
              <label class="inline" for="rememberme">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
              </label>
            </form>
          </div>
          <div class="box-authentication">
            <h4>Register</h4><p>Create your very own account</p>
            <form method="GET" action="{{ route('register') }}">
              <label for="eamil">Email address<span class="required">*</span></label>
              <input name="email" id="email" type="text" class="form-control">
              <button class="button"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
            </form>                                           
            
            
            <div class="register-benefits">
                <h5>Sign up today and you will be able to :</h5>
                <ul>
                    <li>Speed your way through checkout</li>
                    <li>Track your orders easily</li>
                    <li>Keep a record of all your purchases</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
@endsection
