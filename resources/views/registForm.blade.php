<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

	<!-- Identyty Page -->
	<link href="{{ asset(fSet('favicon')->file) }}" rel="icon">
	<title>{{ config('app.name') }}</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="css/menu.css" rel="stylesheet"> -->
	<link href="regist/css/style.css" rel="stylesheet">
	<link href="regist/css/vendors.css" rel="stylesheet">

	{{-- <link href="regist/js/datepicker/style.css" rel="stylesheet"> --}}
	<link href="regist/js/datepicker/mc-calendar.min.css" rel="stylesheet">
	<script src="regist/js/datepicker/mc-calendar.min.js"></script>

	<style type="text/css">
		@font-face {
			font-family:"segoe";
			src: url("asset/font/segoe/Segoe UI.ttf") format("truetype");
		}

		@font-face {
			font-family:"segoe-bold";
			src: url("asset/font/segoe/Segoe UI Bold.ttf") format("truetype");
		}

		body {
			
			font-family: 'Noto Sans', sans-serif;
		}

		.mw-100 {
			min-width:100%;
		}

		.bold {
			font-weight: 700;
		}
		.color-yellow{
			color: #eb9d2a
		}
		.card-header:first-child{
			border-radius:10px 10px 0px 0px !important;
		}
	</style>
