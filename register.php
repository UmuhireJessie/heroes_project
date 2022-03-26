<?php

include ('./config/db_connect.php');

?>

<?php
$user = 0;

if (isset($_POST['submit'])) {
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email=$_POST['email'];
    $password1=$_POST['password1'];
    $hashedPassword1 = password_hash($password1, PASSWORD_DEFAULT);

    $email_query= "SELECT * FROM user WHERE email= '$email'";
    $result = mysqli_query($conn, $email_query);
    
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            $_SESSION['status'] = 'Email already exists'; 
            echo 'success';
            ?>
            
            <script>
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                });
            </script>
            
            <?php
            
            header('location: register.php');
        }
        else{
        $sql = "INSERT INTO user(first_name, last_name, email, password1) VALUES ('$first_name', '$last_name', '$email','$hashedPassword1')";
        $result = mysqli_query($conn, $sql);
            if($result){
                $_SESSION['status'] = "";  
                ?>
                <script>
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                });
            </script>
            <?php
                header('location: ./login.php');     

                echo 'success';   // sweet alert

            } else{
                die(mysqli_error($conn));
            }

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                                <a href="./index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="./index.php#heroList" class="nav-link">Heroes</a>
                            </li>
                            <li class="nav-item">
                                <a href="./register.php" class="nav-link active">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="./login.php" class="nav-link">Login</a>
                            </li>
                        </ul>
                    </nav>

                </div>

            </div>

            <div class="row">
                <div class="register">
                    
                    <form action="register.php" method="post">
                        <div class="form-title">
                            <h4>Register</h4>
                        </div>
                        <div class="form-group">
                          <input type="text" name="fname" class="form-control" id="firstName" placeholder="First Name">
                        </div>
                        <div class="form-group">
                          <input type="text" name="lname" class="form-control" id="lastName" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password1" class="form-control" id="password1" placeholder="Enter password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary form-submit" name="submit">Register</button>
                        
                        <p class="signup-option padd-15">Already have an account? <a
                            href="./login.php">Login</a></p>
                    </form>

                </div>
            </div>

            <div class="row">
                <footer>
                    <p>Copyright &copy; 2022 Web Development Assignment</p>
                </footer>
            </div>

    </div>
</body>

<script src="js/sweetalert.min.js"></script>
<!-- <script>
    swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
});
</script> -->



</html>