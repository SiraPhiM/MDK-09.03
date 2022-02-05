<?php include "assets/header.html";?>
<form method="POST">
<div class="container reg">
		<h2>Регистрация</h2>
		<div>
			 <label for="title_post">Введите логин</label>
			<input type="text" name="login">
		</div>
		<div>
			 <label for="title_post">Введите е-майл</label>
			<input type="text" name="email">
		</div>
		<div>
			 <label for="title_post">Введите пароль</label>
			<input type="text" name="pass">
		</div>
		<div>
			 <label for="title_post">Подтвердите пароль</label>
			<input type="text" name="anpass">
		</div>
		<div>
			<button class="reg" type="submit">Зарегистрироваться</button>
		</div>
	</div>
</form>
<?php
	$conn = mysqli_connect("localhost", "root", "root", "web-php");

	$login= $_POST['login'];
	$email= $_POST['email'];
	$password= $_POST['pass'];
echo $login,' ', $email, ' ', $password;
	$result = mysqli_query(
            $conn,
            "INSERT INTO registration (`login`,`email`,`password`) VALUES ('$login','$email','$password')");
    echo ($result);
 ?>
