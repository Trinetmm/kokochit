<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Google-Style-Login.css') }}">
</head>
<body>
        <div class="login-card">
            <img src="assets/img/avatar_2x.png" class="profile-img-card">
            <p class="profile-name-card"> </p>
            <form class="form-signin"method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <span class="reauth-email"> </span>
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="{{ __('E-Mail Address') }}"  name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="{{ __('Password') }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="checkbox">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1" name="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
            </form>
            <a href="{{ route('admin.password.request') }}" class="forgot-password">{{ __('Forgot Your Password?') }}</a>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
<html>