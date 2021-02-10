@extends('front.layout')

@section('title')
	<title>Tastebite</title>
@stop

@section('metadata')
	<meta charset="UTF-8">
	<meta name="description" content="Tastebite">
	<meta name="keywords" content="Tastebite">
	<meta name="author" content="Tastebite">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@stop
	

@section('content')	
	
	<div class="tstbite-search">
		<div class="container">
			<div class="input-group search-box">
				<input type="text" name="Search" placeholder="Search" class="form-control" id="Search">
				<button type="button">
					<img src="{{asset('public/tastebite/images/icons/close.svg')}}" alt="img">
				</button>
			</div>
			<div class="search-results" id="SearchList">
				<div class="tstbite-search-list">
					<a href="#0">
						<figure>
							<img src="{{asset('public/tastebite/images/menus/menu111.png')}}" class="rounded-circle" alt="Menu">
						</figure>
						<div class="tstbite-search-name">
							<strong class="small">Cake</strong>
							<span class="tiny">Category</span>
						</div>
					</a>
				</div>
				<div class="tstbite-search-list">
					<a href="#0">
						<figure>
							<img src="{{asset('public/tastebite/images/menus/menu112.jpg')}}" class="rounded-2" alt="Menu">
						</figure>
						<div class="tstbite-search-name">
							<strong class="small">Black Forest Birthday Cake</strong>
						</div>
					</a>
				</div>
				<div class="tstbite-search-list">
					<a href="#0">
						<figure>
							<img src="{{asset('public/tastebite/images/menus/menu113.jpg')}}" class="rounded-2" alt="Menu">
						</figure>
						<div class="tstbite-search-name">
							<strong class="small">Double Thick Layered Sponge Cake</strong>
						</div>
					</a>
				</div>
				<div class="tstbite-search-list">
					<a href="#0">
						<figure>
							<img src="{{asset('public/tastebite/images/menus/menu114.jpg')}}" class="rounded-2" alt="Menu">
						</figure>
						<div class="tstbite-search-name">
							<strong class="small">Cranberry Macaroon Ice cream Cake</strong>
						</div>
					</a>
				</div>
				<div class="tstbite-search-list">
					<a href="#0">
						<figure><img src="{{asset('public/tastebite/images/menus/menu115.jpg')}}" class="rounded-2" alt="Menu"></figure>
						<div class="tstbite-search-name">
							<strong class="small">Almond Cinnamon Sponge Cake</strong>
						</div>
					</a>
				</div>
				<div class="tstbite-search-list">
					<a href="#0">
						<figure><img src="{{asset('public/tastebite/images/menus/menu116.jpg')}}" class="rounded-2" alt="Menu"></figure>
						<div class="tstbite-search-name">
							<strong class="small">Four Mini Birthday Cupcakes</strong>
						</div>
					</a>
				</div>
				<div class="text-center py-4">
					<a href="#0" class="btn btn-sm btn-outline-dark px-4 py-2">See all 343 results</a>
				</div>
			</div>
		</div>
	</div>



	<section class="tstbite-components tstbite-overlay mt-0 mt-md-4 mb-4">
		<div class="swiper-container single-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="card border-0 text-white">
						<img src="{{asset('public/tastebite/images/menus/menu90.jpg')}}" class="w-100" alt="Menu">
						<div class="card-img-overlay gradient-black-trans">
							<div class="container tstbite-container">
								<strong>
									<svg data-name="feather-icon/trending-up" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
										<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
										<path d="M.244,11.423a.834.834,0,0,1,0-1.178L6.494,3.994a.834.834,0,0,1,1.178,0L11.25,7.571l5.9-5.9H14.167a.833.833,0,1,1,0-1.667h5A.833.833,0,0,1,20,.833v5a.834.834,0,0,1-1.667,0V2.845L11.839,9.339a.834.834,0,0,1-1.179,0L7.083,5.761l-5.66,5.661a.834.834,0,0,1-1.179,0Z" transform="translate(0 4.167)" fill="#fff" />
									</svg>
									<span class="ml-2 caption font-weight-medium">85% would make this again</span>
								</strong>
								<h4 class="my-0 my-md-2 h1">Cinnamon Apple <br>Loaded Tart</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card border-0 text-white">
						<img src="{{asset('public/tastebite/images/menus/menu90.jpg')}}" class="w-100" alt="Menu">
							<div class="card-img-overlay gradient-black-trans">
								<div class="container tstbite-container">
									<strong>
										<svg data-name="feather-icon/trending-up" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
											<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
											<path d="M.244,11.423a.834.834,0,0,1,0-1.178L6.494,3.994a.834.834,0,0,1,1.178,0L11.25,7.571l5.9-5.9H14.167a.833.833,0,1,1,0-1.667h5A.833.833,0,0,1,20,.833v5a.834.834,0,0,1-1.667,0V2.845L11.839,9.339a.834.834,0,0,1-1.179,0L7.083,5.761l-5.66,5.661a.834.834,0,0,1-1.179,0Z" transform="translate(0 4.167)" fill="#fff" />
										</svg>
										<span class="ml-2 caption font-weight-medium">85% would make this again</span>
									</strong>
									<h4 class="my-0 my-md-2 h1">Cinnamon Apple <br>Loaded Tart</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card border-0 text-white">
							<img src="{{asset('public/tastebite/images/menus/menu90.jpg')}}" class="w-100" alt="Menu">
							<div class="card-img-overlay gradient-black-trans">
								<div class="container tstbite-container">
									<strong>
										<svg data-name="feather-icon/trending-up" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
											<rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
											<path d="M.244,11.423a.834.834,0,0,1,0-1.178L6.494,3.994a.834.834,0,0,1,1.178,0L11.25,7.571l5.9-5.9H14.167a.833.833,0,1,1,0-1.667h5A.833.833,0,0,1,20,.833v5a.834.834,0,0,1-1.667,0V2.845L11.839,9.339a.834.834,0,0,1-1.179,0L7.083,5.761l-5.66,5.661a.834.834,0,0,1-1.179,0Z" transform="translate(0 4.167)" fill="#fff" />
										</svg>
										<span class="ml-2 caption font-weight-medium">85% would make this again</span>
									</strong>
									<h4 class="my-0 my-md-2 h1">Cinnamon Apple <br>Loaded Tart</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>	
		</section>
		
		<style type="text/css" id="slider-css"></style>
		<section class="tstbite-components my-4 my-md-5">
			<div class="container">
				<h5 class="py-3 mb-0">Popular Categories</h5>
				<div class="spe-cor">
			        <div class="row">
			            <div id="slider-1" class="carousel carousel-by-item slide" data-ride="carousel">
			                <div class="carousel-inner" role="listbox">
			                    <div class="carousel-item active">
			                        <div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu8.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Pasta</a>
											</figcaption>
										</figure>
									</div>
			                    </div>
			                    <div class="carousel-item">
			                        <div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu9.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Pasta</a>
											</figcaption>
										</figure>
									</div>
			                    </div>
			                    <div class="carousel-item">
			                        <div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu10.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Pasta</a>
											</figcaption>
										</figure>
									</div>
			                    </div>
			                    <div class="carousel-item">
			                        <div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu11.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Pasta</a>
											</figcaption>
										</figure>
									</div>
			                    </div>
			                    <div class="carousel-item">
			                        <div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu12.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Pasta</a>
											</figcaption>
										</figure>
									</div>
			                    </div>
			                    <div class="carousel-item">
			                        <div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu13.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Pasta</a>
											</figcaption>
										</figure>
									</div>
			                    </div>
			                </div>
			                <a class="carousel-control-prev" href="#slider-1" role="button" data-slide="prev">
			                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			                </a>
			                <a class="carousel-control-next" href="#slider-1" role="button" data-slide="next">
			                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			                </a>
			            </div>
			        </div>
				</div>
			</div>
		</section>


		<div class="container">
			<!-- <section class="tstbite-components my-4 my-md-5">
				<h5 class="py-3 mb-0">Popular Categories</h5>
				<div class="spe-cor">
					<div class="row">
						<div id="slider-1" class="carousel carousel-by-item slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu8.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Pasta</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu9.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Pizza</a>
											</figcaption>
										</figure>
					 				</div>
					 			</div>
					 			<div class="carousel-item">
									<div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu10.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Vegan</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu11.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Desserts</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu12.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Smoothies</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-lg-2 col-md-4 col-4">
										<figure class="my-3 text-center tstbite-card">
											<a href="category.html" class="tstbite-animation stretched-link rounded-circle">
												<img src="{{asset('public/tastebite/images/menus/menu13.png')}}" class="rounded-circle" alt="Menu">
											</a>
											<figcaption class="mt-2">
												<a href="category.html" class="tstbite-category-title">Breakfast</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<a class="carousel-control-prev" href="#slider-1" role="button" data-slide="prev">
				                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				                    <span class="sr-only">Previous</span>
				                </a>
				                <a class="carousel-control-next" href="#slider-1" role="button" data-slide="next">
				                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				                    <span class="sr-only">Next</span>
				                </a>
							</div>
						</div>
					</div>
				</div>	
			</section> -->

			<section class="tstbite-components my-4">
				<h6 class="my-3">Super Delicious</h6>
				<div class="row">
					<div class="col-xl-4 col-md-6">
						<figure class="my-3 tstbite-card">
							<a href="#0" class="tstbite-animation rounded-top-6">
								<img src="{{asset('public/tastebite/images/menus/menu84.jpg')}}" class="w-100" alt="Menu">
							</a>
							<figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
								<div class="text-black pt-3 pb-4 px-4">
									<div class="w-100 float-left">
										<div class="float-left">
											<div class="fabrx-ratings has-rating rating">
												<input type="radio" id="radio1" name="rate1" value="1" checked="checked">
												<label for="radio1" class="custom-starboxes"></label>
												<input type="radio" id="radio2" name="rate1" value="2">
												<label for="radio2" class="custom-starboxes"></label>
												<input type="radio" id="radio3" name="rate1" value="3">
												<label for="radio3" class="custom-starboxes"></label>
												<input type="radio" id="radio4" name="rate1" value="4">
												<label for="radio4" class="custom-starboxes"></label>
												<input type="radio" id="radio5" name="rate1" value="5">
												<label for="radio5" class="custom-starboxes"></label>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0" class="text-black">Delicious Fancy Glazed Blueberry Donuts</a></h6>
									<div class="mt-3">
										<img src="{{asset('public/tastebite/images/avatars/avatar1.png')}}" class="rounded-circle" alt="Avatar">
										<small class="pl-1">Tricia Albert</small>
									</div>
									<div class="d-flex flex-wrap justify-content-end mt-4">
										<div class="text-gray-300">
											<img src="{{asset('public/tastebite/images/icons/calendar.svg')}}" alt="Icon">
											<small>Yesterday</small>
										</div>
										<div class="ml-4 text-gray-300">
											<img src="{{asset('public/tastebite/images/icons/chat.svg')}}" alt="Icon">
											<small>456</small>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xl-4 col-md-6">
						<figure class="my-3 tstbite-card">
							<a href="#0" class="tstbite-animation rounded-top-6">
								<img src="{{asset('public/tastebite/images/menus/menu85.jpg')}}" class="w-100" alt="Menu">
							</a>
							<figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
								<div class="text-black pt-3 pb-4 px-4">
									<div class="w-100 float-left">
										<div class="float-left">
											<div class="fabrx-ratings has-rating rating">
												<input type="radio" id="radio6" name="rate2" value="1" checked="checked">
												<label for="radio6" class="custom-starboxes"></label>
												<input type="radio" id="radio7" name="rate2" value="2">
												<label for="radio7" class="custom-starboxes"></label>
												<input type="radio" id="radio8" name="rate2" value="3">
												<label for="radio8" class="custom-starboxes"></label>
												<input type="radio" id="radio9" name="rate2" value="4">
												<label for="radio9" class="custom-starboxes"></label>
												<input type="radio" id="radio10" name="rate2" value="5">
												<label for="radio10" class="custom-starboxes"></label>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0" class="text-black">Pan Fried Cod in Creamy Kale Sauce</a></h6>
									<div class="mt-3">
										<img src="{{asset('public/tastebite/images/avatars/avatar1.png')}}" class="rounded-circle" alt="Avatar">
										<small class="pl-1">Tricia Albert</small>
									</div>
									<div class="d-flex flex-wrap justify-content-end mt-4">
										<div class="text-gray-300">
											<img src="{{asset('public/tastebite/images/icons/calendar.svg')}}" alt="Icon">
											<small>Yesterday</small>
										</div>
										<div class="ml-4 text-gray-300">
											<img src="{{asset('public/tastebite/images/icons/chat.svg')}}" alt="Icon">
											<small>456</small>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xl-4 col-md-6">
						<figure class="my-3 tstbite-card">
							<a href="#0" class="tstbite-animation rounded-top-6">
								<img src="{{asset('public/tastebite/images/menus/menu86.jpg')}}" class="w-100" alt="Menu">
							</a>
							<figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
								<div class="text-black pt-3 pb-4 px-4">
									<div class="w-100 float-left">
										<div class="float-left">
											<div class="fabrx-ratings has-rating rating">
												<input type="radio" id="radio11" name="rate3" value="1" checked="checked">
												<label for="radio11" class="custom-starboxes"></label>
												<input type="radio" id="radio12" name="rate3" value="2">
												<label for="radio12" class="custom-starboxes"></label>
												<input type="radio" id="radio13" name="rate3" value="3">
												<label for="radio13" class="custom-starboxes"></label>
												<input type="radio" id="radio14" name="rate3" value="4">
												<label for="radio14" class="custom-starboxes"></label>
												<input type="radio" id="radio15" name="rate3" value="5">
												<label for="radio15" class="custom-starboxes"></label>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0" class="text-black">Berry Maddness Biscuts</a></h6>
									<div class="mt-3">
										<img src="{{asset('public/tastebite/images/avatars/avatar1.png')}}" class="rounded-circle" alt="Avatar">
										<small class="pl-1">Tricia Albert</small>
									</div>
									<div class="d-flex flex-wrap justify-content-end mt-4">
										<div class="text-gray-300">
											<img src="{{asset('public/tastebite/images/icons/calendar.svg')}}" alt="Icon">
											<small>Yesterday</small>
										</div>
										<div class="ml-4 text-gray-300">
											<img src="{{asset('public/tastebite/images/icons/chat.svg')}}" alt="Icon">
											<small>456</small>
										</div>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-4 col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu87.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4">
										<div class="w-100 float-left">
											<div class="float-left">
												<div class="fabrx-ratings has-rating rating">
													<input type="radio" id="radio16" name="rate4" value="1" checked="checked">
													<label for="radio16" class="custom-starboxes"></label>
													<input type="radio" id="radio17" name="rate4" value="2">
													<label for="radio17" class="custom-starboxes"></label>
													<input type="radio" id="radio18" name="rate4" value="3">
													<label for="radio18" class="custom-starboxes"></label>
													<input type="radio" id="radio19" name="rate4" value="4">
													<label for="radio19" class="custom-starboxes"></label>
													<input type="radio" id="radio20" name="rate4" value="5">
													<label for="radio20" class="custom-starboxes"></label>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0" class="text-black">Four Ingredient Oatmeal Pancakes</a></h6>
										<div class="mt-3">
											<img src="{{asset('public/tastebite/images/avatars/avatar1.png')}}" class="rounded-circle" alt="Avatar">
											<small class="pl-1">Tricia Albert</small>
										</div>
										<div class="d-flex flex-wrap justify-content-end mt-4">
											<div class="text-gray-300">
												<img src="{{asset('public/tastebite/images/icons/calendar.svg')}}" alt="Icon">
												<small>Yesterday</small>
											</div>
											<div class="ml-4 text-gray-300">
												<img src="{{asset('public/tastebite/images/icons/chat.svg')}}assets/images/icons/chat.svg" alt="Icon">
												<small>456</small>
											</div>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-4 col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu88.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4">
										<div class="w-100 float-left">
											<div class="float-left">
												<div class="fabrx-ratings has-rating rating">
													<input type="radio" id="radio21" name="rate5" value="1" checked="checked">
													<label for="radio21" class="custom-starboxes"></label>
													<input type="radio" id="radio22" name="rate5" value="2">
													<label for="radio22" class="custom-starboxes"></label>
													<input type="radio" id="radio23" name="rate5" value="3">
													<label for="radio23" class="custom-starboxes"></label>
													<input type="radio" id="radio24" name="rate5" value="4">
													<label for="radio24" class="custom-starboxes"></label>
													<input type="radio" id="radio25" name="rate5" value="5">
													<label for="radio25" class="custom-starboxes"></label>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0" class="text-black">Pumpkin Marshmallow Pie</a></h6>
										<div class="mt-3">
											<img src="{{asset('public/tastebite/images/avatars/avatar1.png')}}" class="rounded-circle" alt="Avatar">
											<small class="pl-1">Tricia Albert</small>
										</div>
										<div class="d-flex flex-wrap justify-content-end mt-4">
											<div class="text-gray-300">
												<img src="{{asset('public/tastebite/images/icons/calendar.svg')}}" alt="Icon">
												<small>Yesterday</small>
											</div>
											<div class="ml-4 text-gray-300">
												<img src="{{asset('public/tastebite/images/icons/chat.svg')}}" alt="Icon">
												<small>456</small>
											</div>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-xl-4 col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu89.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4">
										<div class="w-100 float-left">
											<div class="float-left">
												<div class="fabrx-ratings has-rating rating">
													<input type="radio" id="radio26" name="rate6" value="1" checked="checked">
													<label for="radio26" class="custom-starboxes"></label>
													<input type="radio" id="radio27" name="rate6" value="2">
													<label for="radio27" class="custom-starboxes"></label>
													<input type="radio" id="radio28" name="rate6" value="3">
													<label for="radio28" class="custom-starboxes"></label>
													<input type="radio" id="radio29" name="rate6" value="4">
													<label for="radio29" class="custom-starboxes"></label>
													<input type="radio" id="radio30" name="rate6" value="5">
													<label for="radio30" class="custom-starboxes"></label>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0" class="text-black">Mighty Cheesy Breakfast Burger</a></h6>
										<div class="mt-3">
											<img src="{{asset('public/tastebite/images/avatars/avatar1.png')}}" class="rounded-circle" alt="Avatar">
											<small class="pl-1">Tricia Albert</small>
										</div>
										<div class="d-flex flex-wrap justify-content-end mt-4">
											<div class="text-gray-300">
												<img src="{{asset('public/tastebite/images/icons/calendar.svg')}}" alt="Icon">
												<small>Yesterday</small>
											</div>
											<div class="ml-4 text-gray-300">
												<img src="{{asset('public/tastebite/images/icons/chat.svg')}}" alt="Icon">
												<small>456</small>
											</div>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
					</div>
				</section>

				<section class="tstbite-components my-4 my-md-5">
					<h4 class="py-3 mb-0">Curated Collections</h4>
					<div class="row">
						<div class="col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation stretched-link rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu14.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4 text-right">
										<h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">Sushi Combos for <br>your Next Party</a></h6>
										<span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation stretched-link rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu15.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4 text-right">
										<h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left">
											<a href="#0">Everything Bagel</a>
										</h6>
										<span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation stretched-link rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu14.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4 text-right">
										<h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">Sushi Combos for <br>your Next Party</a></h6>
										<span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation stretched-link rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu15.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4 text-right">
										<h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left">
											<a href="#0">Everything Bagel</a>
										</h6>
										<span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation stretched-link rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu14.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4 text-right">
										<h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">Sushi Combos for <br>your Next Party</a></h6>
										<span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-6">
							<figure class="my-3 tstbite-card">
								<a href="#0" class="tstbite-animation stretched-link rounded-top-6">
									<img src="{{asset('public/tastebite/images/menus/menu15.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
									<div class="text-black pt-3 pb-4 px-4 text-right">
										<h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left">
											<a href="#0">Everything Bagel</a>
										</h6>
										<span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
									</div>
								</figcaption>
							</figure>
						</div>
					</div>
				</section>

				<section class="tstbite-components my-4 my-md-5">
					<h5 class="py-3 mb-0">Latest Recipes</h5>
					<div class="row">
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu20.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu21.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu22.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu23.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu24.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu25.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu26.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu27.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu28.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu29.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu30.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu31.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu32.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu33.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu34.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu35.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu36.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu37.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu38.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<figure class="my-3 my-md-4 tstbite-card">
								<a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
									<img src="{{asset('public/tastebite/images/menus/menu39.jpg')}}" class="w-100" alt="Menu">
								</a>
								<figcaption class="mt-2">
									<a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Strawberry Milkshake</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<div class="text-center py-5">
						<a href="#0" class="btn btn-outline-dark px-5 py-2">Load More</a>
					</div>
				</section>
			</div>

			<div class="container">
				<section class="tstbite-components bg-primary-light my-5 px-3 px-md-5 py-5 py-md-4 rounded-6 tstbite-join-section">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<h6 class="mt-0 mt-md-3 mb-3 text-center text-lg-left">Daily Cooking tips and <br>recipes to your inbox!</h6>
						</div>
						<div class="col-lg-6">
							<div class="input-group custom-input-group pl-0 pl-lg-5">
								<input type="text" class="form-control" placeholder="Email Address">
								<div class="input-group-append">
									<button class="btn btn-primary" type="button">JOIN</button>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
@stop


@section('footer')

@stop