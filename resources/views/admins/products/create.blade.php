@extends('layouts.admin')

@section('title', 'Dashboard')
@section('content')

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create a new product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<form method="POST" action="{{ route('admin.products.store') }}">
            	@csrf
				  <div class="form-row">
				    <div class="form-group col-md-6{{ $errors->has('name') ? ' has-error' : '' }}"">
						<label for="name">{{ __('Name') }}</label>
						@if($errors->has('name'))
							<label class="control-label" for="name">({{ $errors->first('name') }})</label>
						@endif
						<input type="text" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" id="name" name="name" placeholder="Name" value="{{ old('name') }}" autofocus>
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('category') ? ' has-error' : '' }}">
				      <label for="category">Category</label>
				      	@if($errors->has('category'))
							<label class="control-label" for="category">({{ $errors->first('category') }})</label>
						@endif
				      	<select name="category_id" class="form-control" id="category">
				      		@foreach($categories as $category)
					      		<option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
					      	@endforeach
					    </select>
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('brand') ? ' has-error' : '' }}">
				      <label for="category">Brand</label>
				      	@if($errors->has('brand'))
							<label class="control-label" for="brand">({{ $errors->first('brand') }})</label>
						@endif
				      	<select name="brand_id" class="form-control" id="brand">
				      		@foreach($brands as $brand)
					      		<option value="{{ $brand->id }}" {{ old('brand') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
					      	@endforeach
					    </select>
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('price') ? ' has-error' : '' }}">
				      <label for="price">Price</label>
				      	@if($errors->has('price'))
							<label class="control-label" for="price">({{ $errors->first('price') }})</label>
						@endif
				      <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{ old('price') }}">
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('old_price') ? ' has-error' : '' }}">
				      <label for="old_price">Old Price</label>
				      	@if($errors->has('old_price'))
							<label class="control-label" for="old_price">({{ $errors->first('old_price') }})</label>
						@endif
				      <input type="text" class="form-control" id="old_price" name="old_price" placeholder="Old Price" value="{{ old('old_price') }}">
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('availability') ? ' has-error' : '' }}">
				      <label for="availability">Availability</label>
				      	@if($errors->has('availability'))
							<label class="control-label" for="availability">({{ $errors->first('availability') }})</label>
						@endif
				      	<select class="form-control" id="availability" name="availability">
				      		<option value="1" {{ old('availability') == 1 ? 'selected' : '' }}>In Stock</option>
				      		<option value="0" {{ old('availability') == 0 ? 'selected' : '' }}>Out of Stock</option>
				      		<option value="2" {{ old('availability') == 2 ? 'selected' : '' }}>Order</option>
					    </select>
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('quantity') ? ' has-error' : '' }}"">
						<label for="quantity">Quantity</label>
						@if($errors->has('quantity'))
							<label class="control-label" for="quantity">({{ $errors->first('quantity') }})</label>
						@endif
						<input type="number" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" id="quantity" name="quantity" value="{{ old('quantity') }}" >
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('quick_overview') ? ' has-error' : '' }}">
				      <label for="quick_overview">Quick Overview</label>
				      	@if($errors->has('quick_overview'))
							<label class="control-label" for="quick_overview">({{ $errors->first('quick_overview') }})</label>
						@endif
				      	<textarea class="form-control" id="quick_overview" name="quick_overview" rows="3">{{ old('quick_overview') }}</textarea>
				    </div>
				    <div class="form-group col-md-6{{ $errors->has('detail') ? ' has-error' : '' }}">
				      <label for="detail">Detail</label>
				      	@if($errors->has('detail'))
							<label class="control-label" for="detail">({{ $errors->first('detail') }})</label>
						@endif
				      	<textarea class="form-control" id="detail" name="detail" rows="3">{{ old('detail') }}</textarea>
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
