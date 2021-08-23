<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Feedback</title>
	</head>

	<body>

		<!-- подключение Vue.js -->
		<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

		<form id="read" method="POST" action="feedback.php">
			Как Вас зовут?
			<br>
			<input v-on:input="read_name ($event.target.value)" type="text" placeholder="ФИО" name="name" required>
			{{ name }}
			{{ phone }}
			{{ dom }}
			<br>
			Куда нам слать для Вас валентинки?
			<br>
			<input type="text" placeholder="Адрес" name="adres" >
			<br>
			Как с Вами можно связатся?
			<br>
			<input type="text" placeholder="email" name="email">
			<input v-on:input="read_dom ($event.target.value)" type="text" placeholder="почтовый домен (@gmail.com)" name="dom">

			<br>
			<input v-on:input="read_phone ($event.target.value)" type="text" placeholder="Мобильный телефон" name="phone" required>
			<br>
			Оставьте свой отзыв:
			<br>
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

			$name = $_POST['name'];//Извлечение данных из суперглобального массива _POST
			$adres = $_POST['adres'];
			$email = $_POST['email'];
			$dom = $_POST['dom'];
			$phone = $_POST['phone'];
			$comment = $_POST['comment'];
			$file = $_POST[''];

			if($dom == "@gmail.com"){
				exit();
			}
			if($name != '' and $phone != "")
			{
				$count_comment = mysqli_query($connection, "INSERT INTO `feedback` (`comment`, `name`, `adres`, `email`, `phone`) VALUES ('$comment', '$name', '$adres', '$email', '$phone')");
			} else{
				exit();
			}
		?>
	</body>
</html>