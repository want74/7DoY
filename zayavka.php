<?php 
session_start();
$_SESSION['session_username']= $_SESSION['session_username'];
include 'connect.php';

$query2 = mysqli_query($connect, "UPDATE users SET description = '".$_POST['description']."' WHERE id =".$_SESSION['session_username']); 
header('Location: cours.php');
?>
<meta charset="utf-8">