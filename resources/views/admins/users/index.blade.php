@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Users</h1>
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
				      <th scope="col">Email</th>
				      <th scope="col">Phone</th>
				      <th scope="col">Status</th>
				      <th scope="col">Created</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@if($users)
				  		@foreach($users as $user)
						    <tr>
						      <th scope="row">{{ $user->id }}</th>
						      <td>{{ $user->name }}</td>
						      <td>{{ $user->email }}</td>
						      <td>{{ $user->phone }}</td>
						     
						      	@if($user->token===null)
						      		<td>Active</td>
						      	@else
						      		<td>Not Active</td>
						      	@endif

						      </td>
						      <td>{{ $user->created_at->diffForHumans() }}</td>
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
