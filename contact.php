<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "contact";
require "inc/header.php";

?>
    <title>IT | Bangladesh | Contact</title>

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
                                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
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
                            </li>
                            <li class="nav-item dropdown">
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
                                <a class="nav-link active text-info" href="contact.php">Contact</a>
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
    <!-- Breadcamp Start -->

    <section id="contact-home">
        <div class="container p-5 py-5 d-flex align-items-center">
            <div class=" text-light">
                <h1 class="">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a class="text-light text-decoration-none" href="index.php">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page"><span class="">Contact
                                Us</span>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>

    </section>

    <!-- Breadcamp End -->

    <!-- main Section Start -->

    <div class="container">
        <section id="contact">
            <div class="row col-lg-12">
                <div class="col-lg-6 pt-5">
                    <div class="getin">
                        <h2 class="text-info">Get in Touch</h2>

                        <div class="getin-details py-4">
                            <h5 class="fw-bold">Head Office</h5>
                            <div class="d-flex py-1 pb-3">
                                <i class="fas fa-home pe-2 text-info pt-1"></i>
                                <p>
                                    558(3rd floor), East Kazipara Bus Stand, Mirpur,Dhaka-1216</p>
                            </div>
                            <h5 class="fw-bold">Phone</h5>
                            <div class="d-flex py-1  pb-3">
                                <!--<i class="fas fa-phone pe-2 text-info pt-1"></i>-->
                                <!--<p> +8801966677733</p>-->
                                <ul class="list-unstyled">
                                    <li class="pt-2"><i class="fas fa-angle-double-right "></i> +880 01982672499</li>
                                    <li class="pt-2"><i class="fas fa-angle-double-right  "></i>
                                        +880 01886688396</li>
                                </ul>
                            </div>
                            <h5 class="fw-bold">Supports</h5>
                            <div class="d-flex py-1 pb-3">
                                <!--<i class="fas fa-envelope-open-text pe-2 text-info pt-1"></i>-->
                                <!--<p>itbd@gmail.com</p>-->
                                <ul class="list-unstyled">

                                    <li class="mt-3 text-light"><i class="fas fa-angle-double-right  "></i>
                                        <a class="text-decoration-none" href="mailto:info@itbd.tech">info@itbd.tech</a>
                                    </li>
                                    <li class="mt-3 text-light"><i class="fas fa-angle-double-right  "></i>
                                        <a class="text-decoration-none" href="mailto:mushfiqbd.cse@gmail.com">mushfiqbd.cse@gmail.
                                            com</a>
                                    </li>

                                </ul>
                            </div>
                            <h5 class="fw-bold">
                                Follow Us On
                            </h5>
                            <div class="pro-links pt-2 text-center  pb-3">
                                <a href="https://www.facebook.com/itbangladesh.net/"><i class="fab fa-facebook fa-2x pe-3 text-info"></i></a>
                                <a href="https://www.youtube.com/user/Mdmushfiq111"><i class="fab fa-youtube fa-2x pe-3 text-danger"></i></a>
                                <a href=""><i class="fab fa-linkedin fa-2x text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-4 py-5">
                    <h3 class="pb-4 pt-2 text-info">Connect With Us</h3>
                    <input type="text" class="form-control border-0 border-bottom pb-2 mb-5" placeholder="Name">
                    <input type="text" class="form-control border-0 border-bottom pb-2 mb-5" placeholder="Email">
                    <textarea name="" class="form-control border-0 border-bottom pb-2 mb-5" placeholder="Message" id="" cols="30" rows="5"></textarea>
                    <button type="submit" class="btn btn-info text-light px-3">Submit Now</button>

                </div>
            </div>
        </section>
    </div>
    <!-- Map -->
    <section data-aos="fade-up" data-aos-duration="2000" class="p-0">
        <div style="width: 100%; padding: 0px; margin: 0;"><iframe style="padding: 0; margin: 0;" width="100%" height="600" frameborder="0" src="https://maps.google.com/maps?width=100%25&amp;height=800&amp;hl=en&amp;q=IT%20Bangladesh,%20567,%20Dhaka%201216+(It%20Bangladesh)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/golf-gps/">golf gps</a></iframe></div>
    </section>

    <!-- main Section End -->



    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";
?>
</body>