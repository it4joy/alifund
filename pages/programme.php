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
					<p><a href="index.html">Главная</a><i class="fa fa-chevron-right news-bc-i"></i>Благотворительная программа</p>
				</div>
			</div>
				
				<div class="fullwidth">
					<h5 class="mbot-h">Благотворительная программа</h5>

                    <div class="block mbot20">
						<h6 class="inline"><i class="fa fa-download mright10"></i><a href="docs/programme/Charity_program-2018.pdf" target="_blanc">Благотворительная программа на 2018 год (посмотреть / скачать).</a></h6>
					</div>

					<div class="block mbot20">
						<h6 class="inline"><i class="fa fa-file-text mright10"></i><a rel="group" href="docs/programme/Charity_program-2017-h1000.jpg" title="Благотворительная программа на 2017 год.">Благотворительная программа на 2017 год.</a></h6>
						<h6 class="inline mleft16"><i class="fa fa-download mright10"></i><a href="docs/programme/Charity_program-2017.pdf" target="_blanc">Скачать</a></h6>
					</div>
					
					<div class="block mbot20">
						<h6 class="inline"><i class="fa fa-file-text mright10"></i><a rel="group" href="docs/programme/Charity_program-2016-h1000.jpg" title="Благотворительная программа на 2016 год.">Благотворительная программа на 2016 год.</a></h6>
						<h6 class="inline mleft16"><i class="fa fa-download mright10"></i><a href="docs/programme/Charity_program-2016.pdf" target="_blanc">Скачать</a></h6>
					</div>
					
					<div class="block mbot20">
						<h6 class="inline"><i class="fa fa-file-text mright10"></i><a rel="group" href="docs/programme/Charity_program-2015-h1000.jpg" title="Благотворительная программа на 2015 год.">Благотворительная программа на 2015 год.</a></h6>
						<h6 class="inline mleft16"><i class="fa fa-download mright10"></i><a href="docs/programme/Charity_program-2015.pdf" target="_blanc">Скачать</a></h6>
					</div>
					
					<div class="block mbot20">
						<h6 class="inline"><i class="fa fa-file-text mright10"></i><a rel="group" href="docs/programme/Charity_program-2014-h1000.jpg" title="Благотворительная программа на 2014 год.">Благотворительная программа на 2014 год.</a></h6>
						<h6 class="inline mleft16"><i class="fa fa-download mright10"></i><a href="docs/programme/Charity_program-2014.pdf" target="_blanc">Скачать</a></h6>
					</div>
					
				</div>
		
			<div class="clearfix"></div>
			
	</div> <!-- /.container -->
	
	<?php require_once('php/needs-form.php'); ?>
	
	<div class="page-buffer"></div>
  </div>
	
	<?php require_once('php/footer-scripts.php'); ?>
	
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("a[rel=group]").fancybox({
				'transitionIn' : 'none',
				'transitionOut' : 'none',
				'titlePosition' : 'over',
				'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
				return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? '   ' + title : '') + '</span>';
				}
			});
		});
	</script>

</body>

</html>