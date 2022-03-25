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

    <div class="container-fluid banner">
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
                                <a href="#home" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#heroList" class="nav-link">Heroes</a>
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

                <div class="col-md-6 offset-md-3 info">
                    <h1 class="text-center landing">Welcome To Group 17's Web Development Assignemt</h1>
                    <a href="#" class="btn btn-md text-center">Learn More</a>

                </div>
            </div>
            <div class="row">
                <div class="hero-title" id="heroList">
                    <h4>Heroes List</h4>

                </div>
                <div class="parent-item">
                    <div class="image-item">

                        <div class="row">
                            <div class=" image col-2">
                                <img src="../images/proffessor-X" alt="">
                            </div>
                            <div class="detail col-9">
                                <a href="./hero-detail.html" class="hero-name">Proffesor X</a>
                                <div class="short-bio">
                                    <p><span>Charles Xavier</span> is the founder of the X-Men and was the original
                                        headmaster of the Xavier Institute of Higher Learning.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="image-item">

                        <div class="row">
                            <div class=" image col-2">
                                <img src="../images/cyclops" alt="">
                            </div>
                            <div class="detail col-9">
                                <a href="./hero-detail.html" class="hero-name">Cyclops</a>
                                <div class="short-bio">
                                    <p><span>Scott Summers</span> was Xavier's first recruit and often the
                                        group's field leader. Former headmaster of the Xavier Institute, former
                                        leader of the X-Factor, and current leader of the Uncanny X-Men.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <footer>
                <p>Copyright &copy; 2022 Web Development Assignment</p>
            </footer>
        </div>

    </div>


</body>

</html>