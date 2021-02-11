@extends('front.header-layout')

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



	<div class="container">
	   <section class="tstbite-components my-4 my-md-5">
	      <div class="d-sm-flex">
	         <div class="tstbite-svg order-sm-2 ml-auto">
	            <div class="tstbite-feature pt-0">
	            	<div class="share-button">
					  <span>Share!</span>
					  <a href="#"><i class="fab fa-facebook-f"></i></a>
					  <a href="#"><i class="fab fa-twitter"></i></a>
					  <a href="#"><i class="fab fa-instagram"></i></a>
					</div>
	               <a href="#0">
	                  <svg data-name="feather-icon/share" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                     <rect data-name="Bounding Box" width="32" height="32" fill="rgba(255,255,255,0)" />
	                     <path d="M4,29.333a4,4,0,0,1-4-4V14.666a1.333,1.333,0,1,1,2.666,0V25.333A1.333,1.333,0,0,0,4,26.666H20a1.333,1.333,0,0,0,1.333-1.333V14.666a1.333,1.333,0,1,1,2.666,0V25.333a4,4,0,0,1-4,4Zm6.667-10.666V4.552L7.609,7.609A1.333,1.333,0,0,1,5.724,5.724L11.057.39a1.333,1.333,0,0,1,.307-.229h0l.025-.013.008,0,.018-.009.015-.007.011-.005.024-.011h0a1.338,1.338,0,0,1,1.062,0h0l.024.011.011,0,.016.008L12.6.143l.008,0,.025.013h0a1.333,1.333,0,0,1,.307.229l5.333,5.334a1.333,1.333,0,1,1-1.885,1.885L13.333,4.552V18.667a1.333,1.333,0,0,1-2.666,0Z" transform="translate(4 1.333)" />
	                  </svg>
	               </a>
	               <a href="#0">
	                  <svg data-name="feather-icon/share copy" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                     <rect data-name="Bounding Box" width="32" height="32" fill="rgba(255,255,255,0)" />
	                     <path d="M20,26.669a1.318,1.318,0,0,1-.77-.251l-8.558-6.113L2.108,26.418a1.319,1.319,0,0,1-.77.251A1.362,1.362,0,0,1,.41,26.3,1.314,1.314,0,0,1,0,25.333V4A4,4,0,0,1,4,0H17.333a4,4,0,0,1,4,4V25.333A1.34,1.34,0,0,1,20,26.669Zm-9.329-9.336a1.329,1.329,0,0,1,.776.248l7.225,5.161V4a1.335,1.335,0,0,0-1.334-1.333H4A1.335,1.335,0,0,0,2.666,4V22.742l7.225-5.161A1.324,1.324,0,0,1,10.666,17.333Z" transform="translate(5.333 2.667)" />
	                  </svg>
	               </a>
	            </div>
	         </div>
	         <div>
	            <strong>
	               <svg data-name="feather-icon/trending-up" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
	                  <rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)"></rect>
	                  <path d="M.244,11.423a.834.834,0,0,1,0-1.178L6.494,3.994a.834.834,0,0,1,1.178,0L11.25,7.571l5.9-5.9H14.167a.833.833,0,1,1,0-1.667h5A.833.833,0,0,1,20,.833v5a.834.834,0,0,1-1.667,0V2.845L11.839,9.339a.834.834,0,0,1-1.179,0L7.083,5.761l-5.66,5.661a.834.834,0,0,1-1.179,0Z" transform="translate(0 4.167)" fill="#ff642f"></path>
	               </svg>
	               <span class="ml-2 caption font-weight-medium">85% would make this again</span>
	            </strong>
	            <h5 class="py-3 mb-0 h2">Strawberry Cream Cheesecake</h5>
	         </div>
	      </div>
	      <div class="d-flex flex-wrap">
	         <div class="my-2 mr-4">
	            <img src="{{asset('public/tastebite/images/avatars/avatar11.png')}}" class="rounded-circle" alt="Avatar">
	            <small class="pl-1">Tricia Albert</small>
	         </div>
	         <div class="my-2 mr-4">
	            <svg xmlns="http://www.w3.org/2000/svg" width="13.333" height="14.666" viewBox="0 0 13.333 14.666">
	               <path d="M2,14.666a2,2,0,0,1-2-2V3.333a2,2,0,0,1,2-2H3.334V.667a.667.667,0,0,1,1.333,0v.667h4V.667A.667.667,0,0,1,10,.667v.667h1.333a2,2,0,0,1,2,2v9.334a2,2,0,0,1-2,2Zm-.667-2A.667.667,0,0,0,2,13.333h9.334A.667.667,0,0,0,12,12.667v-6H1.333ZM12,5.333v-2a.667.667,0,0,0-.667-.667H10v.667a.667.667,0,0,1-1.334,0V2.666h-4v.667a.667.667,0,1,1-1.333,0V2.666H2a.667.667,0,0,0-.667.667v2Z" />
	            </svg>
	            <small>Yesterday</small>
	         </div>
	         <div class="my-2 mr-4">
	            <svg xmlns="http://www.w3.org/2000/svg" width="13.333" height="13.335" viewBox="0 0 13.333 13.335">
	               <path d="M.672,13.335a.687.687,0,0,1-.464-.183A.655.655,0,0,1,0,12.667V2A2,2,0,0,1,2,0h9.334a2,2,0,0,1,2,2V8.666a2,2,0,0,1-2,2H3.61L1.138,13.138A.657.657,0,0,1,.672,13.335ZM2,1.333A.667.667,0,0,0,1.333,2v9.058L2.862,9.529a.671.671,0,0,1,.472-.195h8A.668.668,0,0,0,12,8.666V2a.667.667,0,0,0-.667-.667Z" />
	            </svg>
	            <small>25</small>
	         </div>
	         <div class="my-2">
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
	         </div>
	      </div>
	      <div class="blog-detail">
	         <hr>
	         <p>One thing I learned living in the Canarsie section of Brooklyn, NY was how to cook a good Italian meal. Here is a recipe I created after having this dish in a restaurant. Enjoy!</p>
	         <br>
	         <div class="rounded-12 overflow-hidden position-relative tstbite-svg">
	            <img src="{{asset('public/tastebite/images/menus/menu144.jpg')}}" class="w-100" alt="Menu">
	            <div class="overlay-box">
	               <a href="javascript:void(0);">
	                  <svg xmlns="http://www.w3.org/2000/svg" width="85.334" height="106.685" viewBox="0 0 85.334 106.685">
	                     <path d="M5.347,106.685a5.436,5.436,0,0,1-3.715-1.5A5.261,5.261,0,0,1,0,101.343v-96A5.324,5.324,0,0,1,8.218.855l74.669,48a5.338,5.338,0,0,1,0,8.976l-74.669,48A5.311,5.311,0,0,1,5.347,106.685Zm5.318-91.575V91.575L70.138,53.343Z" fill="#fff" />
	                  </svg>
	               </a>
	            </div>
	         </div>
	         <br>
	         <div class="row mt-0 mt-md-5">
	            <div class="col-lg-8 col-md-7">
	               <div class="border-md-right pr-0 pr-lg-5">
	                  <ul class="list-unstyled component-list tstbite-svg">
	                     <li>
	                        <small>Prep Time</small>
	                        <span>15 min</span>
	                     </li>
	                     <li>
	                        <small>Prep Time</small>
	                        <span>15 min</span>
	                     </li>
	                     <li>
	                        <small>Servings</small>
	                        <span>
	                           4 People
	                           <a href="#0" class="ml-2">
	                              <svg data-name="feather-icon/edit" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
	                                 <rect data-name="Bounding Box" width="16" height="16" fill="rgba(255,255,255,0)" />
	                                 <path d="M2,14.747a2,2,0,0,1-2-2V3.414a2,2,0,0,1,2-2H6.667a.667.667,0,1,1,0,1.333H2a.667.667,0,0,0-.667.667v9.334A.667.667,0,0,0,2,13.414h9.334A.666.666,0,0,0,12,12.748V8.081a.667.667,0,1,1,1.333,0v4.667a2,2,0,0,1-2,2ZM4.141,10.49a.659.659,0,0,1-.121-.571l.667-2.666a.67.67,0,0,1,.176-.31L11.2.61A2.081,2.081,0,0,1,14.042.52l.1.09.09.1a2.084,2.084,0,0,1-.09,2.846L7.8,9.886a.669.669,0,0,1-.31.175l-2.666.667a.675.675,0,0,1-.165.02A.66.66,0,0,1,4.141,10.49Zm8-8.938-6.2,6.2L5.583,9.164l1.41-.352,6.2-6.2a.748.748,0,1,0-1.057-1.057Z" transform="translate(0.667 0.586)" />
	                              </svg>
	                           </a>
	                        </span>
	                     </li>
	                     <li>
	                        <a href="#0">
	                           <svg data-name="feather-icon/printer" xmlns="http://www.w3.org/2000/svg" width="20" height="22.041" viewBox="0 0 20 22.041">
	                              <rect data-name="Bounding Box" width="20" height="22.041" fill="rgba(255,255,255,0)" />
	                              <path d="M4.166,20.2a.88.88,0,0,1-.833-.918V16.531H2.5A2.636,2.636,0,0,1,0,13.776V9.184A2.636,2.636,0,0,1,2.5,6.429h.833V.918A.879.879,0,0,1,4.167,0h10A.878.878,0,0,1,15,.918v5.51h.833a2.636,2.636,0,0,1,2.5,2.755v4.592a2.636,2.636,0,0,1-2.5,2.755H15v2.755a.88.88,0,0,1-.834.918ZM5,18.367h8.333v-5.51H5v2.718c0,.012,0,.025,0,.038s0,.025,0,.037Zm10.834-3.673a.879.879,0,0,0,.833-.918V9.184a.878.878,0,0,0-.833-.918H2.5a.879.879,0,0,0-.833.918v4.592a.879.879,0,0,0,.833.918h.833V11.938a.88.88,0,0,1,.833-.918h10a.88.88,0,0,1,.834.918v2.756Zm-2.5-8.265V1.837H5V6.429Z" transform="translate(0.833 0.918)" />
	                           </svg>
	                        </a>
	                     </li>
	                  </ul>
	                  <div class="mt-4 mt-md-5">
	                     <h6>Ingredients</h6>
	                     <div class="checklist pb-2">
	                        <strong>For the crust</strong>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="crackers" name="crackers" class="form-check-input">
	                           <label class="form-check-label" for="crackers">400g graham crackers</label>
	                        </div>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="unsalted" name="unsalted" class="form-check-input">
	                           <label class="form-check-label" for="unsalted">150g unsalted butters, melted</label>
	                        </div>
	                     </div>
	                     <div class="checklist pb-4">
	                        <strong>For the cheescake</strong>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="marshmallows" name="marshmallows" class="form-check-input">
	                           <label class="form-check-label" for="marshmallows">300g marshmallows</label>
	                        </div>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="melted" name="melted" class="form-check-input">
	                           <label class="form-check-label" for="melted">175g unsalted butter, melted</label>
	                        </div>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="Philadelphia" name="Philadelphia" class="form-check-input">
	                           <label class="form-check-label" for="Philadelphia">500g Philadelphia cream cheese, softened</label>
	                        </div>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="thickened" name="thickened" class="form-check-input">
	                           <label class="form-check-label" for="thickened">250ml thickened/whipping cream, warm</label>
	                        </div>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="tbsppowdered" name="tbsppowdered" class="form-check-input">
	                           <label class="form-check-label" for="tbsppowdered">3 tbsp powdered gelatin + 3 tbsp water</label>
	                        </div>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="dropspurple" name="dropspurple" class="form-check-input">
	                           <label class="form-check-label" for="dropspurple">5 drops purple food gel</label>
	                        </div>
	                        <div class="form-check form-check-rounded recipe-checkbox">
	                           <input type="checkbox" id="dropsblue" name="dropsblue" class="form-check-input">
	                           <label class="form-check-label" for="dropsblue">3 drops blue food gel</label>
	                        </div>
	                     </div>
	                  </div>
	                  <div class="mt-3 mt-md-5">
	                     <h6>Instructions</h6>
	                     <ul class="instruction-list list-unstyled">
	                        <li>
	                           <span>1</span>
	                           To prepare crust add graham crackers to a food processor and process until you reach fine crumbs. Add melted butter and pulse 3-4 times to coat crumbs with butter.
	                        </li>
	                        <li>
	                           <span>2</span>
	                           Pour mixture into a 20cm (8”) tart tin. Use the back of a spoon to firmly press the mixture out across the bottom and sides of the tart tin. Chill for 30 min.
	                        </li>
	                        <li>
	                           <span>3</span>
	                           Begin by adding the marshmallows and melted butter into a microwave safe bowl. Microwave for 30 seconds and mix to combine. Set aside.
	                        </li>
	                        <li>
	                           <span>4</span>
	                           Next, add the gelatine and water to a small mixing bowl and mix to combine. Microwave for 30 seconds.
	                        </li>
	                        <li>
	                           <span>5</span>
	                           Add the cream cheese to the marshmallow mixture and use a hand mixer or stand mixer fitted with a paddle attachment to mix until smooth.
	                        </li>
	                        <li>
	                           <span>6</span>
	                           Add the warm cream and melted gelatin mixture and mix until well combined.
	                        </li>
	                        <li>
	                           <span>7</span>
	                           Add 1/3 of the mixture to a mixing bowl, add purple food gel and mix until well combined. Colour 1/3 of the mixture blue. Split the remaining mixture into two mixing bowls, colour one pink and leave the other white.
	                        </li>
	                        <li>
	                           <span>8</span>
	                           Pour half the purple cheesecake mixture into the chill tart crust. Add half the blue and then add the remaining purple and blue in the tart tin. Use a spoon to drizzle some pink cheesecake on top. Use a skewer or the end of a spoon to swirl the pink. Add some small dots of the plain cheesecake mixture to create stars and then sprinkle some more starts on top before chilling for 2 hours.
	                        </li>
	                        <li>
	                           <span>9</span>
	                           Slice with a knife to serve.
	                        </li>
	                     </ul>
	                  </div>
	               </div>
	            </div>
	            <div class="col-lg-4 col-md-5">
	               <div class="rounded-12 bg-lightest-gray p-4">
	                  <h6>Nutrition Facts</h6>
	                  <ul class="Nutrition-list list-unstyled">
	                     <li>
	                        <span>Calories</span>
	                        <span>219.9</span>
	                     </li>
	                     <li>
	                        <span>Total Fat</span>
	                        <span>10.7 g</span>
	                     </li>
	                     <li>
	                        <span>Saturated Fat</span>
	                        <span>2.2 g</span>
	                     </li>
	                     <li>
	                        <span>Cholesterol</span>
	                        <span>37.4 mg</span>
	                     </li>
	                     <li>
	                        <span>Sodium</span>
	                        <span>120.3 mg</span>
	                     </li>
	                     <li>
	                        <span>Potassium</span>
	                        <span>32.8 mg</span>
	                     </li>
	                     <li>
	                        <span>Total Carbohydrate</span>
	                        <span>22.3 g</span>
	                     </li>
	                     <li>
	                        <span>Sugars</span>
	                        <span>8.4 g</span>
	                     </li>
	                     <li>
	                        <span>Protein</span>
	                        <span>7.9 g</span>
	                     </li>
	                  </ul>
	               </div>
	               <div class=" mt-4 mt-md-5 pt-3 pt-md-5">
	                  <h6>Fresh Recipes</h6>
	                  <figure class="mt-4 pb-2 row g-0 align-items-center tstbite-card">
	                     <div class="col-4">
	                        <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-4">
	                        <img src="{{asset('public/tastebite/images/menus/menu145.jpg')}}" class="w-100" alt="Menu">
	                        </a>
	                     </div>
	                     <figcaption class="bg-white col-8">
	                        <div class="pl-3">
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
	                           <h6 class="inter-font f-size-20 mt-2 font-weight-semibold"><a href="recipe-sidebar.html" class="text-black">Spinach and Cheese Pasta</a></h6>
	                        </div>
	                     </figcaption>
	                  </figure>
	                  <figure class="mt-4 pb-2 row g-0 align-items-center tstbite-card">
	                     <div class="col-4">
	                        <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-4">
	                        <img src="{{asset('public/tastebite/images/menus/menu146.jpg')}}" class="w-100" alt="Menu">
	                        </a>
	                     </div>
	                     <figcaption class="bg-white col-8">
	                        <div class="pl-3">
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
	                           <h6 class="inter-font f-size-20 mt-2 font-weight-semibold"><a href="recipe-sidebar.html" class="text-black">Perfect Fancy Glazed Donuts</a></h6>
	                        </div>
	                     </figcaption>
	                  </figure>
	                  <figure class="mt-4 pb-2 row g-0 align-items-center tstbite-card">
	                     <div class="col-4">
	                        <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-4">
	                        <img src="{{asset('public/tastebite/images/menus/menu147.jpg')}}" class="w-100" alt="Menu">
	                        </a>
	                     </div>
	                     <figcaption class="bg-white col-8">
	                        <div class="pl-3">
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
	                           <h6 class="inter-font f-size-20 mt-2 font-weight-semibold"><a href="recipe-sidebar.html" class="text-black">Mighty Cheesy Breakfast Burger</a></h6>
	                        </div>
	                     </figcaption>
	                  </figure>
	                  <figure class="mt-4 pb-2 row g-0 align-items-center tstbite-card">
	                     <div class="col-4">
	                        <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-4">
	                        <img src="{{asset('public/tastebite/images/menus/menu148.jpg')}}" class="w-100" alt="Menu">
	                        </a>
	                     </div>
	                     <figcaption class="bg-white col-8">
	                        <div class="pl-3">
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
	                           <h6 class="inter-font f-size-20 mt-2 font-weight-semibold"><a href="recipe-sidebar.html" class="text-black">Caramel Strawberry Milkshake</a></h6>
	                        </div>
	                     </figcaption>
	                  </figure>
	                  <figure class="mt-4 pb-2 row g-0 align-items-center tstbite-card">
	                     <div class="col-4">
	                        <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-4">
	                        <img src="{{asset('public/tastebite/images/menus/menu149.jpg')}}" class="w-100" alt="Menu">
	                        </a>
	                     </div>
	                     <figcaption class="bg-white col-8">
	                        <div class="pl-3">
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
	                           <h6 class="inter-font f-size-20 mt-2 font-weight-semibold"><a href="recipe-sidebar.html" class="text-black">Chocolate and Banana Jar Cake</a></h6>
	                        </div>
	                     </figcaption>
	                  </figure>
	               </div>
	               <div class="tstbite-components recipe-component bg-primary-light mt-5 rounded-6 py-5 px-4">
	                  <div class="text-center py-3">
	                     <h5 class="mb-3">Deliciousness to your inbox</h5>
	                     <p class="f-size-24 font-weight-regular">Enjoy weekly hand picked recipes and recommendations</p>
	                     <div class="input-group custom-input-group mt-4">
	                        <input type="text" class="form-control" placeholder="Email Address">
	                        <div class="input-group-append">
	                           <button class="btn btn-primary" type="button">JOIN</button>
	                        </div>
	                     </div>
	                     <small class="d-block">By joining our newsletter you agree to our <a href="#0" class="text-black d-block d-sm-inline-block"><u class="tstbite-underline">Terms and Conditions</u></a></small>
	                  </div>
	               </div>
	            </div>
	         </div>
	      </div>
	      <div class="my-4 my-md-5 pt-5 pb-4 py-md-5">
	         <h2 class="mb-3">Already made this?</h2>
	         <a href="#0" class="btn btn-outline-dark px-5">Share your Review</a>
	         <br>
	         <br>
	         <hr class="orange hr-11">
	      </div>
	      <div class="my-5 pt-0 pt-md-3">
	         <div class="border-bottom mb-4 pb-3">
	            <h2 class="d-inline-block">Reviews</h2>
	            <span class="f-size-24">(25)</span>
	         </div>
	         <ul class="tstbite-comments list-unstyled mb-0">
	            <li class="comment-item">
	               <div class="media">
	                  <a href="#0" class="tstbite-avatar align-self-start mr-3">
	                  	<img src="{{asset('public/tastebite/images/avatars/avatar4.png')}}" alt="Avatar"></a>
	                  <div class="media-body">
	                     <div class="pt-1 pb-3">
	                        <h6 class="big inter-font font-weight-semibold">Jelanee Uwaezuoke</h6>
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
	                     </div>
	                     <p>Synth polaroid bitters chillwave pickled. Vegan disrupt tousled, Portland keffiyeh aesthetic food truck sriracha cornhole single-origin coffee church-key roof party.</p>
	                     <ul class="tstbite-media-links list-unstyled d-flex mt-4">
	                        <li>
	                           <a href="#0">
	                              <svg data-name="feather-icon/calendar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
	                                 <rect data-name="Bounding Box" width="16" height="16" fill="rgba(255,255,255,0)" />
	                                 <path d="M7.634,13.488a.662.662,0,0,1-.471-.2L1.269,7.4A4.334,4.334,0,0,1,7.4,1.27l.235.235.235-.235a4.334,4.334,0,0,1,7.4,3.064A4.3,4.3,0,0,1,14,7.4L8.105,13.292A.662.662,0,0,1,7.634,13.488ZM4.334,1.334A3,3,0,0,0,2.212,6.457l5.422,5.422,5.422-5.422A3,3,0,1,0,8.812,2.213l-.707.706a.666.666,0,0,1-.943,0l-.707-.706A2.981,2.981,0,0,0,4.334,1.334Z" transform="translate(0.366 1.332)" fill="#7f7f7f" />
	                              </svg>
	                              48
	                           </a>
	                        </li>
	                        <div class="text-gray-300">45min ago</div>
	                     </ul>
	                  </div>
	               </div>
	            </li>
	            <li class="comment-item">
	               <div class="media">
	                  <a href="#0" class="tstbite-avatar align-self-start mr-3">
	                  	<img src="{{asset('public/tastebite/images/avatars/avatar7.png')}}" alt="Avatar"></a>
	                  <div class="media-body">
	                     <div class="pt-1 pb-3">
	                        <h6 class="big inter-font font-weight-semibold">Diane Lansdowne</h6>
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
	                     </div>
	                     <p>Synth polaroid bitters chillwave pickled. Vegan disrupt tousled, Portland keffiyeh aesthetic food truck sriracha cornhole single-origin coffee church-key roof party.</p>
	                     <ul class="tstbite-media-links list-unstyled d-flex mt-4">
	                        <li>
	                           <a href="#0">
	                              <svg data-name="feather-icon/calendar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
	                                 <rect data-name="Bounding Box" width="16" height="16" fill="rgba(255,255,255,0)" />
	                                 <path d="M7.634,13.488a.662.662,0,0,1-.471-.2L1.269,7.4A4.334,4.334,0,0,1,7.4,1.27l.235.235.235-.235a4.334,4.334,0,0,1,7.4,3.064A4.3,4.3,0,0,1,14,7.4L8.105,13.292A.662.662,0,0,1,7.634,13.488ZM4.334,1.334A3,3,0,0,0,2.212,6.457l5.422,5.422,5.422-5.422A3,3,0,1,0,8.812,2.213l-.707.706a.666.666,0,0,1-.943,0l-.707-.706A2.981,2.981,0,0,0,4.334,1.334Z" transform="translate(0.366 1.332)" fill="#7f7f7f" />
	                              </svg>
	                              48
	                           </a>
	                        </li>
	                        <div class="text-gray-300">45min ago</div>
	                     </ul>
	                  </div>
	               </div>
	            </li>
	            <li class="comment-item">
	               <div class="media">
	                  <a href="#0" class="tstbite-avatar align-self-start mr-3">
	                  	<img src="{{asset('public/tastebite/images/avatars/avatar8.png')}}" alt="Avatar"></a>
	                  <div class="media-body">
	                     <div class="pt-1 pb-3">
	                        <h6 class="big inter-font font-weight-semibold">Malin Quist</h6>
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
	                     </div>
	                     <p>Synth polaroid bitters chillwave pickled. Vegan disrupt tousled, Portland keffiyeh aesthetic food truck sriracha cornhole single-origin coffee church-key roof party.</p>
	                     <ul class="tstbite-media-links list-unstyled d-flex mt-4">
	                        <li>
	                           <a href="#0">
	                              <svg data-name="feather-icon/calendar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
	                                 <rect data-name="Bounding Box" width="16" height="16" fill="rgba(255,255,255,0)" />
	                                 <path d="M7.634,13.488a.662.662,0,0,1-.471-.2L1.269,7.4A4.334,4.334,0,0,1,7.4,1.27l.235.235.235-.235a4.334,4.334,0,0,1,7.4,3.064A4.3,4.3,0,0,1,14,7.4L8.105,13.292A.662.662,0,0,1,7.634,13.488ZM4.334,1.334A3,3,0,0,0,2.212,6.457l5.422,5.422,5.422-5.422A3,3,0,1,0,8.812,2.213l-.707.706a.666.666,0,0,1-.943,0l-.707-.706A2.981,2.981,0,0,0,4.334,1.334Z" transform="translate(0.366 1.332)" fill="#7f7f7f" />
	                              </svg>
	                              48
	                           </a>
	                        </li>
	                        <div class="text-gray-300">45min ago</div>
	                     </ul>
	                  </div>
	               </div>
	            </li>
	         <a href="#0" class="btn btn-outline-dark btn-block py-1 py-md-3">Load 25 more Review</a>
	      </div>
	      <div class="write-comment">
	         <div class="d-sm-flex align-items-center flex-wrap">
	            <h6>Write a Review</h6>
	            <p class="mb-0 ml-auto"><a href="#0" class="text-primary">Login</a> to post a Review</p>
	         </div>
	         <form class="bg-lightest-gray rounded-6 mt-3 d-flex flex-wrap p-4">
	            <textarea class="form-control">@Jelanee Uwaezuoke Synth polaroid bitters chillwave pickled. Vegan disrupt tousled, Portland keffiyeh aesthetic food truck sriracha cornhole single-origin coffee church-key roof party. 🔥|</textarea>
	            <div class="mt-auto ml-auto">
	               <button type="button" class="btn btn-primary px-5">Review</button>
	            </div>
	         </form>
	      </div>
	   </section>
	   <section class="tstbite-components my-4 my-md-5">
	      <h5 class="py-3 mb-0">You might also like</h5>
	      <div class="row">
	         <div class="col-lg-3 col-md-4 col-6">
	            <figure class="my-3 my-md-4 tstbite-card">
	               <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
	               <img src="{{asset('public/tastebite/images/menus/menu126.jpg')}}" class="w-100" alt="Menu">
	               </a>
	               <figcaption class="mt-2">
	                  <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Cranberry Macaroon Ice Cream Cake</a>
	               </figcaption>
	            </figure>
	         </div>
	         <div class="col-lg-3 col-md-4 col-6">
	            <figure class="my-3 my-md-4 tstbite-card">
	               <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
	               <img src="{{asset('public/tastebite/images/menus/menu127.jpg')}}" class="w-100" alt="Menu">
	               </a>
	               <figcaption class="mt-2">
	                  <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">No Bake Cheesecake</a>
	               </figcaption>
	            </figure>
	         </div>
	         <div class="col-lg-3 col-md-4 col-6">
	            <figure class="my-3 my-md-4 tstbite-card">
	               <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
	               <img src="{{asset('public/tastebite/images/menus/menu124.jpg')}}" class="w-100" alt="Menu">
	               </a>
	               <figcaption class="mt-2">
	                  <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Double Thick Layered Sponge Cake</a>
	               </figcaption>
	            </figure>
	         </div>
	         <div class="col-lg-3 col-md-4 col-6">
	            <figure class="my-3 my-md-4 tstbite-card">
	               <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
	               <img src="{{asset('public/tastebite/images/menus/menu133.jpg')}}" class="w-100" alt="Menu">
	               </a>
	               <figcaption class="mt-2">
	                  <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel Glaze Cake</a>
	               </figcaption>
	            </figure>
	         </div>
	         <div class="col-lg-3 col-md-4 col-6">
	            <figure class="my-3 my-md-4 tstbite-card">
	               <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
	               <img src="{{asset('public/tastebite/images/menus/menu139.jpg')}}" class="w-100" alt="Menu">
	               </a>
	               <figcaption class="mt-2">
	                  <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Strawberry Cream Cake Bites</a>
	               </figcaption>
	            </figure>
	         </div>
	         <div class="col-lg-3 col-md-4 col-6">
	            <figure class="my-3 my-md-4 tstbite-card">
	               <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
	               <img src="{{asset('public/tastebite/images/menus/menu122.jpg')}}" class="w-100" alt="Menu">
	               </a>
	               <figcaption class="mt-2">
	                  <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Homemade Mixed Berries Wedding Cake</a>
	               </figcaption>
	            </figure>
	         </div>
	         <div class="col-lg-3 col-md-4 col-6">
	            <figure class="my-3 my-md-4 tstbite-card">
	               <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
	               <img src="{{asset('public/tastebite/images/menus/menu138.jpg')}}" class="w-100" alt="Menu">
	               </a>
	               <figcaption class="mt-2">
	                  <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">M&amp;M’s Chocolate Cake</a>
	               </figcaption>
	            </figure>
	         </div>
	         <div class="col-lg-3 col-md-4 col-6">
	            <figure class="my-3 my-md-4 tstbite-card">
	               <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
	               <img src="{{asset('public/tastebite/images/menus/menu128.jpg')}}" class="w-100" alt="Menu">
	               </a>
	               <figcaption class="mt-2">
	                  <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Almond Cinnamon Sponge Cake</a>
	               </figcaption>
	            </figure>
	         </div>
	      </div>
	   </section>
	</div>


@stop


@section('footer')

@stop
