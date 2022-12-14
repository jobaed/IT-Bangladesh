<?php
$page = "dashboard";
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }
// if ($_SESSION['loggedin'] &&   $_SESSION['loggedin'] == true) {
// } else {
//     header("location: ../login.php");
// }

require "../inc/database.php";
$login_email = '';
$message = '';
if (isset($_GET['email'])) {
    $login_email = $_GET['email'];
    $check_email = $conn->query("SELECT * FROM admin WHERE email='$login_email'");
    $row = $check_email->fetch_assoc();
    $login_role = $row['role'];
    $login_id = $row['id'];

} else {
    $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oops..!</strong> Unothorize Access Page Not Found;
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
}
if (isset($login_id)) {

} else {
    $login_id = 0;
}
if (isset($login_role)) {

} else {
    $login_role = 0;
}
if (isset($login_email)) {

} else {
    $login_email = '';
}

// student
// Pending
$totalStudent = 0;

$student = "SELECT * FROM student_addmission WHERE status = '1'";
$result = $conn->query($student);
$totalstudent = $result->num_rows;

// Approved Student
$Approvedstudent = "SELECT * FROM student_addmission WHERE status = '2'";
$Approvedresult = $conn->query($Approvedstudent);
$totalApprovedstudent = $Approvedresult->num_rows;

// Teachers
// Polytechnic Tracher
$totalPolyTeachers = 0;
$polyTeachers = "SELECT * FROM polytechnicteacher WHERE status = '1'";
$polyResult = $conn->query($polyTeachers);
$totalPolyTeachers = $polyResult->num_rows;

// Approved Poly Teacher
$ApprovePolyTeachers = "SELECT * FROM polytechnicteacher WHERE status = '2'";
$approvePolyResult = $conn->query($ApprovePolyTeachers);
$totalApprovePolyTechers = $approvePolyResult->num_rows;

// Contest
// Programming Contest
$pContest = 0;
$approvedPContest = 0;
$progContest = "SELECT * FROM contest WHERE 1";
$pcResult = $conn->query($progContest);
$totalPContest = $pcResult->num_rows;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="icon" href="" type="image/gif">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- fav icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="60x60" href="../asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="72x72" href="../asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="76x76" href="../asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="114x114" href="../asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="120x120" href="../asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="144x144" href="../asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="152x152" href="../asset/img/favicon (2).png">
    <link rel="apple-touch-icon" sizes="180x180" href="../asset/img/favicon (2).png">
    <link rel="icon" type="image/png" sizes="192x192" href="../asset/img/favicon (2).png">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/img/favicon (2).png">
    <link rel="icon" type="image/png" sizes="96x96" href="../asset/img/favicon (2).png">
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/img/favicon (2).png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



    <link rel="stylesheet" href="../asset/css/style.css">
    <title>IT | Bangladesh | Admin Dashboard</title>


</head>

<body>
    <!-- Main Nav Start -->

    <?php
// if (!($message == '')) {
//     echo '<div class="container text-center pt-5">';
//     echo $message;
//     echo "</div>";
//     exit();
// }
?>


    <section class="container-fluid shadow sticky-top bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light shadow-buttom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <a href="../index.php"><img src="../asset/img/IT-Bd-3.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="../index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../about.php">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <?php require "../inc/courses.php"?>
                                </li>
                                <li class="nav-item dropdown">
                                    <div>
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Admission
                                        </a>
                                        <ul style="width: 250px; left: 0px;" class="dropdown-menu"
                                            aria-labelledby="navbarDropdown">

                                            <li><a class="dropdown-item" href="../admission.php"><i
                                                        class="fas fa-star text-warning "></i> Student</a></li>
                                            <li><a class="dropdown-item " href="#"><i
                                                        class="fas fa-star text-warning "></i>
                                                    Teacher</a></li>
                                            <li class="ms-4"><a class="dropdown-item "
                                                    href="../addmission-poly-teacher.php"><i
                                                        class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                    Polytechnic</a></li>
                                            <li class="ms-4"><a class="dropdown-item "
                                                    href="../addmission-versity-teacher.php"><i
                                                        class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                    University</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../event.php">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://sites.google.com/view/mushfiq11/">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <div>
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Contests
                                        </a>
                                        <ul style="width: 250px; left: 0px;" class="dropdown-menu"
                                            aria-labelledby="navbarDropdown">

                                            <li><a class="dropdown-item" href="../contest.php"><i
                                                        class="fas fa-star text-warning "></i> Programming Contest</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-star text-warning "></i>
                                                    Networking Contest</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../contact.php">Contact</a>
                                </li>
                            </ul>
                            <form class="d-flex justify-content-center py-4">
                                <a href="admin-edit.php?id=<?php echo $login_id; ?>" class="btn btn-success btn-sm me-3"
                                    title="Log In" type="submit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href="logout.php" class="btn btn-danger btn-sm me-3" title="Log In" type="submit"><i
                                        class="fas fa-sign-in-alt "></i> Log Out</a>
                            </form>
                        </div>

                </div>
            </nav>
        </div>

    </section>
    <!-- Main Nav End -->



