<?php 
	include 'connect.php';
    $query = mysqli_query($connect,"SELECT * FROM users");
	$row=$query->fetch_assoc();

    if (!empty($_POST['nickName']) && !empty($_POST['password'])) {
		if ($_POST['nickName'] == $row['nickName']) {
		  echo "К большому сожалению, такой ник уже занят";
		}
		else{
            $query2 = mysqli_query($connect, "INSERT INTO users ( fullName, nickName, rating, description, avatar, password ) VALUES ('". $_POST['fullName'] . "','". $_POST['nickName'] . "','','','". $_FILES['avatar']['name'] . "','". $_POST['password'] . "')");            
	       move_uploaded_file($_FILES['avatar']['name'], $_FILES['avatar']['tmp_name']);
            header("Location: index.php");
            echo"ok";
		}	
	}
	else {
		echo "Проверте всё ли вы написали правильно?";
	}
 ?>
<meta charset="UTF-8">