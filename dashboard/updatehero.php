<?php

include('../config/db_connect.php');

if(count($_POST)>0) {


    $heroImage = $_POST['hero_image'];
    $heroName = $_POST['hero_name'];
    $realName = $_POST['real_name']; 
    $shortBio = $_POST['short_bio'];
    $longBio = $_POST['long_bio'];

    $heroName = mysqli_real_escape_string($conn,  $heroName);
    $realName = mysqli_real_escape_string($conn, $realName); 
    $shortBio = mysqli_real_escape_string($conn, $shortBio);
    $longBio = mysqli_real_escape_string($conn, $longBio);

    mysqli_query($conn, "UPDATE `heroes` SET `hero_image`='$heroImage', `hero_name`='$heroName', `real_name`='$realName', `short_bio`='$shortBio', `long_bio`='$longBio' WHERE `heroId` ='" . $_GET['id'] . "'");

    $message = "<p p style='color:green;'> The Hero information is updated successfully! </p>";   
}
$result = mysqli_query($conn, "SELECT * FROM heroes WHERE heroId='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);

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
                        GW11
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
                            <a href="./addhero.php" class="nav-link">Add</a>
                        </li>
                        <li class="nav-item">
                            <a href="updatehero.php?id=<?php echo $row['heroId']?>" class="nav-link active">Update</a>
                        </li>
                        <li class="nav-item">
                            <a href="../login.php" class="nav-link">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <main>
            <div class="row ">
                <div class=" col-md-12">
                    <div class="card">
                        <div class=" card-header">
                            Update Hero
                        </div>

                        <div class="card-body">
                            <form action="" method="post" id="form">
                                <div class="col-md-8">
                                    <div> <?php if(isset($message)) {echo $message; } ?> </div>
                                    <div class="form-group"> 
                                        <span class="label label-default">Hero Name <i
                                                class="text-danger">*</i></span>

                                        <input type="text" name="hero_name" id="headId" class="form-control" value="<?php echo $row['hero_name']; ?>">
                                    </div>
                                    <div class="form-group">

                                        <span class="label label-default">Real Name<i
                                                class="text-danger">*</i></span>

                                        <input type="text" name="real_name" id="realName" class="form-control" value="<?php echo $row['real_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <span class="label label-default">Hero Image<i
                                                class="text-danger">*</i></span>

                                        <input type="file" name="hero_image" id="heroImage" class="form-control" value="<?php echo $row['hero_image']; ?>">
                                    </div>
                                    <div class="form-group">

                                        <span class="label label-default">Short Bio<i
                                                class="text-danger">*</i></span>

                                        <textarea name="short_bio" id="shortBio" class="form-control " rows="5"
                                            required="required"><?php echo $row['short_bio']; ?></textarea>

                                    </div>
                                    <div class="form-group">

                                        <span class="label label-default">Long Bio<i
                                                class="text-danger">*</i></span>

                                        <textarea name="long_bio" id="longBio" class="form-control " rows="5"
                                            required="required"><?php echo $row['long_bio']; ?></textarea>

                                    </div>
                                    <input class="btn btn-primary" name="submit" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>

    </div>
</body>
</html>