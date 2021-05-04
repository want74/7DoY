<?php 
session_start();
include 'connect.php';
$query = mysqli_query($connect,"SELECT * FROM users where nickName = '".$_POST['nickName']."'");
$row=$query->fetch_assoc();
if (!empty($_POST['nickName']&& $_POST['nickName']== $row['nickName']) ) {
	if ($_POST['password'] == $row['password']) {
        $_SESSION['session_username']= $row['id'];
		header('Location: roles.php');
        echo $_SESSION['session_username'];
	}else{
	echo "К сожалению что-то пошло не так. Возможно вы ввели не правильно ник или пароль";
}

	
}else{
	echo "К сожалению что-то пошло не так. Возможно вы ввели не правильно ник или пароль";
}

?>    
<meta charset="utf-8">