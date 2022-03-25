<?php

include('../config/db_connect.php');
if(isset($_GET['id'])){
    $id =  mysqli_real_escape_string($conn, $_GET['id']);

    

    $sql = "SELECT * FROM heroes WHERE heroId = $id";

    $result = mysqli_query($conn, $sql);

    $hero = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    
    
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;500;600&family=Reggae+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <!-- <div class="hero">

        <div class="logo">
            <a href="#"><span>GW17</span></a>
        </div>

        <div class="nav-toggler">
            <span></span>
        </div>

        <ul class="nav">
            <li><a href="./index.html" class="nav-item" class="active">Home</a></li>
            <li><a href="./html/about.html" class="nav-item">Heroes</a></li>
            <li><a href="./html/portfolio.html" class="nav-item">Register</a></li>
            <li id="login-btn"><a href="./html/login.html" class="tap-login" class="nav-item">Login</a></li>
            <li id="logout-btn"><a href="#" class="tap-login" onclick="logout()">Logout</a></li>
        </ul>

    </div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 fixedbar">
                <nav class="navbar">
                    <div class="navbar-brand">
                        GW17
                    </div>

                    <div class="hamburger" id="nav-toggle" name="menu-outline">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>

                    <ul class="nav">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Heroes</a>
                        </li>
                        <li class="nav-item">
                            <a href="./register.html" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="./login.html" class="nav-link">Login</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>

        <div class="row">
            <div class="more-info">
                <div class="header-hero">
                    <h4>Hero</h4>
                </div>
                <div class="detail-info">
                    <div class="row">
                        <div class=" image col-4">
                            <img src="../images/proffessor-X" alt="">
                        </div>
                        <div class="detail col-7">
                            <a href="./hero-detail.html" class="hero-name"><?php echo htmlspecialchars(($hero['hero_name'])); ?></a>
                            <div class="short-bio">
                                <p><span><?php echo htmlspecialchars(($hero['real_name'])); ?></a></span> 
                                    <?php echo htmlspecialchars(($hero['short_bio'])); ?>
                                </p>
                            </div>

                            <div class="long-bio">
                                <p>
                                    <?php echo htmlspecialchars(($hero['long_bio'])); ?>
                                </p>
                            </div>

                            <div class="time-stamp">
                                <h5>Created at: <span>20.03.2022 11:33: 45</span></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="row">
            <footer>
                <p>Copyright &copy; 2019 Web Development Assignment</p>
            </footer>
        </div>

    </div>
</body>

</html>