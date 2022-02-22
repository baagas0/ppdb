<!doctype html>
<html lang="en">
@php
$regularRegistrationDate = fSet('regular-registration-date')->content;
$regularDate = explode('/', $regularRegistrationDate);
$isRegularDate = cb()->between($regularDate[0], $regularDate[1]);

$unggulanRegistrationDate = fSet('unggulan-registration-date')->content;
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

    <meta property="og:url" content="http://demo-web.my.id/ppdb" />
    <meta property="og:type" content="platform" />
    <meta property="og:title" content="{{ fSet('title')->title }} - Demo Web" />
    <meta property="og:description" content="PPDB Online {{ fSet('schoolName')->title }} | Build by DityaDev" />
    <meta property="og:image" content="{{ asset('lp/images/lp.png') }}" />

    <meta name="description" content="PPDB Online {{ fSet('schoolName')->title }}">
    <link href="{{ asset(fSet('favicon')->file) }}" rel="icon">
    <title>{{ fSet('title')->title }} - Demo Web</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css/menu.css" rel="stylesheet"> -->
    <link href="regist/css/style.css" rel="stylesheet">
    <link href="regist/css/vendors.css" rel="stylesheet">

    {{-- <link href="regist/js/datepicker/style.css" rel="stylesheet"> --}}
    <link href="regist/js/datepicker/mc-calendar.min.css" rel="stylesheet">
    <script src="regist/js/datepicker/mc-calendar.min.js"></script>

    <style type="text/css">
        @font-face {
            font-family: "segoe";
            src: url("asset/font/segoe/Segoe UI.ttf") format("truetype");
        }

        @font-face {
            font-family: "segoe-bold";
            src: url("asset/font/segoe/Segoe UI Bold.ttf") format("truetype");
        }

        body {

            font-family: 'Noto Sans', sans-serif;
        }

        .mw-100 {
            min-width: 100%;
        }

        .bold {
            font-weight: 700;
        }

        .color-yellow {
            color: #eb9d2a
        }

        .card-header:first-child {
            border-radius: 10px 10px 0px 0px !important;
        }

    </style>
</head>

