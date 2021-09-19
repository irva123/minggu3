<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
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
							<img src="{{asset('template_simple_house/img/simple-house-logo.png')}}" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">@yield('header')</h1>
								<h6 class="tm-site-description">new restaurant modified by irva</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="about.html" class="tm-nav-link">Profil</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Selamat Datang di Simple House</h2>
				<p class="col-12 text-center">Kami menyediakan berbagai macam menu makanan yang menggugah selera dan memiliki kualitas yang terjamin</p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Pizza</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/01.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Buah dan Sayur</h4>
								<p class="tm-gallery-description">Menu ini terdiri dari alpukat, lemon, ceri, selada, wortel dan lain sebagainya</p>
								<p class="tm-gallery-price">Rp 35.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/02.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pizaa</h4>
								<p class="tm-gallery-description">pizza ini memiliki topping keju mozzarella, sosis, dan sayuran</p>
								<p class="tm-gallery-price">Rp. 126.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/03.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Sayur Roll </h4>
								<p class="tm-gallery-description">Menu ini berbahan dasar sayur yang didamping i dengan saos mayo </p>
								<p class="tm-gallery-price">Rp 30.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/04.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle</h4>
								<p class="tm-gallery-description">Menu main course ini tekturnya kenyal dan terdapat sayuran sebagai pelengkap</p>
								<p class="tm-gallery-price">Rp 25.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/05.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Bola Bola Daging</h4>
								<p class="tm-gallery-description">Berbahan dasar daging sapi yang kemudian di bakar dan terdapat sayur sebagai pelengkap</p>
								<p class="tm-gallery-price">Rp 52.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/06.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">French Toast</h4>
								<p class="tm-gallery-description">Berbahan dasar roti yang dilengkapi dengan buah bluberry, pisan serta madu</p>
								<p class="tm-gallery-price">$23.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/07.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Campur</h4>
								<p class="tm-gallery-description">Pada menu ini sayuran dan buah akan dicampur dan ditaburi dengan keju</p>
								<p class="tm-gallery-price">Rp 38.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/08.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Dimsum</h4>
								<p class="tm-gallery-description">Isian dari dimsum yaitu daging ayam dengan tekstur lembut</p>
								<p class="tm-gallery-price">Rp 15.000</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 1 -->
				
				<!-- gallery page 2 -->
				<div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/04.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle</h4>
								<p class="tm-gallery-description">Menu main course ini tekturnya kenyal dan terdapat sayuran sebagai pelengkap</p>
								<p class="tm-gallery-price">Rp 25.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/03.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Sayur Roll</h4>
								<p class="tm-gallery-description">Menu ini berbahan dasar sayur yang didamping i dengan saos mayo</p>
								<p class="tm-gallery-price">Rp 30.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/05.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Bola Bola Daging</h4>
								<p class="tm-gallery-description">Berbahan dasar daging sapi yang kemudian di bakar dan terdapat sayur sebagai pelengkap</p>
								<p class="tm-gallery-price">Rp 52.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/01.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Buah dan Sayur</h4>
								<p class="tm-gallery-description">Menu ini terdiri dari alpukat, lemon, ceri, selada, wortel dan lain sebagainya</p>
								<p class="tm-gallery-price">Rp 35.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/08.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Dimsum</h4>
								<p class="tm-gallery-description">Isian dari dimsum yaitu daging ayam dengan tekstur lembut</p>
								<p class="tm-gallery-price">Rp 15.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/07.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Campur</h4>
								<p class="tm-gallery-description">Pada menu ini sayuran dan buah akan dicampur dan ditaburi dengan keju</p>
								<p class="tm-gallery-price">Rp 38.000</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 2 -->
				
				<!-- gallery page 3 -->
				<div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/08.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Dimsum</h4>
								<p class="tm-gallery-description">Isian dari dimsum yaitu daging ayam dengan tekstur lembut</p>
								<p class="tm-gallery-price">Rp 15.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/07.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Campur</h4>
								<p class="tm-gallery-description">Pada menu ini sayuran dan buah akan dicampur dan ditaburi dengan keju</p>
								<p class="tm-gallery-price">Rp 38.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/06.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">French Toast</h4>
								<p class="tm-gallery-description">Berbahan dasar roti yang dilengkapi dengan buah bluberry, pisan serta madu</p>
								<p class="tm-gallery-price">$23.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/05.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Bola Bola Daging</h4>
								<p class="tm-gallery-description">Berbahan dasar daging sapi yang kemudian di bakar dan terdapat sayur sebagai pelengkap</p>
								<p class="tm-gallery-price">Rp 52.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/04.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle</h4>
								<p class="tm-gallery-description">Menu main course ini tekturnya kenyal dan terdapat sayuran sebagai pelengkap</p>
								<p class="tm-gallery-price">Rp 25.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('template_simple_house/img/gallery/03.jpg') }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Sayur Roll</h4>
								<p class="tm-gallery-description">Menu ini berbahan dasar sayur yang didamping i dengan saos mayo</p>
								<p class="tm-gallery-price">Rp 30.000</p>
							</figcaption>
						</figure>
					</article>

				</div> <!-- gallery page 3 -->
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="{{ asset('template_simple_house/img/img-01.jpg') }}" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Informasi Seputar Buah Alpukat</h4>
							<p class="tm-mb-45">Mengonsumsi buah alpukat dapat membantu mengurangi kadar kolesterol jahat serta mengandung serat dan nutrisi penting. jadi buah alpukat cocok nih buat kalian yang lagi diet.</p>
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
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>