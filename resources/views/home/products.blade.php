@extends('layouts.home')

@section('title', 'Products')

@section('content')
	@component('components.breadcrumb')
    @slot('breadcrumb')
      Products
    @endslot
  @endcomponent

	  <!-- Main Container -->
	  <div class="main-container col2-left-layout">
	    <div class="container">
	      <div class="row">
	        @include('components.product_grid')
	        @include('components.product_sidebar')
	      </div>
	    </div>
	  </div>
	  <!-- Main Container End --> 
  
@endsection