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
	
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/scrollbar.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" /> <!--FancyBox-->
	
	<!-- Scripts -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.js"></script>
	
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Add favicons for iphones ! -->
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- <script type="text/javascript">
		toTop script
	</script> -->

</head>

<body id="news-page">
  <div class="page-wrapper">
  
	<?php require_once('php/header.php'); ?>
	
	<div class="container">
		
			<div class="row">
				<div class="breadcrumbs">
					<p><a href="index.html">Главная</a><i class="fa fa-chevron-right news-bc-i"></i>Новости</p>
				</div>
			</div>
		
		<div class="twitter-container">
			
			<a class="twitter-timeline" href="https://twitter.com/WelfareFund_Ali" data-widget-id="536643072315379712">Твиты от @WelfareFund_Ali</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			
			
			<script type="text/javascript">
				$(function () {      
					var $cont = $(".twitter-container"),
					prd = setInterval(function () {
						if ($cont.find("> iframe").contents().find(".twitter-timeline").length > 0) {
							var $body = $cont.find("> iframe").contents().find("body");
							clearInterval(prd)
							$body.attr("id", "twitterStyled")
							.append($("#twitterStyle"));
						}
					}, 100);
				});
				
				$body.attr("id", "twitterStyled")
				.append($("#twitterStyle"));
			</script>
			
			<style type="text/css" id="twitterStyle">
				#twitterStyled a:link {text-decoration: none;}
				
				#twitterStyled a:hover {text-decoration: none;}
				
				#twitterStyled .tweet {
					padding: 10px;
					margin: 10px;
					border-radius: 6px;
					background-color: #fff;
					color: #333;
				}
				
				#twitterStyled .tweet:nth-child(odd) {
					
				}
				
				#twitterStyled .tweet:nth-child(even) {
					
				}
				
				#twitterStyled .profile > img {
					display: none;
				}
				
				#twitterStyled .tweet .tweet-actions {
					
				}
				
				#twitterStyled .tweet:hover .tweet-actions {
					visibility: visible;
				}
				
				#twitterStyled .tweet-actions a:hover .ic-mask, a:focus .ic-mask {background-color:#f06;}
				
				#twitterStyled .stream {
					background-color: #f06;
					color: #666;
				}
				
				#twitterStyled .header {
					border-bottom: 1px solid #fff;
					margin-bottom: 10px;
					padding-bottom: 5px;
				}
				
				#twitterStyled .p-name {color: #2c7fce;}
				
				#twitterStyled .p-name:hover {color: #f06;}
				
				#twitterStyled .p-nickname, #twitterStyled .dt-updated {color: #2c7fce;}
				
				#twitterStyled .p-nickname:hover, #twitterStyled .dt-updated:hover {color: #f06;}
				
				a.customisable:link {color: #2c7fce;}
				
				a.customisable:focus, a.customisable:hover {color: #f06;}
				
				button.load-more {
					box-shadow: none;
					text-shadow: none;
					background: #faac72;
					font-weight: bold;
					color: #000;
				}
				button.load-more:hover {
					background: #000;
					color: #fff;
				}
			</style>
		</div> <!-- /.twitter-container -->
		
		<div class="news-bottom_btn">
			<a href="gallery.php" class="default_btn news_btn"><i class="fa fa-image"></i>Перейти в галерею</a>
		</div>
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