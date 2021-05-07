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

<body style="height:100vh;">


    <!--HEADER-->
    <nav class="navbar bg-light" style=";">
        <a class="navbar-brand" href="#">
            <!--<img src="img/logo.svg">--> LOGO
        </a>
    </nav>


    <!--Content-->
    <div class="col text-dark">
       <div class="row">
           <img src="img/%D1%82%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0.svg" class="w-75 mx-auto mt-5 img1" style="height:80vh;">
           <img src="img/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0%20(1).svg" class="w-75 mx-auto mt-5 img2" style="height:80vh;display:none;">
       </div>
    </div>
    <div class="silka" onclick="check1()">
               
    </div>
    <div class="silka2" onclick="check2()">
               
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        let score = 0;
        let silka1 = document.querySelector('.silka1')
        let silka2 = document.querySelector('.silka2')
        let img1 = document.querySelector('.img1')
        let img2 = document.querySelector('.img2')

        function check1() {
            img2.style.display = 'none'
            img1.style.display = 'block'
        }
        function check2() {
            img1.style.display = 'none'
            img2.style.display = 'block'
        }

    </script>
</body>

</html>
