<!doctype html>
<html lang="en">
    @php
        $regularRegistrationDate    = fSet('regular-registration-date')->content;
        $regularDate = explode('/', $regularRegistrationDate);
        $isRegularDate = cb()->between($regularDate[0], $regularDate[1]);

        $unggulanRegistrationDate    = fSet('unggulan-registration-date')->content;
        $unggulanDate = explode('/', $unggulanRegistrationDate);
        $isUnggulanDate = cb()->between($unggulanDate[0], $unggulanDate[1]);
    @endphp
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

	<!-- Identyty Page -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<meta property="og:url"                content="http://demo-web.my.id/ppdb" />
	<meta property="og:type"               content="platform" />
	<meta property="og:title"              content="{{ fSet('title')->title }} - Demo Web" />
	<meta property="og:description"        content="PPDB Online {{ fSet('schoolName')->title }} | Build by DityaDev" />
	<meta property="og:image"              content="{{ asset('lp/images/lp.png') }}" />

	<meta name="description" content="PPDB Online {{ fSet('schoolName')->title }}">
	<link href="{{ asset(fSet('favicon')->file) }}" rel="icon">
	<title>{{ fSet('title')->title }} - Demo Web</title>

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
								<h1 class="bold">Cetak formulir pendaftaran</h1>
								<h2 class="bold">{{ fSet('title')->title }} {{ date('Y') }}</h2>
								{{-- <p>Silahkan Isi data diri anda pada form berikut ini</p> --}}
							</div>
						</div>
					</div>
					<div class="card-body bg-white">
						<div class="container">
							<div class="container">
									@include('layouts.alert')

									<form method="GET" action="" enctype="multipart/form-data">
										@csrf
										<h5 class="color-yellow" style="padding-top: 0px">Data Diri</h5>
										<!-- <p style="color: #000000">Nama</p> -->
										<div class="row">
											<div class="col-xl-8 col-md-6">
												<div class="form-group">
													<input type="text" name="name" class="form-control required" placeholder="Nama Siswa" value="{{ isset($request['name']) ? $request['name'] : '' }}">
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="col-xl-4 col-md-6">
												<div class="form-group">
													<input type="text" name="date_birth" id="date_birth" class="form-control required form-field__input" placeholder="Tanggal Lahir" value="{{ isset($request['date_birth']) ? cb($request['date_birth'])->format('d-M-Y') : '' }}">
													<i class="icon-user"></i>
												</div>
											</div>
										</div>

										<div id="bottom-wizard" style="margin-top: 0px;">
											<button type="submit" name="process" class="submit">Cari</button>
										</div>
									</form>

                                    <div class="table-responsive pt-3" style="width: 100%">
                                        <table class="table table-bordered w-auto mw-100">
                                            <thead class="thead-light">
                                                <tr>
                                                    {{-- <th scope="col" class="text-center">B Ingris</th> --}}
                                                    <th>No Pendaftaran</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($registrations as $registrant)
                                                <tr>
                                                    <td class="text-dark">{{ $registrant->id_registrant }}</td>
                                                    <td class="text-dark">{{ $registrant->name }}</td>
                                                    <td class="text-dark">{{ cb($registrant->date_birth)->format('d M Y') }}</td>
                                                    <td class="text-dark">
                                                        <a href="{{ route('..download.formulir', $registrant->id_registrant) }}" class="btn btn-danger btn-sm">Download Formulir</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

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

    <script src="{{ asset('lp/js/calc-average.js') }}"></script>
	<script>
		const firstCalendar = MCDatepicker.create({
			el: '#date_birth'
		})

		$(document).ready(function() {
            let unggulan_lesson_requirement = '';

			// $('#mc-btn__ok').on('click', function() {
			// 	var date_birth = $('#date_birth').val();

            //     $.ajax({
            //         type     : "GET",
            //         url      : "{{ route('..age') }}",
            //         data	 : {
            //             date_birth: date_birth
            //         },
            //         success  : function (age) {
            //             console.log(age);

            //             if (age == 0) {
            //                 $('#date_birth').val('');
            //                 Swal.fire({
            //                     icon: 'error',
            //                     title: 'Oops...',
            //                     text: 'Umur anda tidak ada 1 tahun!',
            //                 });
            //             }else if (age > 21) {
            //                 $('#date_birth').val('');
            //                 Swal.fire({
            //                     icon: 'error',
            //                     title: 'Oops...',
            //                     text: 'Maaf Umur Anda Lebih Dari 21 Tahun!',
            //                 });
            //             }else if(age < 10){
            //                 $('#date_birth').val('');
            //                 Swal.fire({
            //                     icon: 'error',
            //                     title: 'Oops...',
            //                     text: 'Anda terlalu dini untuk masuk {{ fSet('schoolName')->title }}!',
            //                 });
            //             }

            //         }
            //     });
            // });
		});
	</script>
