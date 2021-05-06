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
        <div class="row" style="margin-top:200px;">
            <div class="col-8 mx-auto">
                <div class="row mb-4">
                    <h2 class="mx-auto">Выберите вашу специальность:</h2>
                </div>
                <div class="row mt-5" style="height:260px;">
                    <div class="col d-flex">
                        <a href="developer.php">
                            <button class="btn btn-spec">
                                Разработчик
                            </button>
                        </a>

                    </div>
                    <div class="col d-flex">
                        <a href="disign.php">
                            <button class="btn btn-spec">
                                Дизайнер
                            </button>
                        </a>
                    </div>
                    <div class="col d-flex">
                        <a href="manager.php">
                            <button class="btn btn-spec">
                                Менеджер
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
    </script>
</body>

</html>
