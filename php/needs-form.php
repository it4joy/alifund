	<script type="text/javascript">
		$(document).ready(function() {
			$("a.needs").fancybox();
		});
	</script>

	<!-- Needs-form -->
	<div class="popupbox" id="needs-form" style="display:none;">
		<div class="fullwidth">
			<h3 class="orderH3">Оставить заявку на помощь</h3>
		</div>

		<form action="php/app4help.php" method="post" enctype="multipart/form-data" id="order_form" target="_self">
			<fieldset>

				<ul>

					<div class="one-half fleft">
						<li>
							<input type="text" name="name_child" class="field" placeholder="ФИО ребенка">
						</li>

						<li>
							<input type="text" name="birthday" class="field" placeholder="Дата рождения">
						</li>

						<li>
							<input type="text" name="location" class="field" placeholder="Место проживания">
						</li>

						<li>
							<input type="text" name="diagnosis" class="field" placeholder="Диагноз на момент обращения">
						</li>
					</div>

					<div class="one-half fleft">
						<li>
							<input type="text" name="name_addresser" class="field" placeholder="ФИО обращающегося">
						</li>

						<li>
							<input type="text" name="cognation" class="field" placeholder="Родственная связь">
						</li>

						<li>
							<input type="text" name="phone" class="field" placeholder="Номер телефона (только цифры)">
						</li>

						<li>
							<input type="text" name="email" class="field" placeholder="E-mail">
						</li>
					</div>

					<div class="clearfix"></div>

				</ul>

				<div class="fullwidth">
					<label for="upload" class="file-upload">Прикрепить документ</label> <br>
					<input type="file" id="upload" class="addFile" name="upload"> <!-- multiple -->
				</div>

				<div class="fullwidth">
					<textarea class="message" name="msg" rows="3" placeholder="Ваш комментарий"></textarea>
				</div>

				<div class="fullwidth">
					<label for="verification" class="field-label">Сколько будет 5 + 2?</label> <br>
					<input type="text" name="verification" id="verification" class="field" placeholder="Введите ответ">
				</div>

				<div class="fullwidth">
					<button type="submit" class="form-order-btn"> <i class="fa fa-send"></i> Отправить</button>
					<button type="reset" class="form-order-btn" style="margin-left:12px;"> <i class="fa fa-eraser"></i> Очистить</button>
					<div class="clearfix"></div>
				</div>

			</fieldset>

		</form>
	</div>
	<!-- / Needs-form -->
