<!DOCTYPE html>
<html lang="en">
@php
$regularRegistrationDate = fSet('regular-registration-date')->content;
$regularDate = explode('/', $regularRegistrationDate);

$unggulanRegistrationDate = fSet('unggulan-registration-date')->content;
$unggulanDate = explode('/', $unggulanRegistrationDate);
@endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PPDB Online | {{ fset('schoolName')->title }}</title>
    <base href="{{ asset('/') }}" />
    <link rel="shortcut icon" href="{{ asset('lp/images/logo/favicon.png') }}" type="image/png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> --}}

    <link href="{{ asset('lp/font-awesome-animation.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{ asset('lp/freelancer.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    {{-- <link href="{{ asset('lp/font-awesome.min.css') }}" rel="stylesheet" type="text/css"> --}}
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

    </style>
</head>
{{-- <style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        color: #666;
        text-shadow: 1px 1px 0px #fff;
        background: #eaebec;
        border: #ccc 1px solid;
    }

    table th {
        padding: 15px 35px;
        border-left: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
        background: #ededed;
    }

    table th:first-child {
        border-left: none;
    }

    table tr {
        text-align: center;
        padding-left: 20px;
    }

    table td:first-child {
        text-align: left;
        padding-left: 20px;
        border-left: 0;
    }

    table td {
        padding: 15px 35px;
        border-top: 1px solid #ffffff;
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        background: #fafafa;
        background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
        background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
    }

    table tr:last-child td {
        border-bottom: 0;
    }

    table tr:last-child td:first-child {
        -moz-border-radius-bottomleft: 3px;
        -webkit-border-bottom-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    table tr:last-child td:last-child {
        -moz-border-radius-bottomright: 3px;
        -webkit-border-bottom-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    table tr:hover td {
        background: #f2f2f2;
        background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
        background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
    }


    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

</style> --}}

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <img src="{{ asset('lp/images/logo/favicon.png') }}" alt="Logo" width="35"
                        style="position:absolute;margin-top:-10px;">
                    <span style="margin-left:45px;">&nbsp;PPDB Online</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    {{-- <li class="page-scroll">
                        <a href="#prosedur"><i class="fa fa-random"></i> Alur</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-bookmark"></i> Info</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#syarat"><i class="fa fa-briefcase"></i> Syarat</a>
                    </li> --}}

                    <li class="page-scroll">
                        <a href="{{ route('..registration') }}"><i class="fa fa-graduation-cap"></i> Daftar PPDB</a>
                    </li>

                    <li class="page-scroll">
                        <a href="{{ route('..cetak.formulir') }}"><i class="fa fa-id-card-o"></i> Cetak Formulir</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{ asset('lp/images/logo/favicon.png') }}"
                        style="margin-top:-15%;margin-bottom:-10px;" width="100">
                    <br><br>
                    <div class="intro-text">
                        <span class="name shad" style="font-size:35px; line-height: 35px;">
                            SELAMAT DATANG DI PPDB ONLINE <br> {{ fset('schoolName')->title }} </span>
                        <br>
                        <span>
                            <a href="{{ route('..registration') }}" class="btn btn-warning"
                                style="margin: 5px; border-radius: 6px;">
                                <i class="fa fa-list faa-pulse"></i> &nbsp;
                                <b>KLIK DAFTAR</b>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <style>
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;

        }

        .demo-table {
            border-collapse: collapse;
            font-size: 13px;
        }

        .demo-table th,
        .demo-table td {
            border-bottom: 1px solid #e1edff;
            border-left: 1px solid #e1edff;
            padding: 7px 17px;
        }

        .demo-table th,
        .demo-table td:last-child {
            border-right: 1px solid #e1edff;
        }

        .demo-table td:first-child {
            border-top: 1px solid #e1edff;
        }

        .demo-table td:last-child {
            border-bottom: 0;
        }

        caption {
            caption-side: top;
            margin-bottom: 10px;
        }

        /* Table Header */
        .demo-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .demo-table tbody td {
            color: #353535;
        }

        .demo-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }

        .demo-table tbody tr:hover th,
        .demo-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
            transition: all .2s;
        }

    </style>

    <!-- About Section -->
    <section id="prosedur" style="background: url(img/bg.png) repeat; padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Waktu Pendaftaran</h2>
                    <hr style="width: 150px;">
                </div>
            </div>
            <div class="row" style="margin-top: 15px">
                <div class="col-lg-6" style="margin-top:-10px;">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h5>Jalur Unggulan</h5>
                        </div>
                        <div class="panel-body">
                            <h3>
                                {{ cb($unggulanDate[0])->format('d M Y') }}
                                <span style="text-transform: full-size-kana">s/d</span>
                                {{ cb($unggulanDate[1])->format('d M Y') }}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top:-10px;">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h5>Jalur Regular</h5>
                        </div>
                        <div class="panel-body">
                            <h3>
                                {{ cb($regularDate[0])->format('d M Y') }}
                                <span style="text-transform: full-size-kana">s/d</span>
                                Kuota Terpenuhi
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="success" id="about" style="padding: 30px; border-top: 2px solid #fff;">
        <div class="container">
            <div class=" row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi PPDB Online</h2>
                    <hr style="width: 150px;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="text-align:justify; line-height: 22px;">
                    <p>{{ fset('schoolName')->title }} menyediakan PPDB secara <i>online</i> diharapkan proses PPDB
                        dapat berjalan cepat
                        dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran
                        calon siswa baru di masa pandemi Covid-19 ini dan terhambat oleh jarak jika datang ke madrasah
                        langsung, bisa mengakses website PPDB Online {{ fset('schoolName')->title }}. </p>
                </div>
                <div class="col-lg-4" style="text-align:justify; line-height: 22px;">
                    <p>Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai
                        dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon
                        siswa akan mendapat bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan
                        untuk proses selanjutnya.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                    <a href="{{ route('..registration') }}" class="btn btn-warning" style="border-radius: 5px;">
                        <i class="fa fa-home "></i> PPDB ONLINE
                    </a> &nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>


    <section id="syarat" style="background: url(img/bg.png) repeat; padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Syarat Pendaftaran</h2>
                    <hr style="width: 150px;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" style="margin-top:-10px;">
                    <div class="panel panel-default ">
                        <div class="panel-heading text-center">
                            <h5>Jalur Unggulan</h5>
                        </div>
                        <div class="panel-body">
                            <p>1. Usia maksimal 21 tahun pada 1 Juli {{ Date('Y') }}</p>
                            <p>2. Mengisi link di <a href="http://ppdb.manpati2.sch.id">http://ppdb.manpati2.sch.id</a>
                            </p>
                            <p>3. Mengunggah (scan) file raport</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Semester 3</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Semester 4</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Semester 5</p>
                            <p>4. Ketentuan nilai raport</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Nilai rata rata min 75 secara akumulatif</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- (Matematika, B.Ingris, IPA) Program IPA</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- (Matematika, B.Ingris, IPS) Program IPS</p>
                            <p>5. Mengunggah (scan) file piagam/prestasi <small>(bagi yang memiliki)</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top:-10px;">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h5>Jalur Regular</h5>
                        </div>
                        <div class="panel-body">
                            <p>1. Usia maksimal 21 tahun pada 1 Juli {{ Date('Y') }}</p>
                            <p>2. Mengisi link di <a href="http://ppdb.manpati2.sch.id">http://ppdb.manpati2.sch.id</a>
                            </p>
                            <p>3. Mengunggah (scan) file raport</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Semester 3</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Semester 4</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Semester 5</p>
                            <p>4. Mengunggah (scan) file piagam/prestasi <small>(bagi yang memiliki)</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="success" id="contact" style="padding: 30px; border-top: solid 2px #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Kontak Kami</h2>
                    <hr style="width: 150px;">
                </div>
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h4 align="center">PPDB Online &copy;
                            {{ fset('schoolName')->title }}<br>{{ fset('adress')->title }}</h4>
                        <p align="center" style="font-size: 14px;">
                            <span><b><i class="fa fa-phone-square">&nbsp;</i>
                                    {{ fset('phone')->title }}</b></span><br>
                            <span><b><i class="fa fa-envelope">&nbsp;</i> man2pati@yahoo.com</b></span><br>
                            <span><b><i class="fa fa-globe">&nbsp;</i> https://manpati2.sch.id</b></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        PPDB Online &copy; {{ fset('schoolName')->title }} - {{ date('Y') }} </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="https://api.whatsapp.com/send?phone={{ fset('mobile_phone')->content }}&text=" class="float"
        target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>


    <script src="https://use.fontawesome.com/0a33b3c123.js"></script>


    <!-- Theme JavaScript -->

    <script src="{{ asset('lp/js/freelancer.min.js') }}"></script>
</body>

</html>
