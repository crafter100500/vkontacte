<?php 
	session_start();
 ?>
<?php  
$folder = 'img/';
$file_upload = $folder . basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'], $file_upload );	
$con = mysqli_connect('127.0.0.1', 'root','','vkontacte');
$ins = "INSERT INTO posts (text, img) VALUES ('".$_POST['text']."', '".$file_upload."') ";
mysqli_query($con, $ins);
header("Location: account.php");
?>