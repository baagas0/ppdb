@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Setting Form</h4>
				<h6 class="card-subtitle"> All with bootstrap element classies </h6>
				<form class="mt-4" method="POST" action="{{ (empty($data) ? route('admin.slider.adding') : route('admin.slider.updating', $data->id)) }}" enctype="multipart/form-data">
					@csrf
					<div class="card">
						<div class="card-body">
							<label>Change Image File*</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Upload</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="image" name="image" {{ (empty($data) ? 'required=""' : '') }}>
									<label class="custom-file-label" for="image">Choose file</label>
								</div>
							</div>
						</div>
						<img class="card-img-top img-responsive" src="{{ (empty($data) ? old('image') : asset($data->image)) }}" alt="{{ (empty($data) ? old('title') : $data->title) }}">
					</div>
					
					<div class="form-group">
						<label for="title">Title*</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ (empty($data) ? old('title') : $data->title) }}" required="">
					</div>

					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="linkTitle">Title Link</label>
								<input type="text" name="linkTitle" class="form-control" id="linkTitle" placeholder="Google"  value="{{ (empty($data) ? old('linkTitle') : $data->linkTitle) }}">
							</div>
						</div>
						<div class="col-sm-8">
							<div class="form-group">
								<label for="is_link">Link</label>
								<input type="text" name="is_link" class="form-control" id="is_link" placeholder="https://www.google.com/"  value="{{ (empty($data) ? old('is_link') : $data->is_link) }}">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="description">Content*</label>
						<textarea class="form-control summernote" rows="5" name="description">{{ (empty($data) ? old('description') : $data->description) }}</textarea>
					</div>
					
					

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('adm/libs/summernote/dist/summernote-bs4.css') }}">
@endpush
@push('js')
<script src="{{ asset('adm/libs/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script>
    /************************************/
    //default editor
    /************************************/
   

    
    </script>
@endpush