@yield('title')

@yield('metadata')
	<meta charset="UTF-8">
	<meta name="description" content="Tastebite">
	<meta name="keywords" content="Tastebite">
	<meta name="author" content="Tastebite">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="{{asset('public/tastebite/images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
	<link href="{{asset('public/tastebite/css/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" media="all">
	<link href="{{asset('public/tastebite/css/tastebite-styles.css')}}" rel="stylesheet" type="text/css" media="all">


	
	<header class="tstbite-header bg-white pt-3 pt-md-0">
		<div class="bg-lightest-gray py-3 header-topbar tstbite-svg mb-3">
			<div class="container">
				<div class="row align-items-center w-100">
					<div class="col-6 order-2 order-md-0">
						<div class="d-flex align-items-center justify-content-end justify-content-md-start">
							<a href="javascript:void(0);">
								<svg data-name="feather-icon/facebook" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
									<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
									<path d="M6.667,18.333H3.333A.834.834,0,0,1,2.5,17.5V11.667H.833A.835.835,0,0,1,0,10.833V7.5a.834.834,0,0,1,.833-.833H2.5V5a5.006,5.006,0,0,1,5-5H10a.834.834,0,0,1,.833.833V4.167A.834.834,0,0,1,10,5H7.5V6.667H10A.833.833,0,0,1,10.808,7.7l-.833,3.334a.831.831,0,0,1-.809.631H7.5V17.5A.834.834,0,0,1,6.667,18.333Zm-5-10V10H3.333a.835.835,0,0,1,.834.833v5.834H5.833V10.833A.834.834,0,0,1,6.667,10h1.85l.416-1.667H6.667A.834.834,0,0,1,5.833,7.5V5A1.669,1.669,0,0,1,7.5,3.333H9.166V1.666H7.5A3.337,3.337,0,0,0,4.167,5V7.5a.835.835,0,0,1-.834.833Z" transform="translate(5 0.833)" fill="#000000" />
								</svg>
							</a>
							<a href="#0" class="ml-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="20.004" height="20" viewBox="0 0 20.004 20">
									<g data-name="feather-icon/twitter" transform="translate(0.002)">
										<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
										<path d="M6.894,16.644A13.387,13.387,0,0,1,.431,14.9a.834.834,0,0,1,.4-1.562H.869c.118,0,.237.007.354.007a8.925,8.925,0,0,0,3.708-.813,8.043,8.043,0,0,1-3.59-4.4A9.651,9.651,0,0,1,1.329,2.55a8.74,8.74,0,0,1,.412-1.214A.833.833,0,0,1,3.184,1.2,8.049,8.049,0,0,0,8.914,4.574l.255.023,0-.2A4.567,4.567,0,0,1,16.78,1.162a8.239,8.239,0,0,0,1.909-1,.827.827,0,0,1,.478-.155.852.852,0,0,1,.663.326.811.811,0,0,1,.149.707,7.28,7.28,0,0,1-1.662,3.145c.012.138.019.276.019.408a13.328,13.328,0,0,1-.922,4.987A11.157,11.157,0,0,1,6.894,16.644ZM2.839,3.378a7.847,7.847,0,0,0,.086,4.238,6.928,6.928,0,0,0,4.081,4.131.833.833,0,0,1,.13,1.451,10.505,10.505,0,0,1-3.025,1.414,10.962,10.962,0,0,0,2.786.367,9.566,9.566,0,0,0,6.869-2.807,10.5,10.5,0,0,0,2.9-7.576,2.817,2.817,0,0,0-.052-.538.834.834,0,0,1,.233-.75,5.6,5.6,0,0,0,.515-.583l-.285.1-.288.091a.831.831,0,0,1-.868-.25,2.9,2.9,0,0,0-5.088,1.953V5.45a.829.829,0,0,1-.812.833c-.084,0-.169,0-.253,0A9.659,9.659,0,0,1,6,5.525,9.669,9.669,0,0,1,2.839,3.378Z" transform="translate(-0.002 1.658)" fill="#000000" />
									</g>
								</svg>
							</a>
							<a href="#0" class="ml-4">
								<svg data-name="feather-icon/instagram" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
									<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
									<path d="M5,18.333a5.005,5.005,0,0,1-5-5V5A5.006,5.006,0,0,1,5,0h8.333a5.005,5.005,0,0,1,5,5v8.333a5,5,0,0,1-5,5ZM1.667,5v8.333A3.337,3.337,0,0,0,5,16.667h8.333a3.337,3.337,0,0,0,3.333-3.333V5a3.337,3.337,0,0,0-3.333-3.334H5A3.338,3.338,0,0,0,1.667,5Zm4.59,7.076A4.164,4.164,0,1,1,9.2,13.3,4.161,4.161,0,0,1,6.256,12.076Zm.713-4.07a2.5,2.5,0,1,0,2.6-1.348A2.527,2.527,0,0,0,9.2,6.631,2.487,2.487,0,0,0,6.97,8.006Zm6.191-2.833a.833.833,0,1,1,.589.244A.834.834,0,0,1,13.161,5.173Z" transform="translate(0.833 0.833)" fill="#000000" />
								</svg>
							</a>
						</div>
					</div>
					<div class="col-6 text-md-right">
						<div class="fabrx-header-links">
							<a href="javascript:void(0);" class="search-link d-none d-md-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" width="26.667" height="26.667" viewBox="0 0 26.667 26.667">
									<path d="M24.39,26.276l-4.9-4.9a12.012,12.012,0,1,1,1.885-1.885l4.9,4.9a1.334,1.334,0,0,1-1.886,1.886ZM2.666,12a9.329,9.329,0,0,0,15.827,6.7,1.338,1.338,0,0,1,.206-.206A9.332,9.332,0,1,0,2.666,12Z" />
								</svg>
							</a>
							<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-outline-dark ml-0 ml-md-4">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content rounded-4 shadow-17 mb-4 mb-md-5">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<svg id="feather-icon_search" data-name="feather-icon/search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<rect id="Bounding_Box" data-name="Bounding Box" width="24" height="24" fill="#d8d8d8" opacity="0"></rect>
								<path id="Shape" d="M14.435,15.849,8.071,9.485,1.707,15.849A1,1,0,0,1,.293,14.435L6.657,8.071.293,1.707A1,1,0,0,1,1.707.293L8.071,6.657,14.435.293a1,1,0,0,1,1.414,1.415L9.485,8.071l6.364,6.364a1,1,0,1,1-1.414,1.414Z" transform="translate(3.929 3.929)"></path>
							</svg>
						</span>
					</button>
					<div class="modal-body">
						<h6 class="text-uppercase mb-4 pb-2">Login</h6>
						<form>
							<div class="form-group mt-md-3 pb-md-3">
								<div class="form-control-box">
									<input type="text" class="form-control" placeholder="Email">
									<span class="form-icon">
										<svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<rect data-name="Bounding Box" width="24" height="24" fill="rgba(255,255,255,0)"></rect>
											<path d="M3,18a3,3,0,0,1-3-3V3.01C0,3,0,2.99,0,2.98A3,3,0,0,1,3,0H19a3,3,0,0,1,3,2.968c0,.018,0,.036,0,.054V15a3,3,0,0,1-3,3ZM2,15a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V4.921l-8.427,5.9a1,1,0,0,1-1.147,0L2,4.921ZM11,8.78l8.895-6.226A1,1,0,0,0,19,2H3a1,1,0,0,0-.895.553Z" transform="translate(1 3)" fill="#7f7f7f"></path>
										</svg>
									</span>
								</div>
							</div>
							<div class="form-group mt-md-3 pb-md-3">
								<div class="form-control-box">
									<input type="password" class="form-control" placeholder="Password">
									<span class="form-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<rect data-name="Bounding Box" width="24" height="24" fill="rgba(255,255,255,0)"></rect>
											<path d="M3,22a3,3,0,0,1-3-3V12A3,3,0,0,1,3,9H4V6A6,6,0,0,1,16,6V9h1a3,3,0,0,1,3,3v7a3,3,0,0,1-3,3ZM2,12v7a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H3A1,1,0,0,0,2,12ZM14,9V6A4,4,0,1,0,6,6V9Z" transform="translate(2 1)" fill="#7f7f7f"></path>
										</svg>
									</span>
									<div class="text-right">
										<a href="#0" class="text-orange small font-weight-medium">Forgot Password?</a>
									</div>
								</div>
							</div>
							<button type="button" class="btn btn-lg btn-block btn-primary">Login</button>
						</form>
						<p class="text-center font-weight-light mt-4 pt-2">Or login with</p>
						<ul class="login-social list-unstyled">
							<li>
								<a href="javascript:void(0);" class="facebook">
									<img src="assets/images/icons/facebook2.svg" alt="Icon">
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="google">
									<img src="assets/images/icons/google2.svg" alt="Icon">
									<span>Google</span>
								</a>
							</li>
						</ul>
						<div class="text-center login-footer">
							<p>Don’t have an account? <a href="javascript:void(0)">Sign up</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="d-flex align-items-center py-1 py-md-4">
				<div class="fabrx-header-links d-inline-block d-md-none">
					<a href="javascript:void(0);" class="search-link">
						<svg xmlns="http://www.w3.org/2000/svg" width="26.667" height="26.667" viewBox="0 0 26.667 26.667">
							<path d="M24.39,26.276l-4.9-4.9a12.012,12.012,0,1,1,1.885-1.885l4.9,4.9a1.334,1.334,0,0,1-1.886,1.886ZM2.666,12a9.329,9.329,0,0,0,15.827,6.7,1.338,1.338,0,0,1,.206-.206A9.332,9.332,0,1,0,2.666,12Z" />
						</svg>
					</a>
				</div>
				<a class="navbar-brand m-auto text-center px-2" href="index.html">
					<img src="{{asset('public/tastebite/images/brands/brand2.svg')}}" alt="Tastebite" width="255">
				</a>
				<button class="navbar-toggler pr-0 d-inline-block d-md-none" type="button" data-toggle="collapse" data-target="#menu-4" aria-controls="menu-4" aria-expanded="false" aria-label="Toggle navigation">
					<svg data-name="Icon/Hamburger" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path data-name="Icon Color" d="M1.033,14a1.2,1.2,0,0,1-.409-.069.947.947,0,0,1-.337-.207,1.2,1.2,0,0,1-.216-.333,1.046,1.046,0,0,1-.072-.4A1.072,1.072,0,0,1,.072,12.6a.892.892,0,0,1,.216-.321.947.947,0,0,1,.337-.207A1.2,1.2,0,0,1,1.033,12H22.967a1.206,1.206,0,0,1,.409.069.935.935,0,0,1,.336.207.9.9,0,0,1,.217.321,1.072,1.072,0,0,1,.072.391,1.046,1.046,0,0,1-.072.4,1.206,1.206,0,0,1-.217.333.935.935,0,0,1-.336.207,1.206,1.206,0,0,1-.409.069Zm0-6a1.2,1.2,0,0,1-.409-.069.934.934,0,0,1-.337-.207,1.189,1.189,0,0,1-.216-.333A1.046,1.046,0,0,1,0,6.989,1.068,1.068,0,0,1,.072,6.6a.9.9,0,0,1,.216-.322.947.947,0,0,1,.337-.207A1.2,1.2,0,0,1,1.033,6H22.967a1.206,1.206,0,0,1,.409.068.935.935,0,0,1,.336.207.9.9,0,0,1,.217.322A1.068,1.068,0,0,1,24,6.989a1.046,1.046,0,0,1-.072.4,1.193,1.193,0,0,1-.217.333.923.923,0,0,1-.336.207A1.206,1.206,0,0,1,22.967,8Zm0-6a1.2,1.2,0,0,1-.409-.068.947.947,0,0,1-.337-.207,1.193,1.193,0,0,1-.216-.334A1.039,1.039,0,0,1,0,.988,1.068,1.068,0,0,1,.072.6.892.892,0,0,1,.288.276.934.934,0,0,1,.625.069,1.2,1.2,0,0,1,1.033,0H22.967a1.206,1.206,0,0,1,.409.069.923.923,0,0,1,.336.207A.9.9,0,0,1,23.928.6,1.068,1.068,0,0,1,24,.988a1.039,1.039,0,0,1-.072.4,1.2,1.2,0,0,1-.217.334.935.935,0,0,1-.336.207A1.206,1.206,0,0,1,22.967,2Z" transform="translate(0 5)" fill="#000"></path>
					</svg>
				</button>
			</div>
			<nav class="navbar navbar-expand-md has-header-inner px-0">
				<div class="collapse navbar-collapse" id="menu-4">
					<ul class="navbar-nav m-auto pt-3 pt-lg-0">
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" role="button" id="HomePage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span>Home Page</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" role="button" id="RecipePage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span>Recipe Page</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="9.333" height="5.333" viewBox="0 0 9.333 5.333">
									<path d="M1.138.2A.667.667,0,0,0,.2,1.138l4,4a.667.667,0,0,0,.943,0l4-4A.667.667,0,1,0,8.2.2L4.667,3.724Z" />
								</svg>
							</a>
							<div class="dropdown-menu" aria-labelledby="RecipePage">
								<a class="dropdown-item" href="recipe-full-width.html">Full Width</a>
								<a class="dropdown-item" href="recipe-sidebar.html">Sidebar</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" role="button" id="Pages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span>Pages</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="9.333" height="5.333" viewBox="0 0 9.333 5.333">
									<path d="M1.138.2A.667.667,0,0,0,.2,1.138l4,4a.667.667,0,0,0,.943,0l4-4A.667.667,0,1,0,8.2.2L4.667,3.724Z" />
								</svg>
							</a>
							<div class="dropdown-menu" aria-labelledby="Pages">
								<a class="dropdown-item" href="category.html">Category</a>
								<a class="dropdown-item" href="archive.html">Archive</a>
								<a class="dropdown-item" href="favorites.html">Favorites</a>
								<a class="dropdown-item" href="profile.html">Profile</a>
								<a class="dropdown-item" href="about.html">About</a>
								<a class="dropdown-item" href="blog.html">Blog Page</a>
								<a class="dropdown-item" href="search-result.html">Search Results</a>
							</div>
						</li>
 						<li class="nav-item">
							<a class="nav-link" href="elements.html">Elements</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://fabrx.co/tastebite-food-recipes-website-template/" target="_blank">Buy</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>

	@yield('content')

	@yield('footer')

	<footer class="tstbite-footer pt-3 pt-md-5 bg-lightest-gray">
		<div class="container">
			<div class="row pt-4 pb-0 pb-md-5">
				<div class="col-md-6">
					<div class="tastebite-footer-contnet pr-0 pr-lg-5 mr-0 mr-md-5">
						<a href="index.html">
							<img src="{{asset('public/tastebite/images/brands/brand4.svg')}}" alt="Tastebite">
						</a>
						<p class="mt-3 text-gray-300 pr-0 pr-lg-5 mr-0 mr-lg-4">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
					</div>
				</div>
				<div class="col-md-2">
					<h6 class="caption font-weight-medium mb-2 inter-font">
						<span>Tastebite</span>
						<span class="d-inline-block d-md-none float-right">
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 9.333 5.333">
								<path d="M1.138.2A.667.667,0,0,0,.2,1.138l4,4a.667.667,0,0,0,.943,0l4-4A.667.667,0,1,0,8.2.2L4.667,3.724Z" />
							</svg>
						</span>
					</h6>
					<ul>
						<li><a href="#0">About us</a></li>
						<li><a href="#0">Careers</a></li>
						<li><a href="#0">Contact us</a></li>
						<li><a href="#0">Feedback</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h6 class="caption font-weight-medium mb-2 inter-font">
						<span>Legal</span>
						<span class="d-inline-block d-md-none float-right">
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 9.333 5.333">
								<path d="M1.138.2A.667.667,0,0,0,.2,1.138l4,4a.667.667,0,0,0,.943,0l4-4A.667.667,0,1,0,8.2.2L4.667,3.724Z" />
							</svg>
						</span>
					</h6>
					<ul>
						<li><a href="#0">Terms</a></li>
						<li><a href="#0">Conditions</a></li>
						<li><a href="#0">Cookies</a></li>
						<li><a href="#0">Copyright</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h6 class="caption font-weight-medium mb-2 inter-font">
						<span>Follow</span>
						<span class="d-inline-block d-md-none float-right">
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 9.333 5.333">
								<path d="M1.138.2A.667.667,0,0,0,.2,1.138l4,4a.667.667,0,0,0,.943,0l4-4A.667.667,0,1,0,8.2.2L4.667,3.724Z" />
							</svg>
						</span>
					</h6>
					<ul>
						<li><a href="#0">Facebook</a></li>
						<li><a href="#0">Twitter</a></li>
						<li><a href="#0">Instagram</a></li>
						<li><a href="#0">Youtube</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<hr>
			<div class="row pb-4 pt-2 align-items-center">
				<div class="col-md-6 order-2 order-md-0">
					<p class="text-gray-300 small text-left mb-0">&copy; 2020 Tastebite - All rights reserved</p>
				</div>
				<div class="col-md-6">
					<div class="tstbite-social text-left text-md-right my-4 my-md-0">
						<a href="#0">
							<svg data-name="feather-icon/facebook" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
								<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
								<path d="M6.667,18.333H3.333A.834.834,0,0,1,2.5,17.5V11.667H.833A.835.835,0,0,1,0,10.833V7.5a.834.834,0,0,1,.833-.833H2.5V5a5.006,5.006,0,0,1,5-5H10a.834.834,0,0,1,.833.833V4.167A.834.834,0,0,1,10,5H7.5V6.667H10A.833.833,0,0,1,10.808,7.7l-.833,3.334a.831.831,0,0,1-.809.631H7.5V17.5A.834.834,0,0,1,6.667,18.333Zm-5-10V10H3.333a.835.835,0,0,1,.834.833v5.834H5.833V10.833A.834.834,0,0,1,6.667,10h1.85l.416-1.667H6.667A.834.834,0,0,1,5.833,7.5V5A1.669,1.669,0,0,1,7.5,3.333H9.166V1.666H7.5A3.337,3.337,0,0,0,4.167,5V7.5a.835.835,0,0,1-.834.833Z" transform="translate(5 0.833)" fill="#7f7f7f" />
							</svg>
						</a>
						<a href="#0">
							<svg data-name="feather-icon/instagram" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
								<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
								<path d="M5,18.333a5.005,5.005,0,0,1-5-5V5A5.006,5.006,0,0,1,5,0h8.333a5.005,5.005,0,0,1,5,5v8.333a5,5,0,0,1-5,5ZM1.667,5v8.333A3.337,3.337,0,0,0,5,16.667h8.333a3.337,3.337,0,0,0,3.333-3.333V5a3.337,3.337,0,0,0-3.333-3.334H5A3.338,3.338,0,0,0,1.667,5Zm4.59,7.076A4.164,4.164,0,1,1,9.2,13.3,4.161,4.161,0,0,1,6.256,12.076Zm.713-4.07a2.5,2.5,0,1,0,2.6-1.348A2.527,2.527,0,0,0,9.2,6.631,2.487,2.487,0,0,0,6.97,8.006Zm6.191-2.833a.833.833,0,1,1,.589.244A.834.834,0,0,1,13.161,5.173Z" transform="translate(0.833 0.833)" fill="#7f7f7f" />
							</svg>
						</a>
						<a href="#0">
							<svg xmlns="http://www.w3.org/2000/svg" width="20.004" height="20" viewBox="0 0 20.004 20">
								<g data-name="feather-icon/twitter" transform="translate(0.002)">
									<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
									<path d="M6.894,16.644A13.387,13.387,0,0,1,.431,14.9a.834.834,0,0,1,.4-1.562H.869c.118,0,.237.007.354.007a8.925,8.925,0,0,0,3.708-.813,8.043,8.043,0,0,1-3.59-4.4A9.651,9.651,0,0,1,1.329,2.55a8.74,8.74,0,0,1,.412-1.214A.833.833,0,0,1,3.184,1.2,8.049,8.049,0,0,0,8.914,4.574l.255.023,0-.2A4.567,4.567,0,0,1,16.78,1.162a8.239,8.239,0,0,0,1.909-1,.827.827,0,0,1,.478-.155.852.852,0,0,1,.663.326.811.811,0,0,1,.149.707,7.28,7.28,0,0,1-1.662,3.145c.012.138.019.276.019.408a13.328,13.328,0,0,1-.922,4.987A11.157,11.157,0,0,1,6.894,16.644ZM2.839,3.378a7.847,7.847,0,0,0,.086,4.238,6.928,6.928,0,0,0,4.081,4.131.833.833,0,0,1,.13,1.451,10.505,10.505,0,0,1-3.025,1.414,10.962,10.962,0,0,0,2.786.367,9.566,9.566,0,0,0,6.869-2.807,10.5,10.5,0,0,0,2.9-7.576,2.817,2.817,0,0,0-.052-.538.834.834,0,0,1,.233-.75,5.6,5.6,0,0,0,.515-.583l-.285.1-.288.091a.831.831,0,0,1-.868-.25,2.9,2.9,0,0,0-5.088,1.953V5.45a.829.829,0,0,1-.812.833c-.084,0-.169,0-.253,0A9.659,9.659,0,0,1,6,5.525,9.669,9.669,0,0,1,2.839,3.378Z" transform="translate(-0.002 1.658)" fill="#7f7f7f" />
								</g>
							</svg>
						</a>
						<a href="#0">
							<svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="20" viewBox="0 0 20.001 20">
				 				<g data-name="feather-icon/youtube" transform="translate(0)">
									<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
									<path d="M9.475,14.547,8.157,14.53c-.7-.013-1.348-.031-1.934-.053l-.592-.025a16.853,16.853,0,0,1-3.019-.316A3.189,3.189,0,0,1,.4,11.881,25.065,25.065,0,0,1,0,7.3,24.913,24.913,0,0,1,.408,2.681,3.168,3.168,0,0,1,2.618.411,17.815,17.815,0,0,1,5.8.089L6.887.049C7.536.029,8.205.016,8.876.008L9.8,0h.484L11.4.01c.584.007,1.173.02,1.748.036l.583.018a21.6,21.6,0,0,1,3.668.317A3.158,3.158,0,0,1,19.6,2.7,25.076,25.076,0,0,1,20,7.289a24.8,24.8,0,0,1-.408,4.58,3.164,3.164,0,0,1-2.209,2.269,16.78,16.78,0,0,1-3.014.315l-.592.025c-.586.023-1.237.041-1.934.053l-1.318.017ZM9.358,1.669c-.816.007-1.6.021-2.32.042l-1.109.04a18.192,18.192,0,0,0-2.868.266A1.468,1.468,0,0,0,2.037,3.031,23.455,23.455,0,0,0,1.667,7.3,23.669,23.669,0,0,0,2.018,11.5a1.488,1.488,0,0,0,1.031,1.024,18.758,18.758,0,0,0,2.977.273l.881.032c.374.011.793.022,1.282.031l1.3.017h1.026l1.3-.017c.488-.009.907-.019,1.282-.031l.881-.032.736-.035a14.14,14.14,0,0,0,2.228-.235,1.468,1.468,0,0,0,1.024-1.012,23.446,23.446,0,0,0,.37-4.232,23.255,23.255,0,0,0-.358-4.234,1.483,1.483,0,0,0-1.006-1.06,17.158,17.158,0,0,0-2.524-.232l-.776-.031c-.681-.023-1.453-.041-2.3-.053l-1.092-.009H9.8ZM7.545,10.616a.823.823,0,0,1-.254-.6V4.566a.835.835,0,0,1,.835-.834.822.822,0,0,1,.41.11l4.792,2.725a.833.833,0,0,1,0,1.449L8.537,10.74a.821.821,0,0,1-.411.111A.845.845,0,0,1,7.545,10.616ZM8.958,8.583l2.272-1.292L8.958,6Z" transform="translate(0 2.501)" fill="#7f7f7f" />
								</g>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{asset('public/tastebite/js/bootstrap.bundle.min.js')}}" type="ab869c7e5d30c31f035478ed-text/javascript"></script>
	<script src="{{asset('public/tastebite/js/html5.min.js')}}" type="ab869c7e5d30c31f035478ed-text/javascript"></script>
	<script src="{{asset('public/tastebite/js/sticky.min.js')}}" type="ab869c7e5d30c31f035478ed-text/javascript"></script>
	<script src="{{asset('public/tastebite/js/swiper-bundle.min.js')}}" type="ab869c7e5d30c31f035478ed-text/javascript"></script>
	<script src="{{asset('public/tastebite/js/masonry.min.js')}}" type="ab869c7e5d30c31f035478ed-text/javascript"></script>
	<script src="{{asset('public/tastebite/js/tastebite-scripts.js')}}" type="ab869c7e5d30c31f035478ed-text/javascript"></script>
	<script src="{{asset('public/tastebite/js/rocket-loader.min.js')}}" data-cf-settings="ab869c7e5d30c31f035478ed-|49" defer=""></script>

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>