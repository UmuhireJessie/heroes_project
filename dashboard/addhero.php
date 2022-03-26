<?php

include ('../config/db_connect.php');

if(isset($_POST['submit'])){
 
    if($_FILES["hero_image"]["error"] == 4){
        echo " Image Uploading Error";
    }
    else{
        $fileName = $_FILES["hero_image"]["name"];
        $fileSize = $_FILES["hero_image"]["size"];
        $tmpName = $_FILES["hero_image"]["tmp_name"];
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo "Invalid Image type";
 
        }
        else if($fileSize > 1000000){
            echo "Image is too large"; }
 
        else{
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;
                move_uploaded_file($tmpName, 'images/'.$newImageName);
           
        }
    }

   
    $file = $_FILES['hero_image']['name'];
    print_r($file);
 
   
    $name= $_POST['hero_name'];
    $real_name=$_POST['real_name'];
    $short_bio=$_POST['short_bio'];
    $long_bio=$_POST['long_bio'];
 
    $query = "INSERT INTO heroes (hero_image, hero_name, real_name, short_bio, long_bio)
     VALUES ('$newImageName', '$name', '$real_name', '$short_bio','$long_bio')";
 
     $result = mysqli_query($conn, $query);
     if($result){
         echo "A hero is created successfully";
     }
     else{
         die(mysqli_error($conn));
     }
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
                            <a href="./addhero.php" class="nav-link active">Add</a>
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
                            New Hero
                        </div>

                        <div class="card-body">
                            <form action="addhero.php" method="post" id="form" enctype="multipart/form-data">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <span class="label label-default">Hero Name <i
                                                class="text-danger">*</i></span>

                                        <input type="text" name="hero_name" id="headId" class="form-control">
                                    </div>
                                    <div class="form-group">

                                        <span class="label label-default">Real Name<i
                                                class="text-danger">*</i></span>

                                        <input type="text" id="realName" class="form-control" name= "real_name">
                                    </div>
                                    <div class="form-group">
                                        <span class="label label-default">Hero Image<i
                                                class="text-danger">*</i></span>

                                        <input type="file" name="hero_image" id="heroImage"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">

                                        <span class="label label-default">Short Bio<i
                                                class="text-danger">*</i></span>

                                        <textarea name="short_bio" id="short_bio" class="form-control " rows="5"
                                            required="required"></textarea>

                                    </div>
                                    <div class="form-group">

                                        <span class="label label-default">Long Bio<i
                                                class="text-danger">*</i></span>

                                        <textarea name="long_bio" id="long_bio" class="form-control " rows="5"
                                            required="required"></textarea>

                                    </div>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
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