<!DOCTYPE HTML>
<html>
	<head>
		<title>Головна</title>
		<script src="app.js"></script>
	</head>		
	<body>
		<form method = "POST">
			<input type = "text" placeholder="Логін" name ="login">
			<input type = "password" placeholder="Пароль" name ="password" ><br>
			<input type = "mail" placeholder="Пошта" name ="mail" ><br>
			<input class="button" type = "submit" name ="Sign_up" value = "Зареєструватися"><br>
			<div id="checkResult"></div>
		</form>
		<?php				
			if(isset($_POST['Sign_up']))
				if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['mail'])){
				include('Database.php');
				$db = Database::getInstance();
				$db->createUser($_POST['login'],$_POST['password'],$_POST['mail']);
				}
			else{
				echo "Заповніть поля для реєстрації";
			}
		?>
	</body>

</html>