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
					<p><a href="index.html">Главная</a><i class="fa fa-chevron-right news-bc-i"></i>Хочу помочь!</p>
				</div>
			</div>
				
				<div class="fullwidth">
					<h5 class="mbot-h">Хочу помочь!</h5>
					<!-- Yandex.CashBox Payment Form -->
					<form name="ShopForm" method="POST" action="https://money.yandex.ru/eshop.xml" id="order_form">
						<div class="one-half fleft">
							<input type="hidden" name="ShopID" value="28812">
							<input type="hidden" name="scid" value="18839">
							
							<label for="CustomerNumber" class="ya-cashbox-field-label">Идентификатор клиента (введите номер сотового телефона):</label><br>
							<input type="text" name="CustomerNumber" size="43" class="field"> <!-- 'size' and below - delete them?.. -->
							
							<label for="Sum" class="ya-cashbox-field-label">Сумма:</label><br>
							<input type="text" name="Sum" size="43" class="field">
							
							<label for="CustName" class="ya-cashbox-field-label">Ф.И.О.:</label><br>
							<input type="text" name="CustName" size="43" class="field">
							
							<!-- Адрес доставки:<br>
							<input type=text name="CustAddr" size="43"> <br><br> -->
							
							<label for="CustEmail" class="ya-cashbox-field-label">E-mail:</label><br>
							<input type="text" name="CustEmail" size="43" class="field">
							
							<!-- Содержание заказа:<br>
							<textarea rows="10" name="OrderDetails" cols="34"></textarea><br><br> -->
						</div>
						
						<div class="one-half fleft">
							<fieldset>
								<legend class="ya-cashbox-field-label">Способ оплаты:</legend>
								<p class="ya-cashbox-field"><input name="paymentType" value="PC" type="radio">Оплата со счета в Яндекс.Деньгах</p>
								<p class="ya-cashbox-field"><input name="paymentType" value="AC" type="radio">Оплата банковской картой</p>
								<p class="ya-cashbox-field"><input name="paymentType" value="GP" type="radio">Оплата по коду через терминал</p>
								<p class="ya-cashbox-field"><input name="paymentType" value="WM" type="radio">Оплата cо счета WebMoney</p>
								<p class="ya-cashbox-field"><input name="paymentType" value="AB" type="radio">Оплата через Альфа-Клик</p>
								<p class="ya-cashbox-field"><input name="paymentType" value="SB" type="radio">Оплата через Сбербанк: оплата по SMS или Сбербанк Онлайн</p>
							</fieldset>
							<input type="submit" value="Оплатить" class="form-order-btn"><br>
						</div>
						<div class="clearfix"></div>
					</form>
					<!-- Yandex.CashBox Payment Form -->
				</div>
			
	</div> <!-- /.container -->
	
	<?php require_once('php/needs-form.php'); ?>
	
	<div class="page-buffer"></div>
  </div>
	
	<?php require_once('php/footer-scripts.php'); ?>

</body>

</html>