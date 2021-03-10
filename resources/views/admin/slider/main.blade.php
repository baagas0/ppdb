@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Slider Master Data</h4>
				<h6 class="card-subtitle">Master data is the data content of a table that has been previously inputted.</h6>

				<div class="table-responsive">
					<table id="default_order_desc" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Title</th>
								<th>Action</th>
								<th>Image</th>
								<th>Description</th>
								<th>is Link</th>
							</tr>
						</thead>
						<tbody>
							@foreach($slider as $item)
							<tr>
								<td>{{ $item->title }}</td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-settings"></i>
										</button>
										<div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
											<a class="dropdown-item" href="{{ route('admin.slider.update', $item->id) }}">
												<i class="ti-eye"></i> Open
											</a>

											<a class="dropdown-item" href="{{ route('admin.slider.update', $item->id) }}">
												<i class="ti-pencil-alt"></i> Edit
											</a>

											<a class="dropdown-item" href="{{ route('admin.slider.delete', $item->id) }}">
												<i class="ti-trash"></i> Delete
											</a>
										</div>
									</div>
								</td>
								<td><img src="{{ asset($item->image ) }}" class="img-fluid"></td>
								<td>{{ $item->description }}</td>
								<td>{{ $item->is_link }}</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>Title</th>
								<th>Action</th>
								<th>Image</th>
								<th>Description</th>
								<th>is Link</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('css')
<link href="{{  asset('adm/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endpush
@push('js')
<script src="{{  asset('adm/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{  asset('adm/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
@endpush