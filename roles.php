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

<body style="">


    <!--HEADER-->
    <nav class="navbar" style="background:#30D8F8;">
        <a class="navbar-brand" href="#">
            <!--<img src="img/logo.svg">--> LOGO
        </a>
    </nav>


    <!--Content-->
    <div class="col">
        <div class="row" style="margin-top:130px;">
            <div class="col-7 mx-auto">
                <div class="row" style="height:260px;">
                    <div class="col d-flex developer">
                       <img src="img/%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1.svg" class="developer" data-toggle="modal" data-target="#Description">
                       <img src="img/Group%2045.svg" class="developer" data-toggle="modal" data-target="#manager">
                       <img src="img/Group%2047.svg" class="developer" data-toggle="modal" data-target="#disign"> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Description" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Мой опыт:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="zayavka.php" method="post">
                        <div class="form-group">
                            <textarea class="form-control" id="message-text" name="description" rows="10"></textarea>
                            <input type="text" name="role" class="role d-none" value="1">
                        </div>
                        <button class="btn btn-success" style="background:#FFBD00;">Отправить</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="manager" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Мой опыт:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="zayavka.php" method="post">
                        <div class="form-group">
                            <textarea class="form-control" id="message-text" name="description" rows="10"></textarea>
                            <input type="text" name="role" class="role d-none" value="2">
                        </div>
                        <button class="btn btn-success" style="background:#6CD4E2;">Отправить</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="disign" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Мой опыт:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="zayavka.php" method="post">
                        <div class="form-group">
                            <textarea class="form-control" id="message-text" name="description" rows="10"></textarea>
                            <input type="text" name="role" class="role d-none" value="3">
                        </div>
                        <button class="btn btn-success" style="background:#EA43E3;">Отправить</button>

                    </form>
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
