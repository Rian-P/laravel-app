@extends('landing.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="software house, IT Konsultan, IT, Web Development, Mobile Apps Development, Startup, Android">
		<meta name="author" content="sainskertanusantara">
		<meta name="description" content="Sainskerta Nusantara, Innovating Technology to Deliver Happiness.">
		<meta name='og:image' content='images/home/ogg.png'>
		<!-- <link rel="apple-touch-icon" sizes="57x57" href="images/logo/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/logo/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/logo/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/logo/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/logo/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/logo/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/logo/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/logo/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/logo/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/logo/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/logo/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon-16x16.png"> -->
		<link rel="manifest" href="images/logo/manifest.json">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#fff">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#fff">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
		<title>Sainskerta Nusantara - Innovating Technology to Deliver Happiness</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/favicon-sainskerta.ico">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/esteh.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
		<!-- Hotjar Tracking Code for https://esteh.id -->
<script>
	(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:1665578,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
	})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157475869-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157475869-1');
</script>

	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- Preloader -->
			<!-- <section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="images/1.svg" alt=""></div>
							<div class="txt-loading">
								<span data-text-preloader="R" class="letters-loading">
									R
								</span>
								<span data-text-preloader="O" class="letters-loading">
									O
								</span>
								<span data-text-preloader="G" class="letters-loading">
									G
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="N" class="letters-loading">
									N
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section> -->


			


			<!-- 
			=============================================
				Inner Banner
			============================================== 
			-->
			<div class="inner-banner pos-r banner-bg bg-style-two" style="background-image: url(images/blog/bg.jpg);">
				<div class="opacity">
					<div class="container">
						<p>News</p>
						<h2>Our Blog</h2>
					</div>
				</div>
			</div> <!-- /.inner-banner -->

			
			<!-- 
			=============================================
				Our Blog
			============================================== 
			-->
			<div class="our-blog version-five pt-110 pb-150 md-pb-120">
				<div class="container">
					<ul class="isotop-menu-wrapper blog-filter-nav clearfix">
						<li class="is-checked" data-filter="*"><span>All</span></li>
						<li data-filter=".travel"><span>Travel</span></li>
						<li data-filter=".economy"><span>Economy</span></li>
						<li data-filter=".business"><span>Business</span></li>
						<li data-filter=".marketing"><span>Marketing</span></li>
						<li data-filter=".technology"><span>Technology</span></li>
					</ul>

					<div class="masnory-blog-wrapper">
						<div class="grid-sizer"></div>
						@foreach($blog as $item)
						<div class="isotop-item economy marketing">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="{{ $item->image }}" alt=""></div>
								<div class="post">
									<ul class="post-info">
										<li><a href="#">{{ $item->jobs }}.</a></li>
										<li><a href="#">{{ $item->date }}</a></li>
									</ul>
									<h4><a href="{{ route('blogdetail.index') }}">{{ $item->title }}</a></h4>
									<p>{{ $item->description }}</p>
									<a href="{{ route('blogdetail.index') }}" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
						@endforeach
						@foreach($blog as $item)
						<div class="isotop-item economy">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="images/blog/24.jpg" alt=""></div>
								<div class="post">
								<ul class="post-info">
										<li><a href="#">{{ $item->jobs }}.</a></li>
										<li><a href="#">{{ $item->date }}</a></li>
									</ul>
									<h4><a href="{{ route('blogdetail.index') }}">{{ $item->title }}</a></h4>
									<p>{{ $item->description }}</p>
									<a href="{{ route('blogdetail.index') }}" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
						@endforeach
						@foreach($blog as $item)
						<div class="isotop-item travel marketing">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="images/blog/25.jpg" alt=""></div>
								<div class="post">
								<ul class="post-info">
										<li><a href="#">{{ $item->jobs }}.</a></li>
										<li><a href="#">{{ $item->date }}</a></li>
									</ul>
									<h4><a href="{{ route('blogdetail.index') }}">{{ $item->title }}</a></h4>
									<p>{{ $item->description }}</p>
									<a href="{{ route('blogdetail.index') }}" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
						@endforeach
						@foreach($blog as $item)
						<div class="isotop-item travel economy technology">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="images/blog/26.jpg" alt=""></div>
								<div class="post">
								<ul class="post-info">
										<li><a href="#">{{ $item->jobs }}.</a></li>
										<li><a href="#">{{ $item->date }}</a></li>
									</ul>
									<h4><a href="{{ route('blogdetail.index') }}">{{ $item->title }}</a></h4>
									<p>{{ $item->description }}</p>
									<a href="{{ route('blogdetail.index') }}" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
						@endforeach
						<div class="isotop-item economy marketing">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="images/blog/27.jpg" alt=""></div>
								<div class="post">
									<ul class="post-info">
										<li><a href="#">Graphics Design .</a></li>
										<li><a href="#">23 July, 2018</a></li>
									</ul>
									<h4><a href="blog-detail.html">Challange yourself & win the future.</a></h4>
									<p>This response is important for our ability to learn from mistakes words…</p>
									<a href="blog-detail.html" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item travel business technology">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="images/blog/28.jpg" alt=""></div>
								<div class="post">
									<ul class="post-info">
										<li><a href="#">Graphics Design .</a></li>
										<li><a href="#">23 July, 2018</a></li>
									</ul>
									<h4><a href="blog-detail.html">Challange yourself & win the future.</a></h4>
									<p>This response is important for our ability to learn from mistakes words…</p>
									<a href="blog-detail.html" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item business marketing">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="images/blog/29.jpg" alt=""></div>
								<div class="post">
									<ul class="post-info">
										<li><a href="#">Graphics Design .</a></li>
										<li><a href="#">23 July, 2018</a></li>
									</ul>
									<h4><a href="blog-detail.html">Challange yourself & win the future.</a></h4>
									<p>This response is important for our ability to learn from mistakes words…</p>
									<a href="blog-detail.html" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item travel economy technology">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="images/blog/30.jpg" alt=""></div>
								<div class="post">
									<ul class="post-info">
										<li><a href="#">Graphics Design .</a></li>
										<li><a href="#">23 July, 2018</a></li>
									</ul>
									<h4><a href="blog-detail.html">Challange yourself & win the future.</a></h4>
									<p>This response is important for our ability to learn from mistakes words…</p>
									<a href="blog-detail.html" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item economy marketing">
							<div class="blog-post-block-two mb-75 md-mb-50">
								<div class="img-holder"><img src="images/blog/31.jpg" alt=""></div>
								<div class="post">
									<ul class="post-info">
										<li><a href="#">Graphics Design .</a></li>
										<li><a href="#">23 July, 2018</a></li>
									</ul>
									<h4><a href="blog-detail.html">Challange yourself & win the future.</a></h4>
									<p>This response is important for our ability to learn from mistakes words…</p>
									<a href="blog-detail.html" class="read-more inline-button-one">Continue Reading</a>
								</div> <!-- /.post -->
							</div> <!-- /.blog-post-block-two -->
						</div> <!-- /.isotop-item -->
					</div> <!-- /.masnory-blog-wrapper -->

			
					
					<div class="theme-pagination-one pt-15 text-center">
						<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li>....</li>
							<li><a href="#">Last</a></li>
							<li><a href="#"><i class="flaticon-next-1"></i></a></li>
						</ul>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.our-blog -->
			


	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	    <!-- menu  -->
		<script src="vendor/mega-menu/assets/js/custom.js"></script>
		<!-- AOS js -->
		<script src="vendor/aos-next/dist/aos.js"></script>
		<!-- WOW js -->
		<script src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- isotop -->
		<script src="vendor/isotope.pkgd.min.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
@endsection