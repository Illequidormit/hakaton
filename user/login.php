<!DOCTYPE HTML>
<html>
	<head>
		<title>Головна</title>
	</head>		
	<body>
	<form method = "POST">
		<input type = "text" placeholder="Логін" name ="login">
		<input type = "password" placeholder="Пароль" name ="password" ><br>
		<input class="button" type = "submit" name ="enter" value = "Ввійти"><br>
	</form>
	<a href = "registration.php">Реєстрація</a><br>
		<?php				
			if(isset($_POST['enter']))
				if(!empty($_POST['login']) && !empty($_POST['password'])){
				include('../classes/Userdata.php');
				$db = new Userdata();
				$db->enter($_POST['login'],$_POST['password']);
				}
			else{
				echo "Заповніть поля для реєстрації";
			}
		?>
	</body>

</html>