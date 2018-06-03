@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create a new user</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<form method="POST" action="{{ route('admin.users.store') }}">
            	@csrf
				  <div class="form-row">
				    <div class="form-group col-md-6{{ $errors->has('name') ? ' has-error' : '' }}"">
						<label for="name">{{ __('Name') }}</label>
						@if($errors->has('name'))
							<label class="control-label" for="name">({{ $errors->first('name') }})</label>
						@endif
						<input type="text" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" id="name" name="name" placeholder="Name" value="{{ old('name') }}" autofocus>
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">
				      <label for="email">Email</label>
				      	@if($errors->has('email'))
							<label class="control-label" for="email">({{ $errors->first('email') }})</label>
						@endif
				      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('password') ? ' has-error' : '' }}">
				      <label for="password">Password</label>
				      	@if($errors->has('password'))
							<label class="control-label" for="password">({{ $errors->first('password') }})</label>
						@endif
				      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('password') ? ' has-error' : '' }}">
				      <label for="confirm-password">Confirm Password</label>
				      <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Confirm password">
				    </div>
				     <div class="form-group col-md-6{{ $errors->has('phone') ? ' has-error' : '' }}">
				      <label for="phone">Phone Number</label>
				      	@if($errors->has('phone'))
							<label class="control-label" for="phone">({{ $errors->first('phone') }})</label>
						@endif
				      <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone number" value="{{ old('phone') }}">
				    </div>
				  </div>
				  <div class="form-row">
				  	<div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Create</button>
					</div>
				  </div>
				</form>
            </div>
        </div>

        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
@endsection