<body style="background-color: #f9fafc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-primary mb-3 mt-5" style="border: 2px solid #f9fafc;border-radius: 50px">
                    <div class="card-header" style="{!! fSet('bg-color-form')->content !!}">
                        <div class="row" style="padding: 30px 25px 30px 25px">
                            <div class="col-md-2 media">
                                <img src="{{ asset(fSet('favicon')->file) }}"
                                    class="img-responsive align-self-center float-left" alt="Logo"
                                    style="width: 100px;height: auto;">
                            </div>
                            <div class="col-md-9">
                                <h1 class="bold">Form Pendaftaran Jalur
                                    {{ $isRegularDate && $isUnggulanDate? 'Regular & Unggulan': ($isRegularDate? 'Regular': ($isUnggulanDate? 'Unggulan': '(belum dibuka)')) }}
                                </h1>
                                <h2 class="bold">{{ fSet('title')->title }} {{ date('Y') }}</h2>
                                <p>Silahkan Isi data diri anda pada form berikut ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="container">
                            <div class="container">
                                <!-- <div class="container"> -->
                                @include('layouts.alert')

                                <form method="POST" action="{{ route('..save.registration') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="color-yellow" style="padding-top: 0px">Profil Siswa</h5>
                                    <!-- <p style="color: #000000">Nama</p> -->
                                    <div class="row">
                                        <div class="col-xl-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control required"
                                                    placeholder="Nama Siswa">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="place_birth" class="form-control required"
                                                    placeholder="Tempat Lahir">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="date_birth" id="date_birth"
                                                    class="form-control required form-field__input"
                                                    placeholder="Tanggal Lahir">
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
                                                <input type="text" name="region" class="form-control required"
                                                    placeholder="Agama">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Nomor Hp"
                                                    aria-label="Username" aria-describedby="basic-addon1" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="parent_name" class="form-control required"
                                                    placeholder="Nama Orang Tua">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                                </div>
                                                <input type="text" name="parent_phone" class="form-control"
                                                    placeholder="Nomor Hp Orang Tua" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="school_origin" class="form-control required"
                                                    placeholder="Asal Sekolah">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12">
                                            <div class="form-group">
                                                <textarea name="adress" class="form-control notes"
                                                    placeholder="Alamat Anda"></textarea>
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

                                    <h5 class="color-yellow" style="padding-top: 30px">Jalur Masuk</h5>
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12">
                                            <div class="form-group input-group">
                                                <select name="lane" class="form-control custom-select required">
                                                    <option class="disable">Pilih Jalur</option>
                                                    @if ($isRegularDate)
                                                        <option value="Regular">Regular</option>
                                                    @endif
                                                    @if ($isUnggulanDate)
                                                        <option value="Unggulan">Unggulan</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <label for="majors" class="text-danger" id="unggulan_requirement"
                                                hidden></label>
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
                                                                            <input type="text" name="bing_sm3"
                                                                                class="form-control required"
                                                                                placeholder="Semester 3">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="bing_sm4"
                                                                                class="form-control required"
                                                                                placeholder="Semester 4">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="bing_sm5"
                                                                                class="form-control required"
                                                                                placeholder="Semester 5">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-md-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <input type="text" name="average_bing"
                                                                                class="form-control required" disabled
                                                                                placeholder="Rata Rata">
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
                                                                            <input type="text" name="mat_sm3"
                                                                                class="form-control required"
                                                                                placeholder="Semester 3">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="mat_sm4"
                                                                                class="form-control required"
                                                                                placeholder="Semester 4">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="mat_sm5"
                                                                                class="form-control required"
                                                                                placeholder="Semester 5">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-md-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <input type="text" name="average_mat"
                                                                                class="form-control required" disabled
                                                                                placeholder="Rata Rata">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table w-auto mw-100" name="raport-majors-ips" hidden>
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
                                                                            <input type="text" name="ips_sm3"
                                                                                class="form-control required"
                                                                                placeholder="Semester 3">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="ips_sm4"
                                                                                class="form-control required"
                                                                                placeholder="Semester 4">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="ips_sm5"
                                                                                class="form-control required"
                                                                                placeholder="Semester 5">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-md-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <input type="text" name="average_ips"
                                                                                class="form-control required" disabled
                                                                                placeholder="Rata Rata">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table w-auto mw-100" name="raport-majors-ipa" hidden>
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
                                                                            <input type="text" name="ipa_sm3"
                                                                                class="form-control required"
                                                                                placeholder="Semester 3">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="ipa_sm4"
                                                                                class="form-control required"
                                                                                placeholder="Semester 4">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="ipa_sm5"
                                                                                class="form-control required"
                                                                                placeholder="Semester 5">
                                                                            <i class="icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-md-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <input type="text" name="average_ipa"
                                                                                class="form-control required" disabled
                                                                                placeholder="Rata Rata">
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

                                    <h5 class="color-yellow" style="padding-top: 30px">Upload File</h5>
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="avatar"
                                                        name="avatar">
                                                    <label class="custom-file-label" for="avatar">Foto Diri
                                                        <small>(png/jpg)</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                                            <div class="preview">
                                                <img src="" class="img-thumbnail" name="avatar_preview" hidden alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file_sm_1"
                                                        name="file_sm_1">
                                                    <label class="custom-file-label" for="file_sm_1">Scan Nilai
                                                        Semester 1 <small>(pdf)</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 mb-3">
                                            <div class="preview">
                                                <embed src="" height="300" hidden name="file_sm_1_preview"></embed>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file_sm_2"
                                                        name="file_sm_2">
                                                    <label class="custom-file-label" for="file_sm_2">Scan Nilai
                                                        Semester 2 <small>(pdf)</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 mb-3">
                                            <div class="preview">
                                                <embed src="" height="300" hidden name="file_sm_2_preview"></embed>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file_sm_3"
                                                        name="file_sm_3">
                                                    <label class="custom-file-label" for="file_sm_3">Scan Nilai
                                                        Semester 3 <small>(pdf)</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 mb-3">
                                            <div class="preview">
                                                <embed src="" height="300" hidden name="file_sm_3_preview"></embed>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file_piagam"
                                                        name="file_piagam">
                                                    <label class="custom-file-label" for="file_piagam">Piagam /
                                                        Sertifikat (jika ada) <small>(pdf)</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 mb-3">
                                            <div class="preview">
                                                <embed src="" height="300" hidden name="file_piagam_preview"></embed>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12 col-md-12">
                                            <div class="form-group terms" style="padding-top: 30px">
                                                <label class="container_check">Saya benar benar menginput nilai sesuai
                                                    dengan raport saya
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('lp/js/calc-average.js') }}"></script>
<script>
    const firstCalendar = MCDatepicker.create({
        el: '#date_birth'
    })

    $(document).ready(function() {
        let unggulan_lesson_requirement = '';

        $('#mc-btn__ok').on('click', function() {
            var date_birth = $('#date_birth').val();

            $.ajax({
                type: "GET",
                url: "{{ route('..age') }}",
                data: {
                    date_birth: date_birth
                },
                success: function(age) {
                    console.log(age);

                    if (age == 0) {
                        $('#date_birth').val('');
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Umur anda tidak ada 1 tahun!',
                        });
                    } else if (age > 21) {
                        $('#date_birth').val('');
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Maaf Umur Anda Lebih Dari 21 Tahun!',
                        });
                    } else if (age < 10) {
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

        $('select[name="majors"]').on('change', function() {
            let majors = $(this).val();
            let table_ips = $('table[name="raport-majors-ips"]');
            let table_ipa = $('table[name="raport-majors-ipa"]');

            if (majors == 'IPA') {
                unggulan_lesson_requirement = 'Matematika, IPA dan B Ingris';

                table_ips.attr('hidden', true);
                table_ipa.attr('hidden', false);
            } else if (majors == 'IPS') {
                unggulan_lesson_requirement = 'Matematika, IPS dan B Ingris';

                table_ips.attr('hidden', false);
                table_ipa.attr('hidden', true);
            }

            average_majors();
            $('#unggulan_requirement').text(
                `* Nilai rata rata ${unggulan_lesson_requirement} secara akumulatif minimal 75`);
        });

        $('select[name="lane"]').on('change', function() {
            let lane = $(this).val();
            $('#unggulan_requirement').attr('hidden', true);

            if (lane == 'Regular') {

            } else if (lane == 'Unggulan') {
                average_majors();
                $('#unggulan_requirement').attr('hidden', false);
            } else {
                $(this).change('');
                alert('Jalur masuk tidak diketahui!');
            }
        });

        $('input[name="avatar"]').on('change', function(e) {
            const file = URL.createObjectURL(e.target.files[0]);
            if (e.target.files[0].type == 'image/png') {
                const image = $('img[name="avatar_preview"]');

                image.attr('src', file);
                image.attr('hidden', false);
            } else {
                alert('Masukan Format Gambar!');
            }
        });

        $('input[name="file_sm_1"]').on('change', function(e) {
            const file = URL.createObjectURL(e.target.files[0]);
            if (e.target.files[0].type == 'application/pdf') {
                const embed = $('embed[name="file_sm_1_preview"]');

                embed.attr('src', file);
                embed.attr('hidden', false);
            } else {
                alert('Masukan Format File PDF!');
            }
        });

        $('input[name="file_sm_2"]').on('change', function(e) {
            const file = URL.createObjectURL(e.target.files[0]);
            if (e.target.files[0].type == 'application/pdf') {
                const embed = $('embed[name="file_sm_2_preview"]');

                embed.attr('src', file);
                embed.attr('hidden', false);
            } else {
                alert('Masukan Format File PDF!');
            }
        });

        $('input[name="file_sm_3"]').on('change', function(e) {
            const file = URL.createObjectURL(e.target.files[0]);
            if (e.target.files[0].type == 'application/pdf') {
                const embed = $('embed[name="file_sm_3_preview"]');

                embed.attr('src', file);
                embed.attr('hidden', false);
            } else {
                alert('Masukan Format File PDF!');
            }
        });

        $('input[name="file_piagam"]').on('change', function(e) {
            const file = URL.createObjectURL(e.target.files[0]);
            if (e.target.files[0].type == 'application/pdf') {
                const embed = $('embed[name="file_piagam_preview"]');

                embed.attr('src', file);
                embed.attr('hidden', false);
            } else {
                alert('Masukan Format File PDF!');
            }
        });
    });
</script>
