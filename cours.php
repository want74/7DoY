<?php
    session_start();
    $_SESSION['session_username'] = $_SESSION['session_username'];
    include 'connect.php';
    $query = mysqli_query($connect,"SELECT * FROM users where id = '".$_SESSION['session_username']."'");
    $row=$query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>7DoY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background:cyan;">


    <!--HEADER-->
    <nav class="navbar" style="background:#30D8F8;">
        <a class="navbar-brand" href="#">
            <!--<img src="img/logo.svg">--> LOGO
        </a>
    </nav>


    <!--Content-->
    <div class="row">
        <div class="col-8 mx-auto bg-light">
            <div class="row" style="height:300vh;">
                <div class="col-2 mx-auto">
                    <div class="row d-flex" style="">
                        <div class="line mx-auto"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="rangCircle mx-auto rang1">
                                <h1 class="mx-auto my-auto text-danger">1</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex" style="">
                        <div class="line mx-auto"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="rangCircle mx-auto rang2 disabled">
                                <h1 class="mx-auto my-auto text-danger">2</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex" style="">
                        <div class="line mx-auto"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="rangCircle mx-auto rang3">
                                <h1 class="mx-auto my-auto text-danger">3</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex" style="">
                        <div class="line mx-auto"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="rangCircle mx-auto rang4">
                                <h1 class="mx-auto my-auto text-danger">4</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        let rang1 = document.getElementsByClassName('rang1');
        let rang2 = document.getElementsByClassName('rang2');
        let rang3 = document.getElementsByClassName('rang3');
        let rang4 = document.getElementsByClassName('rang4');

        let myRang = <?php echo $row['rating'] ?>;
        console.log(myRang)
        if (myRang == 2) {
            console.log('у вас второй ранг')
        }
        else if (myRang == 3) {
            console.log('у вас третий ранг')
        }

    </script>
</body>

</html>