<div class="container pt-5">
        <h4>
            <i class="fa-solid fa-gauge"></i> Welcome To Dashboard <br>

        </h4>
        <span class="fw-bold text-danger py-3 fs-4">" <?php if (isset($row['name'])) {
    echo $row['name'];
}
?> "</span>


    </div>

        <div class="container">
            <div class="container-fluid">
                <section class="py-4">
                    <div class="row">
                        <h5 class="fw-bold pb-2">Student:</h5>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a style="text-decoration: none;" href="../student_addmissions.php">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div class="align-self-center">
                                                <i class="fa-solid fa-users text-danger fa-3x"></i>
                                            </div>
                                            <div class="text-end">
                                                <h3><?php echo $totalstudent ?></h3>
                                                <p class="mb-0 fw-bold">New</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a style="text-decoration: none;" href="../student-approved-list.php">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div class="align-self-center">
                                                <i class="fa-solid text-info fa-user-check fa-3x"></i>
                                            </div>
                                            <div class="text-end">
                                                <h3><?php echo $totalApprovedstudent ?></h3>
                                                <p class="mb-0 fw-bold">Approved</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="fw-bold pb-2"> Teacher ></h5>
                    <div class="row px-5 d-flex">
                        <h6 class="fw-bold pb-1"> Polytechnic ></h6>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a style="text-decoration: none;" href="../poly_teachers_addmission.php">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <h3 class="text-danger"><?php echo $totalPolyTeachers ?></h3>
                                                <p class="mb-0">New</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fa-solid fa-users text-danger fa-3x"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <a style="text-decoration: none;" href="../poly-teachers-approve-list.php">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <h3 class="text-success"><?php echo $totalApprovePolyTechers ?></h3>
                                                <p class="mb-0">Approved</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fa-solid text-info fa-user-check fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5">
                        <h6 class="fw-bold pb-1"> University ></h6>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a style="text-decoration: none;" href="#">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <h3 class="text-danger">0</h3>
                                                <p class="mb-0">New</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fa-solid fa-users text-danger fa-3x"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <a style="text-decoration: none;" href="#">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <h3 class="text-success">0</h3>
                                                <p class="mb-0">Approved</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fa-solid text-info fa-user-check fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h5 class="fw-bold pb-2"> Contest ></h5>
                    <div class="row px-5">
                        <h6 class="fw-bold pb-1"> Programming Contest ></h6>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a style="text-decoration: none;" href="../contest-info.php">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <h3 class="text-danger"><?php echo $totalPContest ?></h3>
                                                <p class="mb-0">Contester</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fa-solid fa-users text-danger fa-3x"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <a style="text-decoration: none;" href="#">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <h3 class="text-success"><?php echo $approvedPContest ?></h3>
                                                <p class="mb-0">Result</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fa-solid text-info fa-user-check fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5">
                        <h6 class="fw-bold pb-1"> Networking Contest ></h6>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a style="text-decoration: none;" href="#">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <h3 class="text-danger">Start Soon</h3>
                                                <p class="mb-0">Contester</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fa-solid fa-users text-danger fa-3x"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <a style="text-decoration: none;" href="#">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <h3 class="text-success">Start Sooon</h3>
                                                <p class="mb-0">Result</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fa-solid text-info fa-user-check fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <h5 class="py-5">

            Thanks for staying with us <br>
            <span class="fs-6">"Admin Panel - IT Bangladesh"</span>
        </h5>
        </div>






    <!-- Footer -->

    <section data-aos="fade-up" data-aos-duration="1500" class="container-fluid p-0">

        <div class="">

            <footer class="bg-info text-center text-lg-start text-white">

                <div class="container p-4">

                    <div class="row my-4">

                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                            <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                                style="width: 150px; height: 150px;">
                                <img src="../asset/img/favicon (2).png" height="70" alt="" loading="lazy" />
                            </div>

                            <h5 class="text-center fw-bold">"We are committed to build best It resource"
                            </h5>

                            <ul
                                class="list-unstyled pt-3 socialmedia-footer d-flex flex-wrap flex-row justify-content-center">
                                <li>
                                    <a class="text-white px-2" href="https://www.facebook.com/itbangladesh.net/">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-white px-2" href="#!">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-white ps-2" href="https://www.youtube.com/user/Mdmushfiq111">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-white ps-2" href="#!">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-white ps-2" href="#!">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-white ps-2" href="#!">
                                        <i class="fas fa-thumbtack"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>



                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase fw-bold mb-4">Contact Us</h5>
                            <div class="d-flex align-items-center">
                                <div style="font-size: 25px; border-radius: 50%; " class="bg-light p-2 px-3 me-3 fa-flip-horizontal
                    "><i class="fas fa-search-location text-info"></i>
                                </div>
                                <div class="pt-3">
                                    <ul class="list-unstyled">
                                        <li class="fw-bold"><i class="fas fa-chevron-circle-right"></i> Main
                                            Branch</li>
                                        <li class="pt-3"><i class="fas fa-angle-double-right  "></i> 558(3rd
                                            floor),
                                            East
                                            Kazipara Bus
                                            Stand, Mirpur,Dhaka-1216</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div style="font-size: 25px; border-radius: 50%; " class="bg-light p-2 px-3 me-3 fa-flip-horizontal
                    "><i class="fas fa-phone text-info"></i>
                                </div>
                                <div class="">
                                    <ul class="list-unstyled">
                                        <li class="pt-2"><i class="fas fa-angle-double-right "></i> +880
                                            1982-672499</li>
                                        <li class="pt-2"><i class="fas fa-angle-double-right  "></i>
                                            +880 1886-688396</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div style="font-size: 25px; border-radius: 50%; " class="bg-light p-2 px-3 me-3 fa-flip-horizontal
                    "><i class="far fa-envelope text-info"></i>
                                </div>
                                <div class="">
                                    <ul class="list-unstyled">
                                        <a class="text-decoration-none" href="mailto:itbd@gmail.com">
                                            <li class="mt-3 text-light"><i class="fas fa-angle-double-right  "></i>
                                                itbd@gmail.com</li>
                                        </a>
                                        <a class="text-decoration-none" href="mailto:mushfiqbd.cse@gmail.com">
                                            <li class="mt-3 text-light"><i class="fas fa-angle-double-right  "></i>
                                                mushfiqbd.cse@gmail.
                                                com</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>


                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase fw-bold mb-4">Cource List</h5>

                            <ul class="list-unstyled footer-contact">
                                <li class="mb-2">
                                    <a href="../web-development.php" class="text-white"><i
                                            class="far fa-check-circle pe-2"></i>Web Design &
                                        Development</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../graphic.php" class="text-white"><i
                                            class="far fa-check-circle pe-2"></i>Graphics
                                        design</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../digital-marketing.php" class="text-white"><i
                                            class="far fa-check-circle pe-2"></i>Digital
                                        Marketing</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../windows-server.php" class="text-white"><i
                                            class="far fa-check-circle pe-2"></i>Windows/Linux Server</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../app-dev.php" class="text-white"><i
                                            class="far fa-check-circle pe-2"></i>Android
                                        Application Development</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../python.php" class="text-white"><i
                                            class="far fa-check-circle pe-2"></i>IOS
                                        Application Development</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../ccnp.php" class="text-white"><i
                                            class="far fa-check-circle pe-2"></i>Cisco
                                        Certified
                                        Network Professional</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase fw-bold mb-4">Quick Link</h5>

                            <ul class="list-unstyled footer-contact ">
                                <li class="py-2">
                                    <a href="../about.php" class="text-light"><i class="far fa-check-circle pe-2">
                                        </i>About
                                        Us</a>
                                </li>
                                <li class="py-2">
                                    <a href="#" class="text-light "><i class="far fa-check-circle pe-2">
                                        </i>Gallery</a>
                                </li>
                                <li class="py-2">
                                    <a href="#" class="text-light"><i class="far fa-check-circle pe-2 "> </i>Job
                                        Placement</a>
                                </li>
                                <li class="py-2">
                                    <a href="#" class="text-light"><i class="far fa-check-circle pe-2"> </i>Students'
                                        Feedback</a>
                                </li>
                                <li class="py-2">
                                    <a href="#" class="text-light"><i class="far fa-check-circle pe-2"> </i>Freelancing
                                        Success</a>
                                </li>
                                <li class="py-2">
                                    <a href="../contact.php" class="text-light"><i class="far fa-check-circle pe-2">
                                        </i>Contact
                                        Us</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>


                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2022 Copyright: <b>IT BANGLADESH </b>|
                    <a class="text-white text-decoration-none px-2" href="">Design And Developd By Alif Team</a>
                </div>
                <!-- Copyright -->
            </footer>

        </div>
        <!-- End of .container -->
    </section>




    <script src="../asset/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>


</body>