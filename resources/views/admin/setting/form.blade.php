@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Setting Form</h4>
				<h6 class="card-subtitle"> All with bootstrap element classies </h6>
				<form class="mt-4" method="POST" action="{{ route('admin.setting.update', $data->id) }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" name="slug" class="form-control disabled" disabled id="slug" placeholder="Password" value="{{ $data->slug }}">
					</div>
					
					@if(!is_null($data->is_active))
					<div class="custom-control custom-checkbox mr-sm-2 mb-3">
						<input type="checkbox" class="custom-control-input" id="is_active" name="is_active" {{ ($data->is_active == 1 ) ? 'checked' : '' }}>
						<label class="custom-control-label" for="is_active">Aktif ?</label>
					</div>
					@endif
					@if(!empty($data->title))
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Title"  value="{{ $data->title }}">
					</div>
					@endif
					@if(!empty($data->content))
					<div class="form-group">
						<label for="content">Content</label>
						<textarea class="form-control summernote" rows="5" name="content">{{ $data->content }}</textarea>
					</div>
					@endif
					@if(!empty($data->value))
					<div class="form-group">
						<label for="value">Value</label>
						<input type="number" name="value" class="form-control" id="value"  value="{{ $data->value }}">
					</div>
					@endif
					@if(!empty($data->file))
					<div class="card">
						<div class="card-body">
							<label>Change Image File</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Upload</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="file" name="file">
									<label class="custom-file-label" for="file">Choose file</label>
								</div>
							</div>
						</div>
						<img class="card-img-top img-responsive" src="{{ asset($data->file) }}" alt="{{ $data->slug }}">
					</div>
					@endif
					

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
    $('.summernote').summernote({
        height: 350, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false // set focus to editable area after initializing summernote
    });

    
    </script>
@endpush