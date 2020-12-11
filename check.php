<?php  
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vkontacte');
	$query = mysqli_query($con, "SELECT * FROM users WHERE phone='{$_POST['phone']}' AND password='{$_POST['password']}'");
	$res = $query->fetch_assoc();

	$_SESSION['id'] = $res['id'];

	$num = mysqli_num_rows($query);
	if ($num == 0) {
		header("Location:index.php?text=Нет такого пользователя");
	}
	else
	{
		header("Location:account.php");
	}
?>