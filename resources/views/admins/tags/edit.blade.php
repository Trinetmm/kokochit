@extends('layouts.admin')

@section('title', 'Edit Tag')
@section('content')
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
						<h1 class="page-header">Edit Tag</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<form method="POST" action="{{ route('admin.tags.update', $id = $tag->id) }}">
                        @csrf
                        @method('PATCH')
						<div class="form-row">
							<div class="form-group{{ $errors->has('tag') ? ' has-error' : '' }}">
								<label for="price">Tag</label>
									@if($errors->has('tag'))
								<label class="control-label" for="price">{{ $errors->first('tag') }}</label>
							@endif
								<input type="text" class="form-control" id="tag" name="tag" placeholder="Tag name" value="{{ $tag->name }}">
							</div>
							
						</div>
                        <div class="form-group">
							<button type="submit" class="btn btn-primary col-sm-6">Update</button>
						</div>
					</form>
                    <form method="POST" action="{{ route('admin.tags.destroy', $id = $tag->id) }}">
                        @csrf
                        @method('DELETE')
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger col-sm-6">Delete</button>
                        </div>
                    
                    </form>           
				</div>
			</div>
		</div>
	</div>
@endsection
