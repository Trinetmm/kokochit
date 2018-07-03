@extends('layouts.home')

@section('content')
  @component('components.breadcrumb')
    @slot('breadcrumb')
      Reset Password
    @endslot
  @endcomponent
  <section class="main-container col1-layout">
      <div class="main container">
          <div class="page-content">
              <div class="account-login">
                  <div class="box-authentication">
                      <h4>{{ __('Reset Password') }}</h4>
                      <p class="before-login-text">Enter you registered email address</p>
                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                          @endif
                          <form method="POST" action="{{ route('password.email') }}">
                              @csrf
                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' text-danger' : '' }}" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Reset') }}
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
