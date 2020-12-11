<?php 
	session_start();
 ?>
<?php  
$folder = 'img/';
$file_upload = $folder . basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'], $file_upload );	
$con = mysqli_connect('127.0.0.1', 'root','','vkontacte');
$upd = mysqli_query($con, "UPDATE users SET avatar='{$file_upload}' WHERE id='{$_SESSION['id']}'");
header("Location: account.php");
?>