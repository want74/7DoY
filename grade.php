<?php 
session_start();
$_SESSION['session_username']= $_SESSION['session_username'];
include 'connect.php';

$query2 = mysqli_query($connect, "UPDATE users SET description = '".$_POST['description']."' WHERE id =".$_SESSION['session_username']); 
?>
<?php
    session_start();
    $_SESSION['session_username'] = $_SESSION['session_username'];
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
    <div class="col text-white">
        <div class="row" style="margin-top:50px;">
            <div class="col-5 mx-auto bg-white blueLine">
                <div class="row text-dark">
                    <div class="col">
                        <div class="row mt-5">
                            <h1 class="testHeader mx-auto">Наши предложения:</h1>
                        </div>
                        <div class="row" style="height:300px;">
                            <div class="col">
                                <div class="row">
                                    <h3 class="ml-4">У вас <?php echo $_POST['score']; ?>/3 баллов.</h3>
                                </div>
                                <div class="row">
                                    <h4 class="ml-3"><br>Мы вам предлагаем <?php if ($_POST['score']==3){echo"двух недельный интесив";}else{echo"один учебный год обучений по специализации";}; ?> <br><br>Наши люди с вами свяжутся</h4>
                                </div>
                                <div class="row">
                                    <a href="index.php" class="mx-auto">
                                        <button class="btn  btn-ourColor text-white mt-5" style="width:100px;">
                                            OK
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--<form action="grade.php" method="post">
                            <div class="row test">
                                <input type="text" name="score" class="score d-none">
                                <input type="text" name="role" class="d-none" value="1">
                                <button class="btn btn-ourColor mx-auto mt-4 mb-5 text-white">
                                    Отправить
                                </button>
                            </div>
                        </form>-->
                    </div>
                </div>
            </div>
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
