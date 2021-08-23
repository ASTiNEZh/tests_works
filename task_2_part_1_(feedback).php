<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Feedback</title>
	</head>

	<body>

			<!-- подключение Vue.js -->
		<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

		<form id="form" method="POST" action="feedback.php">
				<!-- Поле: ФИО (с проверкой на клиенте через фрейм Vue.js)-->
			Как Вас зовут?
			<br>
			<input v-on:input="read_name ($event.target.value)" type="text" placeholder="ФИО" name="name" required>
			<br>
				<!-- Поле: Адрес -->
			Куда нам слать для Вас валентинки?
			<br>
			<input type="text" placeholder="Адрес" name="adres" >
			<br>
				<!-- Поле: Контакты (с проверкой на клиенте через фрейм Vue.js)-->
			Как с Вами можно связатся?
			<br>
			<input type="text" placeholder="email" name="email">
			<input v-on:input="read_dom ($event.target.value)" type="text" placeholder="почтовый домен (@gmail.com)" name="dom">
			<br>
			<input v-on:input="read_phone ($event.target.value)" type="text" placeholder="Мобильный телефон" name="phone" required>
			<br>
			Оставьте свой отзыв:
			<br>
				<!-- Feedback -->
			<textarea name="comment" cols="100" rows="10"></textarea>
			<br>
			<input type="file" placeholder="Имя файла для отправки" name="file">
			<br>
			<input v-on:click="chek" type="submit" value="Send">
		</form>
		<script type="text/javascript" src="feedback.js"></script>
	</body>

		<?php

			include('connection_to_db.php'); //подключение к БД

			$name = $_POST['name']; //Извлечение данных из суперглобального массива _POST
			$adres = $_POST['adres'];
			$email = $_POST['email'];
			$dom = $_POST['dom'];
			$phone = $_POST['phone'];
			$comment = $_POST['comment'];
			$file = $_POST['file'];

			if($dom == "@gmail.com") //Серверная проверка домена почты
			{ 
				exit();
			}
			if($name != '' and $phone != "") //Серверная проверка пустых полей
			{
				$count_comment = mysqli_query($connection, "INSERT INTO `feedback` (`comment`, `name`, `adres`, `email`, `phone`, `file`) VALUES ('$comment', '$name', '$adres', '$email', '$phone', '$file')");
			} else{
				exit();
			}
		?>
	</body>
</html>
