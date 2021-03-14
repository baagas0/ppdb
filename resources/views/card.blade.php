<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Favicon icon -->
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset(fSet('favicon')->file) }}">
		<title>{{ config('app.name') }}</title>
		<style>
			* {
				box-sizing: border-box;
			}

			/* Create two equal columns that floats next to each other */
			.column {
				float: left;
				width: 50%;
				padding: 10px;
				height: 300px; /* Should be removed. Only for demonstration */
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
			}
		</style>
	</head>
</head>
<body>

	<div class="row" style="">
		<div class="col-md-12" style="border: 0px solid;border-radius: 5px; background-color: #22C6AB;background-image: url('http://ppdb.test/adm/images/kartu-peserta.png'); background-repeat: no-repeat;background-attachment: fixed;background-position: center;">
			<div style="padding: 10px">
				<div style="text-align: center;width: 100%;padding-top: 15px;padding-bottom: 15px">
					<img src="{{ asset(fSet('favicon')->file) }}">
					<h3 style="line-height: 0px">Kartu Peserta PPDB</h3>
					<h4 style="line-height: 0px">{{ fSet('schoolName')->title }}</h4>
				</div>
				<hr>
				<div class="row" style="text-align: center; ">
					<div class="column">
						<h4 style="text-decoration: underline;">{{ $data->id_registrant }}</h4>
						<p style="line-height: 10px">Nama: {{ $data->name }}</p>
						<p style="line-height: 10px">Tempat Lahir: {{ $data->place_birth}}</p>
						<p style="line-height: 10px">Tanggal Lahir: {{ $data->date_birth}}</p>
						<p style="line-height: 10px">Jenis Kelamin: {{ $data->get['gender']}}</p>
						<p style="line-height: 10px">Agama: {{ $data->region}}</p>
						<p style="line-height: 10px">No Ponsel: {{ $data->phone}}</p>
						<p style="line-height: 10px">Jurusan: {{ $data->majors}}</p>
					</div>
					<div class="column">
						<h4 style="text-decoration: underline;">{{ $data->id_registrant }}</h4>
						<p style="line-height: 10px">Asal Sekolah: {{ $data->school_origin}}</p>
						<p style="line-height: 10px">Nama Orang Tua: {{ $data->parent_name }}</p>
						<p style="line-height: 10px">Pekerjaan: {{ $data->parent_phone}}</p>
						<p style="line-height: 10px">Rata Rata B. Ingriss: {{ $data->average_bing}}</p>
						<p style="line-height: 10px">Rata Rata Matematika: {{ $data->average_mat}}</p>
						<p style="line-height: 10px">Rata Rata IPS: {{ $data->average_ips}}</p>
						<p style="line-height: 10px">Rata Rata IPA: {{ $data->average_ipa}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>