</head>
<body style="background-color: #f9fafc">
	<div class="container" >
		<div class="row">
			<div class="col-md-12">
				<div class="card text-white bg-primary mb-3 mt-5" style="border: 2px solid #f9fafc;border-radius: 50px">
					<div class="card-header" style="{!! fSet('bg-color-form')->content !!}">
						<div class="row" style="padding: 30px 25px 30px 25px">
							<div class="col-md-2 media">
								<img src="{{ asset(fSet('favicon')->file) }}" class="img-responsive align-self-center float-left" alt="Logo" style="width: 100px;height: auto;">
							</div>
							<div class="col-md-9">
								<h1 class="bold">Form Pendaftaran Jalur Regular</h1>
								<h2 class="bold">PPDB MAN 2 Pati {{ date('Y') }}</h2>
								<p>Silahkan Isi data diri anda pada form berikut ini</p>
							</div>
						</div>
					</div>
					<div class="card-body bg-white">
						<div class="container">
							<div class="container">
								<!-- <div class="container"> -->
									@include('layouts.alert')

									<form method="POST" action="{{ route('..save.registration') }}">
										@csrf
										<h5 class="color-yellow" style="padding-top: 0px">Profil Siswa</h5>
										<!-- <p style="color: #000000">Nama</p> -->
										<div class="row">
											<div class="col-xl-12 col-md-6">
												<div class="form-group">
													<input type="text" name="name" class="form-control required" placeholder="Nama Siswa">
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="col-xl-4 col-md-6">
												<div class="form-group">
													<input type="text" name="place_birth" class="form-control required" placeholder="Tempat Lahir">
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="col-xl-4 col-md-6">
												<div class="form-group">
													<input type="text" name="date_birth" id="date_birth" class="form-control required form-field__input" placeholder="Tanggal Lahir">
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="col-xl-4 col-md-6">
												<div class="form-group input-group">
													<select class="form-control custom-select required" name="gender">
														<option class="disable">Jenis Kelamin</option>
														<option value="L">Laki Laki</option>
														<option value="P">Perempuan</option>
													</select>
													<!-- <i class="icon-user"></i> -->
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" name="region" class="form-control required" placeholder="Agama">
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">+62</span>
													</div>
													<input type="text" class="form-control" placeholder="Nomor Hp" aria-label="Username" aria-describedby="basic-addon1" name="phone">
												</div>
											</div>
											<div class="col-xl-6 col-md-12">
												<div class="form-group">
													<input type="text" name="parent_name" class="form-control required" placeholder="Nama Orang Tua">
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">+62</span>
													</div>
													<input type="text" name="parent_phone" class="form-control" placeholder="Nomor Hp Orang Tua" aria-label="Username" aria-describedby="basic-addon1">
												</div>
											</div>
											<div class="col-xl-12 col-md-12">
												<div class="form-group">
													<input type="text" name="school_origin" class="form-control required" placeholder="Asal Sekolah">
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="col-xl-12 col-md-12">
												<div class="form-group">
													<textarea name="adress" class="form-control notes" placeholder="Alamat Anda"></textarea>
												</div>
											</div>
										</div>

										<h5 class="color-yellow" style="padding-top: 30px">Peminatan Jurusan</h5>
										<div class="row">
											<div class="col-xl-12 col-md-12">
												<div class="form-group input-group">
													<select name="majors" class="form-control custom-select required">
														<option class="disable">Pilih Jurusan</option>
														<option value="IPS">IPS</option>
														<option value="IPA">IPA</option>
													</select>
													<!-- <i class="icon-user"></i> -->
												</div>
											</div>
										</div>

										<h5 class="color-yellow" style="padding-top: 30px">Nilai Raport</h5>

										<div class="row">
											<div class="col-xl-12 col-md-12">
												<div class="table-responsive" style="width: 100%">
													<table class="table w-auto mw-100">
														<thead class="thead-light">
															<tr>
																<th scope="col" class="text-center">B Ingris</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="row">
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="bing_sm3" class="form-control required" placeholder="Semester 3">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="bing_sm4" class="form-control required" placeholder="Semester 4">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="bing_sm5" class="form-control required" placeholder="Semester 5">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
													<table class="table w-auto mw-100">
														<thead class="thead-light">
															<tr>
																<th scope="col" class="text-center">Matematika</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="row">
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="mat_sm3" class="form-control required" placeholder="Semester 3">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="mat_sm4" class="form-control required" placeholder="Semester 4">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="mat_sm5" class="form-control required" placeholder="Semester 5">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
													<table class="table w-auto mw-100">
														<thead class="thead-light">
															<tr>
																<th scope="col" class="text-center">IPS</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="row">
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="ips_sm3" class="form-control required" placeholder="Semester 3">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="ips_sm4" class="form-control required" placeholder="Semester 4">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="ips_sm5" class="form-control required" placeholder="Semester 5">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
													<table class="table w-auto mw-100">
														<thead class="thead-light">
															<tr>
																<th scope="col" class="text-center">IPA</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="row">
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="ipa_sm3" class="form-control required" placeholder="Semester 3">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="ipa_sm4" class="form-control required" placeholder="Semester 4">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																		<div class="col-xl-4 col-md-12">
																			<div class="form-group">
																				<input type="text" name="ipa_sm5" class="form-control required" placeholder="Semester 5">
																				<i class="icon-user"></i>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xl-12 col-md-12">
												<div class="form-group terms" style="padding-top: 30px">
													<label class="container_check">Saya benar benar menginput nilai sesuai dengan raport saya
														<input type="checkbox" name="terms">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
										</div>

										<div id="bottom-wizard">
											<button type="submit" name="process" class="submit">Submit</button>
										</div>
									</form>
									<!-- </div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('lp/js/jquery-3.5.1.min.js') }}"></script>
	{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		const firstCalendar = MCDatepicker.create({ 
			el: '#date_birth'
		})

		$(document).ready(function() {
			$('#mc-btn__ok').on('click', function() {
				var date_birth = $('#date_birth').val();
				console.log(date_birth);

			$.ajax({
                type     : "GET",
                url      : "{{ route('..age') }}",
                data	 : {
                	date_birth: date_birth
                },
                success  : function (age) {
                    console.log(age);

                    if (age == 0) {
                    	$('#date_birth').val('');
                    	Swal.fire({
                    		icon: 'error',
                    		title: 'Oops...',
                    		text: 'Umur anda tidak ada 1 tahun!',
                    	});
                    }else if (age > 21) {
                    	$('#date_birth').val('');
                    	Swal.fire({
                    		icon: 'error',
                    		title: 'Oops...',
                    		text: 'Maaf Umur Anda Lebih Dari 21 Tahun!',
                    	});
                    }else if(age < 10){
                    	$('#date_birth').val('');
                    	Swal.fire({
                    		icon: 'error',
                    		title: 'Oops...',
                    		text: 'Anda terlalu dini untuk masuk {{ fSet('schoolName')->title }}!',
                    	});
                    }

                }
            });

});
		});
	</script>