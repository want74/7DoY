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
                            <h1 class="testHeader mx-auto">Тест</h1>
                        </div>
                        <div class="row">
                            <p class="mx-auto">Тест определит твой уровень знаний для менеджера.</p>
                        </div>
                        <div class="row">
                            <div class="col-11 mx-auto">
                                <div class="row overflow" style="height:350px;">
                                    <div class="card w-100 mt-3">
                                        <div class="card-body">
                                            <p class="card-text">Сессия — это механизм для сохранения информации на разных веб-страницах для идентификации пользователей пока они бродят по сайту или приложению?</p>
                                            <a href="#" class="btn btn-light" onclick="plusScore()">Да</a>
                                            <a href="#" class="btn btn-light">Нет</a>
                                            <a href="#" class="btn btn-light">Не знаю</a>
                                        </div>
                                    </div>
                                    <div class="card w-100 mt-3">
                                        <div class="card-body">
                                            <p class="card-text">GET отправляет данные для обработки (например, из формы HTML) в идентифицированный ресурс.</p>
                                            <a href="#" class="btn btn-light">Да</a>
                                            <a href="#" class="btn btn-light" onclick="plusScore()">Нет</a>
                                            <a href="#" class="btn btn-light">Не знаю</a>
                                        </div>
                                    </div>
                                    <div class="card w-100 mt-3">
                                        <div class="card-body">
                                            <p class="card-text">Git — это простой и удобный таск-трекер(онлайн доска заданий). </p>
                                            <a href="#" class="btn btn-light">Да</a>
                                            <a href="#" class="btn btn-light" onclick="plusScore()">Нет</a>
                                            <a href="#" class="btn btn-light">Не знаю</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="grade.php" method="post">
                            <div class="row test">
                                <input type="text" name="score" class="score d-none">
                                <input type="text" name="role" class="d-none" value="1">
                                <button class="btn btn-ourColor mx-auto mt-4 mb-5 text-white">
                                    Отправить
                                </button>
                            </div>
                        </form>
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