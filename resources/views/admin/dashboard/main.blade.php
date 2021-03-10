@extends('layouts.admin.app')
@section('content')
<div class="card-group">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<h3>{{ $rThisMonth }}</h3>
					<h6 class="card-subtitle">Pendaftar Bulan Ini</h6>
				</div>
				<div class="col-12">
					<div class="progress">
						<div class="progress-bar bg-success" role="progressbar" style="width: {{ percent($rThisMonth, $rAll) }}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
						aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<h3>{{ $rThisWeek }}</h3>
					<h6 class="card-subtitle">Pendaftar Minggu Ini</h6>
				</div>
				<div class="col-12">
					<div class="progress">
						<div class="progress-bar bg-info" role="progressbar" style="width: {{ percent($rThisWeek, $rAll) }}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
						aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<h3>{{ $rThisDay }}</h3>
					<h6 class="card-subtitle">Pendaftar Hari Ini</h6>
				</div>
				<div class="col-12">
					<div class="progress">
						<div class="progress-bar bg-danger" role="progressbar" style="width: {{ percent($rThisDay, $rAll) }}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
						aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<h3>{{ $rAll }}</h3>
					<h6 class="card-subtitle">Semua Pendaftar</h6>
				</div>
				<div class="col-12">
					<div class="progress">
						<div class="progress-bar bg-warning" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
						aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		<div class="card bg-primary text-white">
			<div class="card-body">
				<div class="d-flex">
					<div class="m-r-20 align-self-center">
						<h1 class="text-white">
							<i class="ti-pie-chart"></i>
						</h1>
					</div>
					<div>
						<h4 class="card-title">Register This Week</h4>
						<h6 class="text-white op-5">{{ Carbon\Carbon::now()->startOfWeek()->format('d F').' - '.Carbon\Carbon::now()->endOfWeek()->format('d F') }}</h6>
					</div>

				</div>

				<div class="row m-t-20 align-items-center">
					<div class="col-4">
						<h3 class="font-light text-white">{{ $rThisWeek }}</h3>
					</div>
					<div class="col-8 text-right">
						<div class="cThisWeek"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card bg-cyan text-white">
			<div class="card-body">
				<div class="d-flex">
					<div class="m-r-20 align-self-center">
						<h1 class="text-white">
							<i class="ti-pie-chart"></i>
						</h1>
					</div>
					<div>
						<h4 class="card-title">Register This Month</h4>
						<h6 class="text-white op-5">{{ date('F Y') }}</h6>
					</div>

				</div>

				<div class="row m-t-20 align-items-center">
					<div class="col-4">
						<h3 class="font-light text-white">{{ $rThisMonth }}</h3>
					</div>
					<div class="col-8 text-right">
						<div class="rThisMonth"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<h4 class="card-title">30 Days</h4>
						<h5 class="card-subtitle">Overview of Latest Month</h5>
					</div>
					<div class="ml-auto">
						<ul class="list-inline font-12 dl m-r-10">
							<li class="list-inline-item">
								<i class="fas fa-dot-circle text-info"></i> Ipad
							</li>
							<li class="list-inline-item">
								<i class="fas fa-dot-circle text-danger"></i> Iphone</li>
							</ul>
						</div>
					</div>
					<div id="product-sales1" style="height:305px"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@push('css')
<link href="{{  asset('adm/libs/morris.js/morris.css') }}" rel="stylesheet">
@endpush
@push('js')
<script src="{{  asset('adm/libs/raphael/raphael.min.js') }}"></script>
<script src="{{  asset('adm/libs/morris.js/morris.min.js') }}"></script>
{{-- <script src="{{  asset('adm/dist/js/pages/morris/morris-data.js') }}"></script> --}}
<script>

	$(function () {
    "use strict";
		var month = {{ json_encode($cMonth) }};
		$('.rThisMonth').sparkline(
			month,
			{
				type: 'line',
				width: '100%',
				height: '70',
				barWidth: '2',
				resize: true,
				fillColor: 'transparent',
				lineColor: 'rgba(255, 255, 255, 0.6)'
			}
		);

		var week = {{ json_encode($cWeek) }};
		$('.cThisWeek').sparkline(
			week,
			{
				type: 'bar',
				width: '100%',
				height: '70',
				barWidth: '2',
				resize: true,
				barSpacing: '6',
				barColor: 'rgba(255, 255, 255, 0.3)'
			}
		);

		var c30Days = {!! json_encode($c30Days) !!};
		console.log(c30Days);
		Morris.Area({
			element: 'product-sales1',
			data: c30Days,

			xkey: 'monthName',
			parseTime: false,
			ykeys: ['amount'],
			// xLabelFormat: function (x) {
			// 	var index = parseInt(x.src.month);
			// 	return monthNames[index];
			// },
			xLabels: "monthName",
			labels: ['Jumlah', 'Bulan'],

			pointSize: 2,
			fillOpacity: 0,
			pointStrokeColors: ['#ccc', '#4798e8', '#9675ce'],
			behaveLikeLine: true,
			gridLineColor: '#e0e0e0',
			lineWidth: 2,
			hideHover: 'auto',
			lineColors: ['#ccc', '#4798e8', '#9675ce'],
			resize: true
		});
	})
</script>
@endpush