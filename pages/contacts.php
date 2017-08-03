<!DOCTYPE html>
<html lang="ru">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="copyright" content="" />

	<title>Благотворительный фонд помощи детям с ДЦП "Али"</title>
	
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Add favicons for iphones ! -->
	
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" /> <!--FancyBox-->
	
	<!-- Scripts -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript">
	
		function initialize() {
		  var myLatlng = new google.maps.LatLng(56.140765,47.22956);
		  var mapOptions = {
			zoom: 15,
			center: myLatlng,
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			markers: marker
		  }
		  var map = new google.maps.Map(document.getElementById('canvas-map'), mapOptions);

		  var image = 'img/map-marker.png';
		  
		  var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map,
			  title: "Благотворительный фонд помощи детям с ДЦП «Али»",
			  icon: image
		  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);

    </script>
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- <script type="text/javascript">
		toTop script
	</script> -->

</head>

<body>
  <div class="page-wrapper">
  
	<?php require_once('php/header.php'); ?>
	
	<div class="container">
		
			<div class="row">
				<div class="breadcrumbs">
					<p><a href="index.html">Главная</a><i class="fa fa-chevron-right news-bc-i"></i>Контакты</p>
				</div>
			</div>
			
				<div class="two-third fleft">
					<div id="canvas-map"></div>
				</div>
				
				<div class="one-third fleft">
					<h5 class="mbot-h">Свяжитесь с нами!</h5>
					<p class="mbot20"><i class="fa fa-mobile fa-red-sq"></i>8 (906) 136-87-22</p>
					<p class="mbot20"><i class="fa fa-phone fa-red-sq"></i>8 (8352) 22-68-80</p>
					<p class="mbot20"><i class="fa fa-map-marker fa-red-sq"></i>428018, Чебоксары, ул. Ак. Крылова, 7</p>
					<p class="mbot20"><i class="fa fa-envelope fa-red-sq"></i><a href="mailto:wf_ali@mail.ru">wf_ali@mail.ru</a></p>
					<p><i class="fa fa-vk fa-red-sq"></i><a href="http://vk.com/public50285202" target="_blanc">Мы Вконтакте</a></p>
				</div>
		
			<div class="clearfix"></div>
			
	</div> <!-- /.container -->
	
	<?php require_once('php/needs-form.php'); ?>
	
	<div class="page-buffer"></div>
  </div>
	
	<?php require_once('php/footer-scripts.php'); ?>

</body>

</html>