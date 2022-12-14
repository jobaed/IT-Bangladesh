<?php
require "../inc/database.php";
$page = "admin-edit";
$message = "";
if (isset($_GET['id'])) {
    $sid = $_GET['id'];
    $q = "SELECT * FROM admin WHERE id = '$sid'";
    $result = $conn->query($q);

    $row = $result->fetch_assoc();
}
if (isset($_POST['update'])) {
    $update_id = $_POST['update_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $u = "UPDATE admin SET name='$name',email='$email' WHERE id = '$update_id'";
    $update = $conn->query("$u");
    if ($update) {
        header('location: ../login.php');
    } else {
        $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops..!</strong> Account Updated Faild
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="icon" href="" type="image/gif">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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

    <section class="container-fluid shadow sticky-top bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light shadow-buttom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <a href="index.php"><img src="../asset/img/IT-Bd-3.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                    <div>
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Courses
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <div class="row d-flex flex-wrap justify-content-between">
                                                <div class="pb-4 col-lg-4 py-3">
                                                    <h4 class="text-center "> Web & Application
                                                    </h4>
                                                    <li><a class="dropdown-item" href="../web-design.php"><i class="fas fa-star text-warning "></i> Responsive Web
                                                            Design </a></li>
                                                    <li><a class="dropdown-item" href="../web-development.php"><i class="fas fa-star text-warning "></i> Professional Web
                                                            Development</a></li>
                                                    <li><a class="dropdown-item" href="../python.php"><i class="fas fa-star text-warning"></i> Python</a></li>
                                                </div>
                                                <div class="pb-4 col-lg-4 py-3">
                                                    <h4 class="text-center ">Networking</h4>
                                                    <li><a class="dropdown-item" href="../ccna.php"><i class="fas fa-star text-warning"></i> Cisco Certified
                                                            Network Associate</a></li>
                                                    <li><a class="dropdown-item" href="../ccnp.php"><i class="fas fa-star text-warning"></i> CCNA
                                                            (Professional)</a></li>
                                                </div>

                                                <div class="pb-4 col-lg-4 py-3">
                                                    <h4 class="text-center">Grapich Design</h4>
                                                    <li><a class="dropdown-item" href="../uiux.php"><i class="fas fa-star text-warning"></i> UX/UI Design</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="../3d.php"><i class="fas fa-star text-warning"></i> 3D Animation</a></li>
                                                    <li><a class="dropdown-item" href="../graphic.php"><i class="fas fa-star text-warning"></i> Professional
                                                            Graphic
                                                            Design</a>
                                                    </li>
                                                </div>
                                                <div class="pb-4 col-lg-4 ">
                                                    <h4 class="text-center">Other</h4>
                                                    <li><a class="dropdown-item" href="../redhat.php"><i class="fas fa-star text-warning"></i>
                                                            RED HAT - Linux</a>
                                                    <li><a class="dropdown-item" href="../windows-server.php"><i class="fas fa-star text-warning"></i>
                                                            Microsoft Windows
                                                            Server
                                                            2016</a>
                                                    <li><a class="dropdown-item" href="../cbyer.php"><i class="fas fa-star text-warning"></i> Cyber Security</a>
                                                    <li><a class="dropdown-item" href="../isp.php"><i class="fas fa-star text-warning"></i> ISP
                                                            Setup And
                                                            Administration Using MikroTik</a>
                                                </div>
                                                <div class="pb-4 col-lg-4 ">
                                                    <h4 class="text-center">Application</h4>
                                                    <li><a class="dropdown-item" href="../app-dev.php"><i class="fas fa-star text-warning"></i> Android App
                                                            Development
                                                        </a></li>

                                                </div>
                                                <div class="pb-4 col-lg-4">
                                                    <h4 class="text-center">Digital Markiting</h4>

                                                    <li><a class="dropdown-item" href="../affiliat.php"><i class="fas fa-star text-warning"></i> Affiliate
                                                            Marketing</a></li>
                                                    <li><a class="dropdown-item" href="../digital-marketing.php"><i class="fas fa-star text-warning"></i> Digital Marketing</a>
                                                    </li>
                                                </div>
                                                <?php

if ($page !== "course") {
    ?>
                                                    <li class="pb-2 px-5"><a class="dropdown-item bg-primary text-light text-center" href="../course.php"><i class="fas fa-star text-warning"></i> View All</a>
                                                    </li>
                                                <?php
}

?>

                                            </div>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <div>
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Admission
                                        </a>
                                        <ul style="width: 250px; left: 0px;" class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <li><a class="dropdown-item" href="../admission.php"><i class="fas fa-star text-warning "></i> Student</a></li>
                                            <li><a class="dropdown-item " href="#"><i class="fas fa-star text-warning "></i>
                                                    Teacher</a></li>
                                            <li class="ms-4"><a class="dropdown-item " href="../addmission-poly-teacher.php"><i class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                    Polytechnic</a></li>
                                            <li class="ms-4"><a class="dropdown-item " href="../addmission-versity-teacher.php"><i class="fa-solid fa-circle-chevron-right text-warning"></i>
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
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Contests
                                        </a>
                                        <ul style="width: 250px; left: 0px;" class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <li><a class="dropdown-item" href="../contest.php"><i class="fas fa-star text-warning "></i> Programming Contest</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-star text-warning "></i>
                                                    Networking Contest</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../contact.php">Contact</a>
                                </li>
                            </ul>
                            <form class="d-flex justify-content-center py-4">
                                <a href="admin-edit.php" class="btn btn-success btn-sm me-3" title="Log In" type="submit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href="logout.php" class="btn btn-danger btn-sm me-3" title="Log In" type="submit"><i class="fas fa-sign-in-alt "></i> Log Out</a>
                            </form>
                        </div>

                </div>
            </nav>
        </div>

    </section>
    <!-- Main Nav End -->

    <div class="container ">
        <div>
            <a href="lhasdfd4654sd4fas465s4dashboard.php" class="btn btn-warning px-3 my-3 "><i class="fa-solid fa-gauge"></i> Dahsboard</a>
        </div>
        <section class="bg-dark">
            <div class="container py-5 h-100">

                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5">

                                <h3 class="mb-3"><i class="fa-solid fa-pen-to-square fa-1x"> Edit &nbsp; Admin</i> </h3>
                                <?php echo $message; ?>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                    <input type="hidden" name="update_id" value="<?php if (isset($row['id'])) {
    echo $row['id'];
}
?>">
                                    <div class="form-outline mb-2">
                                        <input type="text" name="name" id="typeEmailX-2" value="<?php if (isset($row['name'])) {
    echo $row['name'];
}
?>" class="form-control form-control-lg" required />
                                        <label class="form-label" for="typeEmailX-2">Name:</label>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <input type="email" name="email" id="typePasswordX-2" value="<?php if (isset($row['email'])) {
    echo $row['email'];
}
?>" class="form-control form-control-lg" required />
                                        <label class="form-label" for="typePasswordX-2">Email:</label>
                                    </div>

                                    <div class="text-center">
                                        <button name="update" class="btn btn-warning  btn-block px-5" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <!-- Footer -->

    <section data-aos="fade-up" data-aos-duration="1500" class="container-fluid p-0">

        <div class="">

            <footer class="bg-info text-center text-lg-start text-white">

                <div class="container p-4">

                    <div class="row my-4">

                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                            <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                                <img src="../asset/img/favicon (2).png" height="70" alt="" loading="lazy" />
                            </div>

                            <h5 class="text-center fw-bold">"We are committed to build best It resource"
                            </h5>

                            <ul class="list-unstyled pt-3 socialmedia-footer d-flex flex-wrap flex-row justify-content-center">
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
                                    <a href="../web-development.php" class="text-white"><i class="far fa-check-circle pe-2"></i>Web Design &
                                        Development</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../graphic.php" class="text-white"><i class="far fa-check-circle pe-2"></i>Graphics
                                        design</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../digital-marketing.php" class="text-white"><i class="far fa-check-circle pe-2"></i>Digital
                                        Marketing</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../windows-server.php" class="text-white"><i class="far fa-check-circle pe-2"></i>Windows/Linux Server</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../app-dev.php" class="text-white"><i class="far fa-check-circle pe-2"></i>Android
                                        Application Development</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../python.php" class="text-white"><i class="far fa-check-circle pe-2"></i>IOS
                                        Application Development</a>
                                </li>
                                <li class="mb-2">
                                    <a href="../ccnp.php" class="text-white"><i class="far fa-check-circle pe-2"></i>Cisco
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
                                    <a href="../about.php" class="text-light"><i class="far fa-check-circle pe-2"> </i>About
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
                                    <a href="../contact.php" class="text-light"><i class="far fa-check-circle pe-2"> </i>Contact
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