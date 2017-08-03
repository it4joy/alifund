<!DOCTYPE html>
<html lang="ru">
<head>
<style type="text/css">
.msg-page {
	width: 100%;
	height: 100%;
}
.msg-success {
	width: 500px;
	height: 200px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -100px;
	margin-left: -250px;
	box-sizing: border-box;
	padding: 30px 20px 20px;
	text-align: center;
	background: #fff;
	border-radius: 8px;
	border: 1px solid red;
	font-family: 'Century Gothic', Tahoma, sans-serif;
	color: red;
}
a.f-msg-error-a {
	text-decoration: none;
	color: #2c7fce;
}
a.f-msg-error-a:hover {color: red;}
</style>
</head>

<body>
<div class="msg-page">
	<div class="msg-success">
		<p>Возникла ошибка при отправке формы!</p>
		<p>Напишите нам на почту: <a class="f-msg-error-a" href="mailto:wf_ali@mail.ru">wf_ali@mail.ru</a></p>
		<p>Сейчас вы вернетесь на Главную страницу.</p>
	</div>
</div>
</body>

</html>