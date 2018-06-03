@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<table class="table">
				  	<thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Category</th>
				      <th scope="col">Brand</th>
				      <th scope="col">Price</th>
				      <th scope="col">Old Price</th>
				      <th scope="col">Availability</th>
				      <th scope="col">Quick Overview</th>
				      <th scope="col">Detail</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">Created</th>
				      <th scope="col">Posted By</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@if($products)
				  		@foreach($products as $product)
						    <tr>
						      <th scope="row">{{ $product->id }}</th>
						      <td>{{ $product->name }}</td>
						      <td>{{ $product->category->name }}</td>
						      <td>{{ $product->brand->name }}</td>
						      <td>{{ $product->price }}</td>
						      <td>{{ $product->old_price }}</td>
						      @switch($product->availability)
						      	@case(0)
						      		<td>Out of stock</td>
						      		@break
						      	@case(1)
						      		<td>In stock</td>
						      		@break
						      	@default
						      		<td>Order</td>
						      @endswitch
						      <td>{{ $product->quick_overview }}</td>
						      <td>{{ $product->detail }}</td>
						      <td>{{ $product->quantity }}</td>
						      <td>{{ $product->created_at->diffForHumans() }}</td>
						      <td>{{ $product->admin->name }}</td>
						    </tr>
				    	@endforeach
				    @endif
				  </tbody>
				</table>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
@endsection
