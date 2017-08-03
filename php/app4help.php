<?php
	
	$mailto = "wf_ali@mail.ru"; /* wf_ali@mail.ru */ /* everywhere777@yandex.ru */ /* pruzhina@mail.ru */
	/* $subject = "Заявка на помощь с сайта"; */
	
	$picture = "";
	if (!empty($_FILES['upload']['tmp_name'])) {
		$path = $_FILES['upload']['name'];
		if (copy($_FILES['upload']['tmp_name'], $path)) $picture = $path;
	}
	
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
	
	// sending letter
	if(empty($picture)) include('base-mail.php');
	else send_mail($mailto, $msg, $picture);
	
	// auxiliary function for sending letter with attachment
	function send_mail($to, $html, $path) {
		$fp = fopen($path,"r");
		if (!$fp) {
			print "Файл $path не может быть прочитан!";
			exit();
		}
		$file = fread($fp, filesize($path));
		fclose($fp);
		
		$boundary = "--".md5(uniqid(time())); // generate a separator
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
		$headers .= "From: \"".$_POST['name_addresser']."\" <".$_POST['phone'].">\r\n";
		$multipart .= "--$boundary\n";
		$kod = 'utf-8';
		$multipart .= "Content-Type: text/html; charset=$kod\n";
		$multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n";
		$multipart .= "$html\n\n";
		
		$message_part = "--$boundary\n";
		$message_part .= "Content-Type: application/octet-stream\n";
		$message_part .= "Content-Transfer-Encoding: base64\n";
		$message_part .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n";
		$message_part .= chunk_split(base64_encode($file))."\n";
		$multipart .= $message_part."--$boundary--\n";
		
		if(!mail($to, $thm, $multipart, $headers)) {
			header('Refresh: 5; url=/');
			include('f-msg-error.php');
		}
	}
	// Auto redirect to main page
	header('Refresh: 5; url=/');
	include('f-msg-ok.php');
?>