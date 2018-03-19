<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php latihan 3 </title>
    <link href="{{asset('kereta/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('kereta/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('kereta/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('kereta/css/jquery.bxslider.css')}}">
    <link href="{{asset('kereta/css/style.css')}}" rel="stylesheet">
     
  
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			 	<span>   {!! link_to(route('home.index'),"Pesankereta.com",array('class'=>"navbar-brand"))!!}</span>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
					@if(Sentinel::check())	
					    @if(Sentinel::getUser()->hasAccess('Addadmin'))
						<li role="presentation"  class="active"> {!! link_to(route('Viewadmin.index'),"Lihat Data")!!}</li>
						<li role="presentation">{!! link_to(route('Addadmin.create'),"Isi Data")!!}</li>
						<li role="presentation">{!! link_to(route('logout'),"Logout")!!}</li>
						@else
						<li role="presentation"  class="active"> {!! link_to(route('Viewuser.index'),"Lihat Data(User)")!!}</li>
						<li role="presentation">{!! link_to(route('Adduser.create'),"Isi Data(User)")!!}</li>
						<li role="presentation">{!! link_to(route('logout'),"Logout")!!}</li>
						@endif
					@endif					
											
					</ul>
				</div>
			</div>			
		</div>
	</nav>
	
	<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">				
				<li><img src="{{asset('kereta/images/gambar1.jpg')}}" alt=""/></li>								
				<li><img src="{{asset('kereta/images/gambar2.jpg')}}" alt=""/></li>	
				<li><img src="{{asset('kereta/images/gambar3.jpg')}}" alt=""/></li>			
			</ul>
		</div>	
    </div>
    <div class="jumbotron">
		<h1>Pesan tiket  kereta dengan mudah</h1>
		<p>
		Dapatkan kemudahan memesan tiket melalui website ini <br>
		Hanya dengan data ktp anda sudah langsung dapat memesan tiket dengan mudah dan cepat
		</p>
	</div>
<?php
?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="{{asset('kereta/js/jquery-2.1.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('kereta/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('kereta/js/wow.min.js')}}"></script>
	<script src="{{asset('kereta/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('kereta/js/jquery.bxslider.min.js')}}"></script>
	<script src"{{asset('kereta/js/jquery.isotope.min.js')}}"></script>
	<script src="{{asset('kereta/js/fancybox/jquery.fancybox.pack.js')}}"></script>
	<script src="{{asset('kereta/js/functions.js')}}"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
</body>
</html>