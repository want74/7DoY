<?php
    session_start();
    include 'connect.php';
    $_SESSION['session_username'] = $_SESSION['session_username'];    
    $query = mysqli_query($connect,"SELECT * FROM users WHERE id =".$_SESSION['session_username']);
	$numberTeam=$query->fetch_assoc();
    
    $query1 = mysqli_query($connect,"SELECT * FROM users WHERE team =".$numberTeam['team']);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>7DoY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="height:100%;">


    <!--HEADER-->
    <nav class="navbar bg-light" style=";">
        <a class="navbar-brand" href="#">
            <!--<img src="img/logo.svg">--> LOGO
        </a>
    </nav>


    <!--Content-->
    <div class="col text-dark">
       <div class="row mt-5">
            <h1 class="mx-auto text-white">Моя команда:</h1>
        </div>
        <div class="row" style="height:auto;margin-top:70px;">
            <?php
	 		for ($i=0; $i < $query1->num_rows; $i++) { 
	 			$row=$query1->fetch_assoc();
	 		
	 		?>
            <div class="card mx-auto" style="width: 19rem;height:530px;border-radius:20px;">
                <img src="<?php echo $row['avatar'];  ?>" style="height:65%;">
                <div class="card-body">
                    <div class="row">
                        <p class="card-title mx-auto fio"><?php echo $row['fullName'];  ?></p>
                    </div>
                    <p class="card-text"><?php echo $row['description'];  ?></p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <?php }; ?>
        </div>
        <div class="row mt-5">
            <h1 class="mx-auto text-white">Мои кураторы:</h1>
        </div>
        <div class="row" style="height:auto;margin-top:70px;">
            <?php
            
            $kurator = mysqli_query($connect,"SELECT * FROM kurators WHERE project =".$numberTeam['team']);
	 		for ($x=0; $x < $kurator->num_rows; $x++) { 
	 			$row2=$kurator->fetch_assoc();
	 		
	 		?>
            <div class="card mx-auto" style="width: 19rem;height:530px;border-radius:20px;">
                <img src="<?php echo $row2['avatar'];  ?>" style="height:65%;">
                <div class="card-body">
                    <div class="row">
                        <p class="card-title mx-auto fio"><?php echo $row2['fullName'];  ?></p>
                    </div>
                    <p class="card-text"><?php echo $row2['description'];  ?></p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        let score = 0;
        let test = document.querySelector('.score')

        function plusScore() {
            score++
            test.value = score;
            console.log(score)
        }

    </script>
</body>

</html>
