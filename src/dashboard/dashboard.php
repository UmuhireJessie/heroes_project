<?php

include ('../../config/db_connect.php');

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
        <div class="main-content">
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
                                <a href="./dashboard.html" class="nav-link active">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="../index.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="./viewhero.html" class="nav-link">View</a>
                            </li>
                            <li class="nav-item">
                                <a href="./addhero.html" class="nav-link">Add</a>
                            </li>
                            <li class="nav-item">
                                <a href="./register.html" class="nav-link">Update</a>
                            </li>
                            <li class="nav-item">
                                <a href="./login.html" class="nav-link">Login</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

            <div class="row">
                <div class="hero-title">
                    <h4>Heroes List</h4>

                </div>

                <?php 
                    $sql = "SELECT * FROM heroes";
                    $result = mysqli_query($conn, $sql); 
                ?>

                <div class="parent-item">
                    <?php
                        if ($result) {
                            foreach ($result as $row) {
                    ?>
                    <div class="image-item">
                        <div class="row">
                            <div class=" image col-2">
                                <img src="<?php echo "images/".$row['hero_image'] ?>" alt="">
                            </div>
                            <div class="detail col-9">
                                <a href="./hero-detail.html" class="hero-name"><?php echo $row['hero_name'] ?></a>
                                <div class="short-bio">
                                    <p>
                                        <span><?php echo $row['real_name'] ?></span> 
                                        <?php echo $row['short_bio'] ?>
                                    </p>
                                    <a href="#" class="delete">Delete</a>
                                    <a href="./updatehero.html" class="update">Update</a>
                                    <a href="./viewhero.html" class="view">View</a>    
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                    } else {
                        echo "no record found";
                    }
                    ?>
                    </div>
                    

                    <div class="image-item">

                        <div class="row">
                            <div class=" image col-2">
                                <img src="../../images/cyclops" alt="">
                            </div>
                            <div class="detail col-9">
                                <a href="./hero-detail.html" class="hero-name">Cyclops</a>
                                <div class="short-bio">
                                    <p><span>Scott Summers</span> was Xavier's first recruit and often the
                                        group's field leader. Former headmaster of the Xavier Institute, former
                                        leader of the X-Factor, and current leader of the Uncanny X-Men.
                                    </p>
                                    <a href="#" class="delete">Delete</a>
                                    <a href="#" class="update">Update</a>
                                    <a href="#" class="view">View</a>    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>
</html>