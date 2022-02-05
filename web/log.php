<?php include "assets/header.html";?>
<form method="POST">
<div class="container log">
		<h2>Авторизация</h2>
		<div>
			 <label for="title_post">Введите логин</label>
			<input type="text" name="login">
		</div>

		<div>
			 <label for="title_post">Введите пароль</label>
			<input type="text" name="pass">
		</div>
		<div>
			<button class="reg" type="submit">Войти</button>
		</div>
	</div>
</form>
<?php
	$conn = mysqli_connect("localhost", "root", "root", "web-php");
	$login= $_POST['login'];
	$password= $_POST['pass'];
	echo $login, " ", $password;
    $query = mysqli_query($conn,"SELECT login, password FROM registration WHERE login=('$login')");
    $data = mysqli_fetch_assoc($query);
    if($data['password'] == ($_POST['pass']))
    {
       echo "Успешный вход!";
    }else
    {
        echo "Вы ввели неправильный логин/пароль!";
    }

?>