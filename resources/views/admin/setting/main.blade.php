@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Setting Master Data</h4>
				<h6 class="card-subtitle">Master data is the data content of a table that has been previously inputted.</h6>
				
				<div class="table-responsive">
					<table id="default_order_asc" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Slug</th>
								<th>Action</th>
								<th>Title</th>
								<th>Content</th>
								<th>Value</th>
								<th>File</th>
								<th>Is Active</th>
							</tr>
						</thead>
						<tbody>
							@foreach($setting as $item)
							<tr>
								<td>{{ $item->slug }}</td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="ti-settings"></i>
										</button>
										<div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
											<a class="dropdown-item" href="{{ route('admin.setting.update', $item->id) }}">
												<i class="ti-eye"></i> Open
											</a>

											<a class="dropdown-item" href="{{ route('admin.setting.update', $item->id) }}">
												<i class="ti-pencil-alt"></i> Edit
											</a>
										</div>
									</div>
								</td>
								<td class="{{ (empty($item->title) ? 'bg-warning' : '') }}">
									{{ $item->title }}
								</td>
								<td class="{{ (empty($item->content) ? 'bg-warning' : '') }}">
									{!! Str::limit($item->content, 50) !!}
								</td>
								<td class="{{ (empty($item->value) ? 'bg-warning' : '') }}">
									{{ $item->value }}
								</td>
								<td class="{{ (empty($item->file) ? 'bg-warning' : '') }}">
									@if(!empty($item->file))
									<img src="{{ asset($item->file ) }}" class="img-fluid">
									@endif
								</td>
								<td class="{{ (is_null($item->is_active) ? 'bg-warning' : (($item->is_active == true) ? 'bg-success' : 'bg-danger')) }}">
									{{ $item->get['status'] }}
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>Slug</th>
								<th>Action</th>
								<th>Title</th>
								<th>Content</th>
								<th>Value</th>
								<th>File</th>
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