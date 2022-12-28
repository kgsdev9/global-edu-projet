
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job | Formations | Etude</title>

        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap" rel="stylesheet">
        @livewireStyles
    </head>

    <body  style="font-family: 'Inter', sans-serif;">

		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light dark-text">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{asset('assets/img/logo.png')}}" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
								<li>
									<a href="#" data-toggle="modal" data-target="#login" class="theme-cl fs-lg">
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="dashboard-post-job.html" class="crs_yuo12 w-auto text-white theme-bg">
										<span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
									</a>
								</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
                                <li><a href="#">Nos Pages</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.html">Espace Emploi</a></li>
										<li><a href="home-2.html">Espace  Etudes  </a></li>
										<li><a href="home-3.html">Espace  Concours</a></li>
                                        <li><a href="home-3.html">Espace  CV</a></li>
										<li><a href="home-4.html">Espace Emploi</a></li>
										<li><a href="home-5.html">Espace Annonce </a></li>
										<li><a href="home-6.html">Espace Entreprise</a></li>
                                        <li><a href="home-6.html">Espace Formations</a></li>
										<li><a href="home-7.html">Espace Informatique</a></li>
										<li><a href="home-8.html">Espace Acutalités</a></li>
                                        <li><a href="home-8.html">Espace Economie</a></li>
                                        <li><a href="home-8.html">Espace Divertissement</a></li>
									</ul>
								</li>

								<li><a href="{{route('home.job')}}">Accueil</a>

								</li>

								<li><a href="{{route('job.locale')}}">Emploi En Cote d'ivoire</a>

								</li>

								<li><a href="{{route('category.index')}}">Emploi Par Categorie</a>

								</li>

								<li><a href="{{route('job.internationale')}}">Emploi International</a>

								</li>


							</ul>

							<ul class="nav-menu nav-menu-social align-to-right">
                                @guest
                                <li class="add-listing theme-bg">
									<a href="{{route('login')}}" data-toggle="modal"  data-target="#login">
										<i class="lni lni-circle-plus mr-1"></i> Compte
									</a>
								</li>
                                    @else
                                    <li class="add-listing theme-bg">
                                        <a href="{{route('dashboard')}}" >
                                            <i class="lni lni-circle-plus mr-1"></i> Mon Espace
                                        </a>
                                    </li>
                                @endguest

							</ul>
						</div>
					</nav>
				</div>
			</div>
                @yield('master')

			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-middle">
					<div class="container">
						<div class="row">

							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
								<div class="footer_widget">
									<img src="{{asset('assets/img/logo-light.png')}}" class="img-footer small mb-2" alt="" />

									<div class="address mt-2">
										3298 Grant Street Longview, New Texox<br>United Kingdom 75601
									</div>
									<div class="address mt-3">
										1-202-555-0106<br>support@workplex.com
									</div>
									<div class="address mt-2">
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-facebook-filled"></i></a></li>
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-twitter-filled"></i></a></li>
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-instagram-filled"></i></a></li>
											<li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-linkedin-original"></i></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">For Employers</h4>
									<ul class="footer-menu">
										<li><a href="#">Explore Candidates</a></li>
										<li><a href="#">Job Pricing</a></li>
										<li><a href="#">Submit Job</a></li>
										<li><a href="#">Shortlisted</a></li>
										<li><a href="#">Dashboard</a></li>
									</ul>
								</div>
							</div>

							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">For Candidates</h4>
									<ul class="footer-menu">
										<li><a href="#">Explore All Jobs</a></li>
										<li><a href="#">Browse Categories</a></li>
										<li><a href="#">Saved Jobs</a></li>
										<li><a href="#">Dashboard</a></li>
									</ul>
								</div>
							</div>

							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">About Company</h4>
									<ul class="footer-menu">
										<li><a href="#">Who We'r?</a></li>
										<li><a href="#">Our Mission</a></li>
										<li><a href="#">Our team</a></li>
										<li><a href="#">Packages</a></li>
										<li><a href="#">Dashboard</a></li>
									</ul>
								</div>
							</div>

							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Helpful Topics</h4>
									<ul class="footer-menu">
										<li><a href="#">Site Map</a></li>
										<li><a href="#">Security</a></li>
										<li><a href="#">Contact</a></li>
										<li><a href="#">FAQ's Page</a></li>
										<li><a href="#">Privacy</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="footer-bottom br-top">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2022 Workplex. Designd By <a href="https://themezhub.com">ThemezHub</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->

			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="loginmodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>

						<div class="modal-body p-5">
							<div class="text-center mb-4">
								<h2 class="m-0 ft-regular">Se Connecter</h2>
							</div>

							<form method="POST" action="{{route('login')}}">
                                @csrf
								<div class="form-group">
									<label>Adresse E-mail</label>
									<input type="email" class="form-control" placeholder="Votre E-mail*" name="email" value="{{old('email')}}">
								</div>

								<div class="form-group">
									<label>Mot de passe ?</label>
									<input type="password" class="form-control" placeholder="Password*" name="password">
								</div>

								<div class="form-group">
									<div class="d-flex align-items-center justify-content-between">

										<div class="eltio_k2">
											<a href="{{route('password.request')}}" class="theme-cl">mot de passe oublié?</a>
										</div>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Connexion</button>
								</div>

								<div class="form-group text-center mb-0">
									<p class="extra">Vous n'avez pas de compte ?<a href="{{route('register')}}" class="text-dark"> Inscrivez-vous !</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->

        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.js')}}"></script>
        <script src="{{asset('assets/js/slider-bg.js')}}"></script>
        <script src="{{asset('assets/js/smoothproducts.js')}}"></script>
        <script src="{{asset('assets/js/snackbar.min.js')}}"></script>
        <script src="{{asset('assets/js/jQuery.style.switcher.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
        @livewireScripts
	</body>
</html>
