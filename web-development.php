<?php $page = "web-design"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="icon" href="" type="image/gif">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- fav icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="60x60" href="asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="72x72" href="asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="76x76" href="asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="114x114" href="asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="120x120" href="asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="144x144" href="asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="152x152" href="asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/favicon (2).png">
    <link rel="icon" type="image/png" sizes="192x192" href="asset/img/favicon (2).png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon (2).png">
    <link rel="icon" type="image/png" sizes="96x96" href="asset/img/favicon (2).png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon (2).png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



    <link rel="stylesheet" href="asset/css/style.css">
    <title>IT | Bangladesh | Course</title>

</head>

<body>
    <!-- Main Nav Start -->

    <section class="container-fluid shadow sticky-top bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light shadow-buttom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"></a>
                    <a href="index.php"><img src="asset/img/IT-Bd-3.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <?php require "inc/courses.php";?>
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Admission
                                    </a>
                                    <ul style="width: 250px; left: 0px;" class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="admission.php"><i class="fas fa-star text-warning "></i> Student</a></li>
                                        <li><a class="dropdown-item " href="#"><i class="fas fa-star text-warning "></i>
                                                Teacher</a></li>
                                        <li class="ms-4"><a class="dropdown-item " href="addmission-poly-teacher.php"><i class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                Polytechnic</a></li>
                                        <li class="ms-4"><a class="dropdown-item " href="addmission-versity-teacher.php"><i class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                University</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Events
                                    </a>
                                    <ul style="width: 250px; left: 0px;" class="dropdown-menu"
                                        aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="event.php">Upcoming Events</a></li>
                                        <li><a class="dropdown-item" href="event.php">
                                        Upcoming Workshops</a></li>
                                        <li><a class="dropdown-item" target="blank" href="https://www.youtube.com/user/Mdmushfiq111"></i>
                                        Youtube Channel</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://itbd-training.blogspot.com/" target="blank">Blog</a>
                            </li>ss="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Contests
                                    </a>
                                    <ul style="width: 250px; left: 0px;" class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="contest.php"><i class="fas fa-star text-warning "></i> Programming Contest</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-star text-warning "></i>
                                                Networking Contest</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex justify-content-center py-4">
                            <a href="login.php" class="btn btn-outline-info btn-sm me-3" title="Log In" type="submit"><i class="fas fa-sign-in-alt "></i> Log In</a>
                            <a href="signin.php" class="btn btn-outline-primary btn-sm me-3" title="Sign In" type="submit"><i class="fa-solid fa-user-plus"></i> Sign In</a>
                        </form>
                    </div>

                </div>
            </nav>
        </div>

    </section>
    <!-- Main Nav End -->


    <div class="container">
        <div class=" element-item p-3 px-5 web ecommerce1">
            <!-- 1 -->
            <h2 class="fw-bold text-center py-4">Professional Web Development</h2>
            <div id="webDesign" class="card course-item border-0 shadow mx-auto">
                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                </div>

                <div class="course-image">
                    <img class="card-img-top" src="asset/img/pro-web-development.png" alt="Card image cap">
                </div>

                <div class="card-body row">
                    <div class="col-md-4">
                        <div class="px-5 pt-4">
                            <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <p class="pt-1">(5.00)</p>
                            </div>
                        </div>
                        <h5 class="card-title text-center fw-bold text-info pb-1 pt-5">Professional Web Development</h5>
                        <p class="text-center"><span class="text-muted text-decoration-line-through">25000৳</span>
                            <span class="fw-bold">&nbsp; 20000৳</span>
                        </p>
                        <p class="text-dark text-center text-muted">Already Enroll - 199</p>
                        <div class="py-3 px-5">
                            <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll
                                    Now</button></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold text-center pt-2">About The Course</h3>
                        <p style="text-align: justify;" class=" pt-3 pe-3">
                            Web Development consists of two segments: front end development and backend
                            development. Front-end Developers work with visual designs of a website and
                            build the sites using code. The front end developer builds the structure of a website
                            using HTML, then change the layout using CSS and sometimes uses javascript too.
                            Besides Backend developers work with more advanced issues. They work with
                            API (Application Programming Interfaces), CGI programs and sometimes script
                            like PHP. Websites functionality is their main concern.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-dark p-0">
        <div class="container row px-5 p-0">
            <div class=" col-md-6 px-2 pt-3 ">
                <h4 class="fw-bold pt-2 text-light pt-4 pb-3">Course Module</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Concept &nbsp; Of &nbsp; Static &nbsp; & &nbsp; Dynamic &nbsp; Website</i> <br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Raw &nbsp; PHP &nbsp; Coding </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Object &nbsp; Oriented &nbsp; Programming &nbsp; (OOP) &nbsp; PHP </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Dynamic &nbsp; Website &nbsp; Development </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Admin &nbsp; Panel &nbsp; Integration </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Laravel &nbsp; PHP &nbsp; Framework </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Ajax </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Payment &nbsp; Gateway </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Exams </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Final &nbsp; Project </i><br>
                </p>
                <h4 class="fw-bold pt-2 text-light pt-4">Prerequisites</h4>
                <button class="btn btn-warning px-3 my-2">Basic Knowledge of Using Computer</button>
                <button class="btn btn-warning px-3 my-2 ">Basic Knowledge of Web Design</button>
                <p class="text-light py-3">*(Mandatory)</p>
                <h4 class="fw-bold pt-2 text-light pt-1">Marketplace</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2 pt-3"> &nbsp;Fiverr</i> <br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Freelancer </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Themeforest </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; PeoplePerHour </i><br>
                </p>
            </div>
            <div class="col-md-6 px-2 py-3">
            <h4 class="pt-4 fw-bold text-light"><i class="fa-solid fa-chalkboard-user fa-lg text-warning"></i> <span class=""> &nbsp; Instructor</span></h4>
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card card1 p-4">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn btn-secondary">
                                <img src="asset/img/male-user-avatar.png" height="100" width="100" />
                            </button> <span class="name mt-3 mb-3">Al-mamun</span>
                            <span class="idd">Instructor Web Department</span>
                            <span style="text-align: justify; border: 2px solid #5C636A; font-size: 15px;" class="px-3 rounded mt-2 mb-3">
                             Project management, PHP/MySQL, WordPress, ReactJS, jQuery, Web service, AngularJs, Code Igniter, Laravel, CakePhp
                            </span>

                            <a href="" class="btn btn-dark px-4 mt-3">View Profile</a>
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span>
                                <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="fw-bold pt-2 text-light pt-4">Duration</h4>
                <button class="btn btn-warning px-3 my-2">Duration: 6 Months</button>
                <button class="btn btn-warning px-3 my-2">Total Class - 48</button>
                <button class="btn btn-warning px-3 my-2 mb-4">(2 hours a Day, 2 Days in a Week)</button>

            </div>

        </div>
    </div>
    <div class="container px-4 py-4">
        <h3 class="fw-bold py-4">Career Opportunity</h3>
        <p style="text-align: justify;">
            Here is a list of possible job opportunities for the software developers, designers
            who will complete the course. Completing the course and handling all project
            works, it is possible for students to build one strong portfolio and can apply for
            jobs that are open for recruitment. It is possible both in local and international
            marketplaces. And our job placement cell will be there with all the supports,
            guidelines and grooming sessions for students. Thus it will help them to get
            confidence and flourish in the digital arena. The opportunities are as follows-
        </p>

        <p class="fw-bold">Web Developer</p>
        <p class="fw-bold">Backend Enginee</p>
        <p class="fw-bold">Backend Developer</p>
        <p class="fw-bold">Web Application Developer</p>

    </div>






    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";
?>
</body>