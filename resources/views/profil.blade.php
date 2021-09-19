<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="{{ asset('template_simple_house/css/templatemo-style.css') }}" rel="stylesheet" />
	<link href="{{ asset('template_simple_house/css/all.min.css') }}" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('template_simple_house/img/simple-house-01.jpg')}}">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="{{ asset('template_simple_house/img/simple-house-logo.png') }}" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">@yield('header')</h1>
								<h6 class="tm-site-description">new restaurant modified by irva</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.html" class="tm-nav-link">Home</a></li>
								<li class="tm-nav-li"><a href="about.html" class="tm-nav-link active">Profil</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">My Profil</h2>
			</header>

			<div class="tm-container-inner tm-persons">
				<div class="row">
					<article class="col-lg-6">
						<figure class="tm-person" >
							<img src="{{ asset('template_simple_house/img/Fotoku (2).jpeg') }}" alt="Image" height="200" width="200" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Irva Putri Finisha</h4>
								<p class="tm-person-title">Mahasiswa Politeknik Negeri Malang</p>
								<p class="tm-person-about">TTL: Mojokerto, 16 November 2001</p>
                                <p class="tm-person-about">Jurusan: Teknologi Informasi</p>
                                <p class="tm-person-about">Prodi: Manajemen Informatika</p>
                                <p class="tm-person-about">NIM: 2031710103</p>
								<div>
									<a href="https://fb.com" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
									<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
				</div>
			</div>
			
			<div class="tm-container-inner tm-history">
				<div class="row">
					<div class="col-12">
						<div class="tm-history-inner">
							<img src="{{ asset('template_simple_house/img/about-06.jpg') }}" alt="Image" class="img-fluid tm-history-img" />
							<div class="tm-history-text"> 
								<h4 class="tm-history-title">History of our restaurant</h4>
								<p class="tm-mb-p">Restaurant kami berdiri pada tanggal 19 September 2021 terletak di Jalan Kedungsari Mojokerto. Berawal ketika saya bermimpi ingin mempunyai restaurant yang simple dan memiliki menu lengkap mulai dari appetizer, maincourse dan dessert. Alhamdulillah akhirnya terwujud dan mulai berkembang dengan adanya website ini sehingga masyarakat banyak yang tau.</p>
                                <p class="tm-mb-p"> Selain itu, kami juga open order yang berkerja sama dengan E-Commers lainnya yang diharapkan memudahkan para customer dengan melakukan pemesanan di rumah saja. </p>
								<p class="tm-mb-p"> Terima Kasih :) </p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; @yield('footer')
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="{{ asset('template_simple_house/js/jquery.min.js') }}"></script>
	<script src="{{ asset('template_simple_house/js/parallax.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>