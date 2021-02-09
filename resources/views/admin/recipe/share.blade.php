<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>RecipeKing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{isset($data->name)?$data->name:''}}" />
    <meta property="og:description"   content="{{isset($data->description)?$data->description:''}}" />

				<meta property="og:image" itemprop="image" content="{{asset('public/upload/recipe').'/'.$data->image}}" />
				<meta property="og:image:width" content="1200" />
				<meta property="og:image:height" content="630" />
	
		
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style type="text/css">
	    @import url('https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap');
	    @import url('https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&display=swap');
	    .sup-header {background-color: green; padding: 30px 70px; } .sup-header h1 {margin: 0px; color: #fff; font-family: "PT Sans Caption"; font-size: 35px; font-weight: 700; } .c-img{width: 108px; height: 108px; border-radius: 50%; } .c-img img {width: 100%; height: 100%; border-radius: 50%; float: left; } .text-box h2{font-family: "PT Sans Caption"; font-size: 40px; font-weight: 700; color: #6a6a6a; margin-bottom: 5px; display: inline-block; } .profile {width: 15%; float: left; padding-top: 12px; } .text-box.col-md-9 {padding-left: 5px; } .text-box span img {float: left; width: 60%; margin-right: 10px; } .text-box h1 {font-size: 28px; display: inline-block; font-weight: 700; font-family: "PT Sans Caption"; color: #4f67fc; margin: 0px; } .box {background-color: #eeeeee; padding: 20px 154px; width: 100%; float: left; padding-bottom: 50px; } .text-box p {font-family: "PT Sans Caption"; font-size: 22px; color: #616162; text-align: justify; margin-bottom: 20px; } .pl-0{padding-left: 0px; } .p-0{padding:0px; } .text-box span {float: right; } .text-box {width: 85%; float: left; } .comment h1 {font-size: 30px; font-weight: 700; font-family: "PT Sans Caption"; color: #3d3d3d; margin-top: 15px; } .comment p {font-size: 25px; font-family: "PT Sans Caption"; color: #3d3d3d; line-height: 28px; margin-bottom: 30px; } .google {width: 50%; float: left; text-align: center; } .apple {width: 50%; float: left; text-align: center; } .apple img, .google img {width: 80%; } img{width: 100%; height: auto; } @media (max-width: 1200px){.text-box {width: 79%; } .profile {width: 21%; } } @media (max-width:991px){.text-box {width: 78%; float: left; } .profile {width: 17%; margin-right: 30px; } .box {background-color: #eeeeee; padding: 20px 55px; } } @media (max-width: 767px) {.box {padding: 20px 30px; padding-bottom: 110px; } .con{padding: 0px; } .google {padding-right: 30px; } .apple {padding-left:30px; } .profile {width: 25%; padding-top: 25px; margin-right: 0px; } .text-box {width: 75%; float: left; } .text-box h2 {font-size: 28px; } .text-box span h1 {font-size: 22px; } .sup-header {padding: 30px 30px; } .sup-header h1 {font-size: 27px; } .text-box p {font-size: 18px; line-height: 26px; } } @media (max-width: 576px){.c-img img {width: 45px;  height: 45px; } .profile {width: 16%; margin-right: 16px; text-align: center; } .c-img {width: auto; display: inline-block; } .box {padding: 20px 20px; } .text-box h2 {font-size: 17px; } .text-box span h1 {font-size: 14px; } .text-box span img {width:45%; margin-right: 5px;; }.text-box h1{font-size: 20px;} .comment p {font-size: 17px; } .text-box {width: 78%; } .text-box p {font-size: 14px; line-height: 21px; } .sup-header {padding: 25px 30px; } .sup-header h1 {font-size: 22px; } .comment h1 {font-size: 20px; } .google {padding-right: 15px; } .apple{padding-left: 15px; } .text-box p {font-size: 14px; line-height: 21px; }}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container con">
		<div class="sup-header">
			<h1>Recipe</h1>
		</div>
		<div class="box">
		
			<div class="text-box">
				<h2>{{isset($data->name)?$data->name:''}}</h2>
				
				<p>{{$data->description}}</p>
			</div>

			<div class="video-a">
				<ul style="list-style: none">
			
				     <li style="float: left;"> <img src="{{asset('public/upload/recipe').'/'.$data->image}}" style="width: 250px;height: 250px;" /></li>
				 
				</ul>
				<div class="comment">
					<!--<h1>Download Our APP</h1>-->
					<p></p>
				</div>
				<div class="row" style="margin-top: 20px">
					<div class="col-md-12">
						<div class="google">
							<a href="">
								<img src="{{asset('public/upload/btn_playstore.png')}}">
							</a>
						</div>
						<div class="apple">
							<a href="">
								<img src="{{asset('public/upload/btn_appstore.png')}}">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php

?>
