<?php

$mailto = "wf_ali@mail.ru"; /* wf_ali@mail.ru */ /* everywhere777@yandex.ru */ /* pruzhina@mail.ru */
$charset = "utf-8";
$subject = "Заявка на помощь с сайта";
$content = "text/html";
	
if (!empty($_POST)) {
	
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: ".$content." charset=".$charset."\r\n";
	$headers .= "From: \"".$_POST['name_addresser']."\" <".$_POST['phone'].">\r\n";

	$msg = "<html><body>
		<p><b>ФИО ребенка:</b> ".$_POST['name_child']."</p>
		<p><b>Дата рождения:</b> ".$_POST['birthday']."</p>
		<p><b>Место проживания:</b> ".$_POST['location']."</p>
		<p><b>Диагноз на момент обращения:</b> ".$_POST['diagnosis']."</p>
		<p><b>ФИО обращающегося:</b> ".$_POST['name_addresser']."</p>
		<p><b>Родственная связь:</b> ".$_POST['cognation']."</p>
		<p><b>Номер телефона:</b> ".$_POST['phone']."</p>
		<p><b>E-mail:</b> ".$_POST['email']."</p>
		<p><b>Комментарий отправителя:</b> ".$_POST['msg']."</p>
		</body></html>";
	$msg = strip_tags($msg, '<p><a></br><b>');

	if (mail($mailto, $subject, $msg, $headers)) {
		header('Refresh: 5; url=/');
		include('f-msg-ok.php');
	}
	else {
		header('Refresh: 5; url=/');
		include('f-msg-error.php');
	}
	
}
	
?>