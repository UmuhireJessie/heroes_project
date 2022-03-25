<?php

include('../../config/db_connect.php');
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
                            <a href="./dashboard.php" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="./viewhero.php?id=<?php echo $hero['heroId']?>" class="nav-link active">View</a>
                        </li>
                        <li class="nav-item">
                            <a href="./addhero.php" class="nav-link">Add</a>
                        </li>
                        <li class="nav-item">
                            <a href="../login.php" class="nav-link">Login</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>

        <div class="row">
            <div class="more-info-one">
                <div class="header-hero">
                    <h4>Hero</h4>
                </div>
                <div class="detail-info">
                    <div class="row">
                        <div class=" image col-4">
                            <img src="./images/<?php echo htmlspecialchars(($hero['hero_image'])); ?>" alt="">
                        </div>
                        <div class="detail col-7">
                            <a href="./viewhero.php?id=<?php echo $hero['heroId']?>" class="hero-name"><?php echo htmlspecialchars(($hero['hero_name'])); ?></a>
                            <div class="short-bio">
                                <p>
                                    <span><?php echo $hero['real_name'] ?></span>
                                    <?php echo htmlspecialchars(($hero['short_bio'])); ?>
                                </p>
                            </div>

                            <div class="long-bio">
                                <p><?php echo htmlspecialchars(($hero['long_bio'])); ?></p>
                            </div>

                            <div class="time-stamp">
                                <h5>Created at: <span>20.03.2022 11:33: 45</span></h5>
                                <a href="delete.php?id=<?php echo $hero['heroId']?>" class="btn btn-danger">Delete</a>
                                <!-- <a href="update.php?id=<?php echo $hero['heroId']?>" class="btn btn-danger">Update</a> -->
                                <button type="submit" class="btn btn-warning">update</button>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="row">
            <footer>
                <p>Copyright &copy; 2020 Web Development Assignment</p>
            </footer>
        </div>

    </div>
</body>

</html>