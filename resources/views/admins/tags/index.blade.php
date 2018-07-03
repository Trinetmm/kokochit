@extends('layouts.admin')

@section('title', 'Tags')
@section('content')
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
						<h1 class="page-header">Tags</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<table class="table">
							<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
							</tr>
						</thead>
						<tbody>
							@if($tags)
								@foreach($tags as $tag)
									<tr>
										<th scope="row">{{ $tag->id }}</th>
										<td><a href="{{route('admin.tags.edit', $tag->id)}}">{{ $tag->name }}</a></td>
									</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<form method="POST" action="{{ route('admin.tags.store') }}">
						@csrf
						<div class="form-row">
							<div class="form-group{{ $errors->has('tag') ? ' has-error' : '' }}">
								<label for="price">Tag</label>
									@if($errors->has('tag'))
								<label class="control-label" for="price">{{ $errors->first('tag') }}</label>
							@endif
								<input type="text" class="form-control" id="tag" name="tag" placeholder="Tag name" value="{{ old('tag')}}">
							</div>
							
							<div class="form-row">
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Create</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
