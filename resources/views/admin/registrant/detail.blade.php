@extends('layouts.admin.app')
@section('content')
<div class="row">
	<!-- Column -->
	<div class="col-lg-4 col-xlg-3 col-md-5">
		<div class="card">
			<div class="card-body">
				<center class="m-t-30"> <img src="{{ asset($reg->avatar) }}" class="rounded-circle" width="150" />
					<h4 class="card-title m-t-10">{{ $reg->name }}</h4>
					<h6 class="card-subtitle">{{ $reg->school_origin }}</h6>
					<div class="row text-center justify-content-md-center">
						Jalur {{ $reg->lane }}
					</div>
				</center>
			</div>
			<div>
				<hr> </div>
				<div class="card-body"> <small class="text-muted">Birthday </small>
					<h6>{{ $reg->place_birth }}, {{ \Carbon\Carbon::parse($reg->date_birth)->format('d M Y') }}</h6>
					<small class="text-muted p-t-30 db">Phone</small>
					<h6>{{ $reg->phone }}</h6>
					<small class="text-muted p-t-30 db">Address</small>
					<h6>{{ $reg->adress }}</h6>
					<small class="text-muted p-t-30 db">Register Date</small>
					<h6>{{ $reg->created_at->format('d F Y') }}</h6>
					<h6>{{ $reg->created_at->format('H:i') }} WIB</h6>
				</div>
			</div>
		</div>
		<!-- Column -->
		<!-- Column -->
		<div class="col-lg-8 col-xlg-9 col-md-7">
			<div class="card">
				<!-- Tabs -->
				<ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Personal Data</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Academic Value</a>
					</li>
				</ul>
				<!-- Tabs -->
				<div class="tab-content" id="pills-tabContent">

					<div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
									<br>
									<p class="text-muted">{{ $reg->name }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r"> <strong>Phone</strong>
									<br>
									<p class="text-muted">{{ $reg->phone }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r"> <strong>Place of Birth</strong>
									<br>
									<p class="text-muted">{{ $reg->place_birth }}</p>
								</div>

								<div class="col-md-3 col-xs-6"> <strong>Date of Birth</strong>
									<br>
									<p class="text-muted">{{ $reg->date_birth }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r"> <strong>Gender</strong>
									<br>
									<p class="text-muted">{{ $reg->get['gender'] }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r"> <strong>Region</strong>
									<br>
									<p class="text-muted">{{ $reg->region }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r"> <strong>Parent Name</strong>
									<br>
									<p class="text-muted">{{ $reg->parent_name }}</p>
								</div>

								<div class="col-md-3 col-xs-6"> <strong>Parent Phone</strong>
									<br>
									<p class="text-muted">{{ $reg->parent_phone }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r"> <strong>School Origin</strong>
									<br>
									<p class="text-muted">{{ $reg->school_origin }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r"> <strong>Adress</strong>
									<br>
									<p class="text-muted">{{ $reg->adress }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r"> <strong>Majors</strong>
									<br>
									<p class="text-muted">{{ $reg->majors }}</p>
								</div>

								<div class="col-md-3 col-xs-6 b-r bg-warning"> <label>Register At</label>
									<br>
									<p class="text-white">{{ $reg->created_at->format('d F Y') }}</p>
								</div>

                                <div class="col-md-3 col-xs-6 b-r"> <strong>Kelas</strong>
									<br>
									<p class="text-muted">{{ $reg->lane }}</p>
								</div>
							</div>
							<hr>
							<p>Update Data</p>
							<hr>

							<form method="POST" action="{{ route('admin.registrant.update', $reg->id) }}">
								@csrf
								<div class="row">
									<div class="col-xl-12 col-md-6">
										<div class="form-group">
											<label>Nama Siswa</label>
											<input type="text" name="name" class="form-control required" placeholder="Nama Siswa" value="{{ $reg->name }}">
											<i class="icon-user"></i>
										</div>
									</div>
									<div class="col-xl-4 col-md-6">
										<div class="form-group">
											<label>Tempat Lahir</label>
											<input type="text" name="place_birth" class="form-control required" placeholder="Tempat Lahir" value="{{ $reg->place_birth }}">
											<i class="icon-user"></i>
										</div>
									</div>
									<div class="col-xl-4 col-md-6">
										<div class="form-group">
											<label>Tanggal Lahir</label>
											<input type="text" name="date_birth" class="form-control required" placeholder="Tanggal Lahir" value="{{ $reg->date_birth }}">
											<i class="icon-user"></i>
										</div>
									</div>
									<div class="col-xl-4 col-md-6">
										<label>Jenis Kelamin</label>
										<div class="form-group input-group">
											<select class="form-control custom-select required" name="gender">
												<option class="disable">Jenis Kelamin</option>
												<option value="L" {{ $reg->gender == 'L' ? 'selected' : '' }}>Laki Laki</option>
												<option value="P" {{ $reg->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
											</select>
											<!-- <i class="icon-user"></i> -->
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Agama</label>
											<input type="text" name="region" class="form-control required" placeholder="Agama" value="{{ $reg->region }}">
											<i class="icon-user"></i>
										</div>
									</div>
									<div class="col-md-6">
										<label>Phone</label>
										<div class="form-group input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">+62</span>
											</div>
											<input type="text" class="form-control" placeholder="Nomor Hp" aria-label="Username" aria-describedby="basic-addon1" name="phone" value="{{ $reg->phone }}">
										</div>
									</div>
									<div class="col-xl-6 col-md-6">
										<div class="form-group">
											<label>Parent Name</label>
											<input type="text" name="parent_name" class="form-control required" placeholder="Nama Orang Tua" value="{{ $reg->parent_name }}">
											<i class="icon-user"></i>
										</div>
									</div>
									<div class="col-md-6">
										<label>Parent Phone</label>
										<div class="form-group input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">+62</span>
											</div>
											<input type="text" name="parent_phone" class="form-control" placeholder="Nomor Hp Orang Tua" aria-label="Username" aria-describedby="basic-addon1" value="{{ $reg->parent_phone }}">
										</div>
									</div>
									<div class="col-xl-12 col-md-12">
										<div class="form-group">
											<label>Asal Sekolah</label>
											<input type="text" name="school_origin" class="form-control required" placeholder="Asal Sekolah" value="{{ $reg->school_origin }}">
											<i class="icon-user"></i>
										</div>
									</div>
									<div class="col-xl-12 col-md-12">
										<div class="form-group">
											<label>Alamat</label>
											<textarea name="adress" class="form-control notes" placeholder="Alamat Anda">{{ $reg->adress }}</textarea>
										</div>
									</div>
								</div>

								<h5 style="padding-top: 30px">Peminatan Jurusan</h5>
								<div class="row">
									<div class="col-xl-12 col-md-12">
										<div class="form-group input-group">
											<select name="majors" class="form-control custom-select required">
												<option class="disable">Pilih Jurusan</option>
												<option value="IPS" {{ $reg->majors == 'IPS' ? 'selected' : '' }}>IPS</option>
												<option value="IPA" {{ $reg->majors == 'IPA' ? 'selected' : '' }}>IPA</option>
											</select>
											<!-- <i class="icon-user"></i> -->
										</div>
									</div>
								</div>

                                <h5 style="padding-top: 30px">Jalur Masuk</h5>
								<div class="row">
									<div class="col-xl-12 col-md-12">
										<div class="form-group input-group">
											<select name="lane" class="form-control custom-select required">
												<option class="disable">Pilih Jalur</option>
												<option value="Regular" {{ $reg->lane == 'Regular' ? 'selected' : '' }}>Regular</option>
												<option value="Unggulan" {{ $reg->lane == 'Unggulan' ? 'selected' : '' }}>Unggulan</option>
											</select>
											<!-- <i class="icon-user"></i> -->
										</div>
									</div>
								</div>
								<button type="submit" class="btn waves-effect waves-light btn-primary float-right mb-3">Update Now</button>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
						<div class="card-body">
							<div class="table-responsive">
								<table id="default_order_desc" class="table table-striped table-bordered display" style="width:100%">
									<thead>
										<tr>
											<th>Mapel</th>
											<th>Semester 3</th>
											<th>Semester 4</th>
											<th>Semester 5</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												B Ingris
											</td>
											<td>{{ $reg->bing_sm3 }}</td>
											<td>{{ $reg->bing_sm4 }}</td>
											<td>{{ $reg->bing_sm5 }}</td>
										</tr>
										<tr>
											<td>
												Matematika
											</td>
											<td>{{ $reg->mat_sm3 }}</td>
											<td>{{ $reg->mat_sm4 }}</td>
											<td>{{ $reg->mat_sm5 }}</td>
										</tr>
										<tr>
											<td>
												IPS
											</td>
											<td>{{ $reg->ips_sm3 }}</td>
											<td>{{ $reg->ips_sm4 }}</td>
											<td>{{ $reg->ips_sm5 }}</td>
										</tr>
										<tr>
											<td>
												IPA
											</td>
											<td>{{ $reg->ipa_sm3 }}</td>
											<td>{{ $reg->ipa_sm4 }}</td>
											<td>{{ $reg->ipa_sm5 }}</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>Mapel</th>
											<th>Semester 3</th>
											<th>Semester 4</th>
											<th>Semester 5</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Column -->
	</div>
	@endsection
	@push('css')

	@endpush
	@push('js')

	@endpush
