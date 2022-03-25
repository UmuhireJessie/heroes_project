<?php

include ('../config/db_connect.php');

$login = 0;
$invalid = 0;


if (isset($_POST['submit'])) {

    $email=$_POST['email'];
    $password=$_POST['password1'];  
    // $hashPass = password_hash($password, PASSWORD_DEFAULT);

    $sql= "SELECT * FROM user WHERE email ='$email'";        // include the password 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
   
        
        if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            $login=1;
            session_start();
            $_SESSION['email']=$email;
            if($row["role"] == "admin"){
                header('location: ./dashboard/dashboard.php');

            }else{
                    header('location:index.php');
                }
            }
            else{
                $invalid=1;
            }
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
                                <a href="./index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Heroes</a>
                            </li>
                            <li class="nav-item">
                                <a href="./register.php" class="nav-link">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="./login.php" class="nav-link active">Login</a>
                            </li>
                        </ul>
                    </nav>

                </div>

            </div>

            <div class="row">
                <div class="login">
                    
                    <form action="login.php" method="POST">
                        <div class="form-title login_t">
                            <h4>Login</h4>
                        </div>
                        
                        <div class="form-group">
                          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="space"></div>
                        <div class="form-group">
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password1" placeholder="Password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary form-submit login_b" name="submit">Login</button>
                        
                        <p class="signup-option">Don't have an account? <a
                            href="./register.html" >Register</a></p>
                    </form>

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