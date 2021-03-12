<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<meta property="og:url"                content="http://demo-web.my.id/ppdb" />
	<meta property="og:type"               content="platform" />
	<meta property="og:title"              content="{{ fSet('title')->title }}" />
	<meta property="og:description"        content="PPDB Online {{ fSet('schoolName')->title }} | Build by DityaDev" />
	<meta property="og:image"              content="{{ asset('lp/images/lp.png') }}" />

	<meta name="description" content="PPDB Online {{ fSet('schoolName')->title }}">
	<link href="{{ asset(fSet('favicon')->file) }}" rel="icon">
	<title>{{ fSet('title')->title }}</title>

	<link rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Roboto:wght@400;700&display=swap">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
	<link rel="stylesheet" href="{{ asset('lp/css/libraries.css') }}">
	<link rel="stylesheet" href="{{ asset('lp/css/style.css') }}">
</head>

<body>
	<div class="wrapper">
		{{-- <div class="preloader">
			<div class="sk-cube-grid">
				<span class="sk-cube"></span>
				<span class="sk-cube"></span>
				<span class="sk-cube"></span>
				<span class="sk-cube"></span>
				<span class="sk-cube"></span>
				<span class="sk-cube"></span>
				<span class="sk-cube"></span>
				<span class="sk-cube"></span>
				<span class="sk-cube"></span>
			</div>
		</div> --}}

		<header class="header header-transparent">
			<nav class="navbar navbar-expand-lg sticky-navbar">
				<div class="container">

					<a class="navbar-brand" href="index.html">
						<img src="{{ asset(fSet('logo')->file) }}" style="width: 300px;height: auto;" class="logo-light" alt="logo">
						<img src="{{ asset(fSet('logo')->file) }}" style="width: 300px;height: auto;" class="logo-dark" alt="logo">
					</a>
					<button class="navbar-toggler" type="button">
						<span class="menu-lines"><span></span></span>
					</button>
					<div class="collapse navbar-collapse" id="mainNavigation">
						<ul class="navbar-nav ml-auto">
							<li class="nav__item">
								<a href="contact-us.html" class="nav__item-link">Home</a>
							</li><!-- /.nav-item -->
							<li class="nav__item">
								<a href="{{ route('..registration') }}" class="nav__item-link">Daftar PPDB</a>
							</li><!-- /.nav-item -->
						</ul><!-- /.navbar-nav -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav><!-- /.navabr -->
		</header>
		<section class="slider">
			<div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
			data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>

			@foreach($slider as $item)
			<div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
				<div class="bg-img"><img src="{{ asset($item->image) }}" alt="slide img"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
							<div class="slide__content">
								<h2 class="slide__title">{{ $item->title }}</h2>
								<p class="slide__desc">{!! $item->description !!}</p>
								@if(!empty($item->is_link))
								<a href="{{ $item->is_link }}" class="btn btn__primary btn__icon mr-30">
									<span>{{ $item->linkTitle }}</span>
									<i class="icon-arrow-right"></i>
								</a>
								@endif

							</div><!-- /.slide-content -->
						</div><!-- /.col-xl-7 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.slide-item -->
			@endforeach

		</div><!-- /.carousel -->
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 pt-3 pb-3" style="background-color: #f87f52">
				<div class="text-center text-white container">
					<img src="{{ asset('lp/images/time-done.png') }}" class="img-responsive" alt="Time Done" style="width: 55px">
					<h6>Waktu Pendaftaran Kelas Unggulan</h6>
					<p>Pendaftaran : 8 Februari 2021 - 27 Februari 2021</p>

					<p>Seleksi/Test : 01 Maret 2021 Di MAN 2 Pati</p>

					<p>Pengumuman : 04 Maret 2021</p>

					<p>Dafter Ulang : 05 s.d 10 Maret 2021</p>

					<p>Waktu : 08:00 s.d 13:00 WIB di MAN 2 Pati</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 pt-3 pb-3" style="background-color: #3598db">
				<div class="text-center text-white container">

					<img src="{{ asset('lp/images/time.png') }}" class="img-responsive" alt="Time" style="width: 50px">
					<h6>Waktu Pendaftaran Kelas Regular</h6>
					<p>Pendaftaran : 17 Maret 2021</p>
					<p>Setelah Daftar Silahkan lagsung Daftar Ulang di MAN 2 Pati Pukul 08:00-13:00 WIB Karena Kuota yang terbatas</p>
				</div>
			</div>
		</div>
	</section><!-- /.slider -->

	 <!-- ========================
		About Layout 4
		=========================== -->
		<section class="about-layout4 pt-130 pb-0">
			<div class="container">
				<div class="row heading">
					<div class="col-12">
						<div class="d-flex align-items-center mb-20">
							<div class="divider divider-primary mr-30"></div>
							<h2 class="heading__subtitle mb-0">{{ fSet('title')->title }}</h2>
						</div>
					</div><!-- /.col-12 -->
					<div class="col-sm-12 col-md-12 col-lg-6">
						<h3 class="heading__title mb-40">Penerimaan Peserta Didik Baru Tahun {{ date('Y').'/'.(date('Y')+1).' '.fSet('schoolName')->title }}
						</h3>
					</div><!-- /.col-lg-6 -->
					<div class="col-sm-12 col-md-12 col-lg-6">
						{!! fSet('history')->content !!}
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="about__img">
							<img src="{{ asset(fSet('youtube-introduction')->file) }}" alt="about">
						</div><!-- /.about-img -->
						<div class="video__btn-wrapper">
							<a class="video__btn video__btn-white popup-video" href="{{ fSet('youtube-introduction')->title }}">
								<div class="video__player">
									<i class="fa fa-play"></i>
								</div>
								<span class="video__btn-title">Watch Our Presentation!</span>
							</a>
						</div>
					</div><!-- /.col-lg-6 -->
					<div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-between">
						<ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40">
							@foreach(getSet('feature') as $item)
							<li>{{ $item->title }}</li>
							@endforeach
						</ul>
						{{-- <div class="clients">
							<p class="text__link text-center mb-10">Trusted By The World's
								<a href="it-solutions.html" class="btn btn__link btn__primary btn__underlined">Best Organizations</a>
							</p>
							<div class="slick-carousel"
							data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
							<div class="client">
								<img src="{{ asset('lp/images/clients/1.png') }}" alt="client">
								<img src="{{ asset('lp/images/clients/1.png') }}" alt="client">
							</div><!-- /.client -->
							<div class="client">
								<img src="{{ asset('lp/images/clients/2.png') }}" alt="client">
								<img src="{{ asset('lp/images/clients/2.png') }}" alt="client">
							</div><!-- /.client -->
							<div class="client">
								<img src="{{ asset('lp/images/clients/3.png') }}" alt="client">
								<img src="{{ asset('lp/images/clients/3.png') }}" alt="client">
							</div><!-- /.client -->
							<div class="client">
								<img src="{{ asset('lp/images/clients/4.png') }}" alt="client">
								<img src="{{ asset('lp/images/clients/4.png') }}" alt="client">
							</div><!-- /.client -->
							<div class="client">
								<img src="{{ asset('lp/images/clients/5.png') }}" alt="client">
								<img src="{{ asset('lp/images/clients/5.png') }}" alt="client">
							</div><!-- /.client -->
							<div class="client">
								<img src="{{ asset('lp/images/clients/6.png') }}" alt="client">
								<img src="{{ asset('lp/images/clients/6.png') }}" alt="client">
							</div><!-- /.client -->
							<div class="client">
								<img src="{{ asset('lp/images/clients/7.png') }}" alt="client">
								<img src="{{ asset('lp/images/clients/7.png') }}" alt="client">
							</div><!-- /.client -->
						</div> --}}<!-- /.carousel -->
					</div>
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.About Layout 4 -->

	 <!-- ======================
	 Features Layout 1
	 ========================= -->
	 <section class="features-layout1 pb-0">
	 	<div class="features-bg">
	 		<div class="bg-img"><img src="{{ asset('lp/images/backgrounds/14.jpg') }}" alt="background"></div>
	 	</div>
	 	<div class="container">
	 		<div class="row heading heading-light mb-30">
	 			<div class="col-sm-12 col-md-12 col-lg-5">
	 				<div class="divider divider-primary mb-20"></div>
	 				<h3 class="heading__title">{{ fSet('title')->title }}</h3>
	 				{!! fSet('history')->content !!}
	 			</div><!-- /col-lg-5 -->
	 			<div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
	 				<div class="row">
	 					<div class="col-sm-6">
	 						{{-- <p class="heading__desc">As one of the world's largest ITService Providers with over 120 engineers and
	 						IT support staff are ready to help.</p> --}}
	 						<a href="{{ route('..registration') }}" class="btn btn__primary btn__primary-style2 btn__icon mt-30 mb-30">
	 							<span>Pendaftaran</span>
	 							<i class="icon-arrow-right"></i>
	 						</a>
	 					</div><!-- /.col-sm-6 -->
	 					<div class="col-sm-6">
	 						
	 					</div><!-- /.col-sm-6 -->
	 				</div><!-- /.row -->
	 			</div><!-- /.col-lg-6 -->
	 		</div><!-- /.row -->
	 		<div class="row mt-40">
	 			<div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-between">
	 				<div class="row row-no-gutter read-note">
	 					
	 				</div><!-- /.row -->
	 				<div class="row">
	 					<div class="col-sm-6">
	 						<p class="mb-30 font-weight-bold sub__desc">Anda tidak perlu untuk datang ke sekolahan untuk mendaftar. Cukup klik tombol pendaftaran dan isi data diri anda.</p>
	 						<a href="{{ route('..registration') }}" class="btn btn__primary btn__bordered btn__icon mb-30">
	 							<span>Pendaftaran</span>
	 							<i class="icon-arrow-right"></i>
	 						</a>
	 					</div><!-- /.col-sm-6 -->
	 					<div class="col-sm-6">
	 						<ul class="list-items list-unstyled mb-30">
	 							@foreach(getSet('feature') as $item)
	 							<li>{{ $item->title }}</li>
	 							@if($loop->iteration == 4)
	 							@break
	 							@endif
	 							@endforeach
	 						</ul>
	 					</div><!-- /.col-sm-6 -->
	 				</div><!-- /.row -->
	 			</div><!-- /.col-lg-6 -->
	 			<div class="col-sm-12 col-md-12 col-lg-6">
	 				<img src="{{ asset(fSet('feature-image1')->file) }}" alt="{{ fSet('feature-image1')->slug  }}">
	 			</div><!-- /.col-lg-6 -->
	 		</div><!-- /.row -->
	 	</div><!-- /.container -->
	 </section><!-- /.Features Layout 1 -->

	 <!-- =========================
		 Banner layout 5
		 =========================== -->
		 <section class="banner-layout5 banner-layout5-sticky bg-parallax pt-130 pb-0">
		 	<div class="bg-img"><img src="{{ asset(fSet('feature-image2')->file) }}" alt="background"></div>
		 	<div class="container-fluid">
		 		<div class="row">
		 			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 d-flex flex-column justify-content-between pb-80">
		 				<div class="heading heading-light mb-50 sticky-top">
		 					<div class="divider divider-white"></div>
		 					<h3 class="heading__title mb-30">{{ fSet('title')->title }}
		 					</h3>
		 					<p>{!! fSet('history')->content !!}</p>
		 				</div><!-- /.heading -->
		 				<div class="row">
		 					<div class="col-sm-6">
		 						<div class="contact-info">
		 							<div class="contact__icon"><i class="icon-map-marker"></i></div>
		 							<ul class="contact__list list-unstyled">
		 								<li>{{ fSet('adress')->title }}</li>
		 							</ul>
		 						</div><!-- /.contact-item-->
		 					</div><!-- /.col-sm-6 -->
		 					<div class="col-sm-6">
		 						<div class="contact-item">
		 							<div class="contact__icon"><i class="icon-mail"></i></div>
		 							<ul class="contact__list list-unstyled">
		 								<li><a href="mailto:{{ fSet('email')->title }}">Email: {{ fSet('email')->title }}</a></li>
		 								<li>Phone: {{ fSet('phone')->title }}</li>
		 							</ul>
		 						</div><!-- /.contact-item-->
		 					</div><!-- /.col-sm-6 -->
		 					<div class="col-sm-6"></div><!-- /.col-sm-6 -->
		 				</div><!-- /.row-->
		 			</div><!-- /.col-xl-6 -->
		 			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1">
		 				<div class="banner__content">
		 					<div class="bg-img"><img src="{{ asset('lp/images/backgrounds/3.png') }}" alt="background"></div>
		 					<div class="scroll__icon"><i class="icon-mouse"></i></div>
		 					<div class="row heading heading-light">
		 						<div class="col-sm-6">
		 							<h3 class="heading__title mb-30">{{ (fSet('studentCount')->value + fSet('alumniCount')->value) }} Interaksi Siswa di {{ fSet('schoolName')->title }}</h3>
		 						</div><!-- /.col-sm-6 -->
		 						<div class="col-sm-6">
		 							<p class="heading__desc mb-20">{!! fSet('history')->content !!}</p>
		 							<a href="{{ asset(fSet('brochure')->file) }}" target="__blank" class="btn btn__white btn__bordered btn__xl btn__icon">
		 								<span>Download Brochure</span>
		 								<i class="icon-arrow-right"></i>
		 							</a>
		 						</div><!-- /.col-sm-6 -->
		 					</div><!-- /.row -->
		 					<div class="row counters-wrapper counters-light mt-70">
		 						<!-- counter item #1 -->
		 						<div class="col-sm-4">
		 							<div class="counter-item">
		 								<h4 class="counter">{{ fSet('studentCount')->value }}</h4>
		 								<p class="counter__desc">Jumlah Siswa</p>
		 							</div><!-- /.counter-item -->
		 						</div><!-- /.col-sm-4 -->
		 						<!-- counter item #2 -->
		 						<div class="col-sm-4">
		 							<div class="counter-item">
		 								<h4 class="counter">{{ fSet('alumniCount')->value }}</h4>
		 								<p class="counter__desc">Jumlah Alumni</p>
		 							</div><!-- /.counter-item -->
		 						</div><!-- /.col-sm-4 -->
		 						<!-- counter item #3 -->
		 						<div class="col-sm-4">
		 							<div class="counter-item">
		 								<h4 class="counter">{{ fSet('teacherCount')->value }}</h4>
		 								<p class="counter__desc">Jumlah Guru</p>
		 							</div><!-- /.counter-item -->
		 						</div><!-- /.col-sm-4 -->
		 					</div><!-- /.row -->
		 				</div><!-- /.banner__content -->
		 				<div class="semi-banner bg-gray">
		 					<div class="row row-no-gutter">
		 						<div class="col-sm-6">
		 							<div class="semi-banner__content">
		 								<div class="heading">
		 									<h3 class="heading__title mb-30">Data Diri <br> Kepala Sekolah</h3>
		 									<p class="heading_desc mb-30">{!! fSet('head-master')->content !!}</p>
		 								</div><!-- /.heading -->
		 								<img src="{{ asset(fSet('head-master-signature')->file) }}" alt="singnture">
		 							</div>
		 						</div><!-- /.col-sm-6 -->
		 						<div class="col-sm-6 d-none d-md-block">
		 							<img src="{{ asset(fSet('head-master')->file) }}" alt="banner" class="w-100">
		 						</div><!-- /.col-sm-6 -->
		 					</div><!-- /.row -->
		 				</div><!-- /.semi-banner -->
		 				{{-- <div class="semi-banner bg-gray">
		 					<div class="row row-no-gutter">
		 						<div class="col-sm-6">
		 							<div class="cta-banner bg-primary">
		 								<div class="cta__icon color-white"><i class="icon-developer"></i></div>
		 								<h4 class="cta__title color-white">Since 1999</h4>
		 								<p class="cta__desc color-white mb-25">Provide users with appropriate view and access to
		 									requests,
		 									problems, changes,
		 								contracts, solutions, and reports.</p>
		 								<a href="#" class="btn btn__link btn__white btn__icon px-0">
		 									<span>Find Your Solution</span> <i class="icon-arrow-right"></i>
		 								</a>
		 							</div>
		 						</div><!-- /.col-sm-6 -->
		 						<div class="col-sm-6">
		 							<div class="semi-banner__content pb-0">
		 								<div class="heading">
		 									<h3 class="heading__title mb-30">We have decades of work experience!</h3>
		 								</div><!-- /.heading -->
		 								<h4 class="banner__subheading">Consulting & Insights</h4>
		 								<p class="heading_desc">Our objective insights steer you toward the right decisions on issues that
		 								matter.</p>
		 								<h4 class="banner__subheading">Research & Advisory</h4>
		 								<p class="heading_desc">Our combination of research, problem solving and hands-on experience.</p>
		 								<h4 class="banner__subheading">Strategic Advice</h4>
		 								<p class="heading_desc">Tools to help turn strategy into decisions, and execute for measurable
		 								results.</p>
		 							</div>
		 						</div><!-- /.col-sm-6 -->
		 					</div><!-- /.row -->
		 				</div> --}}<!-- /.semi-banner -->
		 				{{-- <section class="awards bg-secondary">
		 					<div class="row heading heading-light mb-60">
		 						<div class="col-sm-6">
		 							<h3 class="heading__title">Our awards and recognitions</h3>
		 						</div><!-- /col-lg-5 -->
		 						<div class="col-sm-6">
		 							<p class="heading__desc">Trusted by the world's best organizations, for 21 years and running, it has
		 								been delivering smiles to hundreds of IT advisors, developers, users, and business owners.
		 							</p>
		 						</div><!-- /.col-lg-5 -->
		 					</div><!-- /.row -->
		 					<div class="row awards-wrapper">
		 						<div class="col-sm-12">
		 							<div class="awards-carousel-wrapper">
		 								<div class="slick-carousel"
		 								data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": false, "dots": true,"autoplay": true, "autoplaySpeed": 4000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
		 								<!-- fancybox item #1 -->
		 								<div class="fancybox-item">
		 									<div class="fancybox__icon-img">
		 										<img src="{{ asset('lp/images/awards/icons/1.png') }}" alt="icon">
		 									</div><!-- /.fancybox__icon-img -->
		 									<div class="fancybox__content">
		 										<h4 class="fancybox__title">CSS Design Award</h4>
		 										<p class="fancybox__desc">A web design & development award platform for digital folk,
		 											UI/UX
		 											peeps
		 											and inspiring leaders of the web.
		 										</p>
		 									</div><!-- /.fancybox-content -->
		 								</div><!-- /.fancybox-item -->
		 								<!-- fancybox item #2 -->
		 								<div class="fancybox-item">
		 									<span class="pinned-ribbon"></span>
		 									<div class="fancybox__icon-img">
		 										<img src="{{ asset('lp/images/awards/icons/2.png') }}" alt="icon">
		 									</div><!-- /.fancybox__icon-img -->
		 									<div class="fancybox__content">
		 										<h4 class="fancybox__title">W3 Design Award</h4>
		 										<p class="fancybox__desc">Awards celebrates digital by honoring outstanding Websites, Web
		 											Marketing, Video, Sites, Apps & Social content.
		 										</p>
		 									</div><!-- /.fancybox-content -->
		 								</div><!-- /.fancybox-item -->
		 								<!-- fancybox item #3 -->
		 								<div class="fancybox-item">
		 									<div class="fancybox__icon-img">
		 										<img src="{{ asset('lp/images/awards/icons/3.png') }}" alt="icon">
		 									</div><!-- /.fancybox__icon-img -->
		 									<div class="fancybox__content">
		 										<h4 class="fancybox__title">The FWA Award</h4>
		 										<p class="fancybox__desc">Showcasing innovation every day since 2000, our mission is to
		 											showcase
		 											cutting edge creativity, regardless
		 										</p>
		 									</div><!-- /.fancybox-content -->
		 								</div><!-- /.fancybox-item -->
		 								<!-- fancybox item #4 -->
		 								<div class="fancybox-item">
		 									<div class="fancybox__icon-img">
		 										<img src="{{ asset('lp/images/awards/icons/3.png') }}" alt="icon">
		 									</div><!-- /.fancybox__icon-img -->
		 									<div class="fancybox__content">
		 										<h4 class="fancybox__title">WWW Awards</h4>
		 										<p class="fancybox__desc">The awards that recognize the talent and effort of the best web
		 											designers, developers and agencies in the world.
		 										</p>
		 									</div><!-- /.fancybox-content -->
		 								</div><!-- /.fancybox-item -->
		 							</div><!-- /.carousel  -->
		 						</div><!-- /.awards-carousel-wrapper -->
		 					</div><!-- /.col-12 -->
		 				</div> --}}<!-- /.row -->
		 			</section>
		 		</div><!-- /.col-xl-4 -->
		 	</div><!-- /.row -->
		 </div><!-- /.container -->
		</section><!-- /.Banner layout 5 -->

	 <!-- ========================
		Footer
		========================== -->
		<footer class="footer footer-light">
			<div class="footer-secondary">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-sm-12 col-md-5 col-lg-5">
							<div class="footer__copyrights">
								<span class="fz-14">&copy; <a href="https://api.whatsapp.com/send/?phone=6289506373551&text&app_absent=0" target="__blank">2021 Ditya Dev</a>, All Rights Reserved. With Love by</span>
								<a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a>
							</div>
						</div><!-- /.col-lg-6 -->
						<div class="col-sm-12 col-md-2 col-lg-2 text-center">
							<button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
						</div><!-- /.col-lg-2 -->
						<div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
							<ul class="social-icons list-unstyled mb-0 mr-30">
								<li><a href="mail:{{ fSet('email')->title }}"><i class="far fa-envelope"></i></a></li>
								<li><a href="telp:{{ fSet('phone')->title }}"><i class="fas fa-phone-alt"></i></a></li>
							</ul><!-- /.social-icons -->
							<div>
								<a href="{{ route('..registration') }}" class="btn btn__white btn__download mr-20">
									<span>Pendaftaran</span>
									<i class="icon-arrow-right"></i>
								</a>
							</div>
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.footer-secondary -->
		</footer><!-- /.Footer -->
	</div><!-- /.wrapper -->

	<script src="{{ asset('lp/js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('lp/js/plugins.js') }}"></script>
	<script src="{{ asset('lp/js/main.js') }}"></script>
</body>

</html>