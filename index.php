<!DOCTYPE html>
<html lang="en">

<head>

    <?php
$page = "index";
require "inc/header.php";

?>

    <title>IT | Bangladesh</title>
</head>

<body>

    <!-- Top Navigation Start -->
    <div class="ruby-menu-demo-header top-navigation" style="background-color: #CFF4FC;">
        <div class="ruby-wrapper container">
            <ul class="ruby-menu">
                <li class="ruby-active-menu-item"><span class="text-dark"><i class="fab fa-whatsapp"></i>
                        +8801982672499</span></li>
                <li class="ruby-active-menu-item"><span class="text-dark"><a href="info@itbd.tech"><i
                                class="fas fa-envelope"></i>
                            info@itbd.tech</a></li>
                <li class="ruby-active-menu-item"><span class="text-dark"> <i class="fas fa-phone-alt"></i> Phone
                        0186688369</span></li>
                <li class="ruby-active-menu-item"><span class="text-dark"><a
                            href="https://www.google.com/maps/dir/23.7985053,90.3842538/it+bangladesh/@23.8021109,90.3678714,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3755c0cd7084727f:0x400bf3d464e4c07c!2m2!1d90.3729637!2d23.797382">
                            <i class="fas fa-map-marker-alt"></i> 558(3rd floor),
                            East Kazipara Bus Stand, Mirpur,Dhaka-1216 </a></span></li>

                <li class="ruby-menu-social ruby-menu-search"><a href="#" class="text-dark"><i class="fa fa-search pe-2"
                            aria-hidden="true"></i><span><input type="text" name="search"
                                placeholder="Search.."></span></a></li>

            </ul>
        </div>

    </div>
    <!-- Top Navigation End -->

    <!-- Main Nav Start -->

    <section class="container-fluid shadow sticky-top bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light shadow-buttom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"></a>
                    <a href="index.php"><img src="asset/img/IT-Bd-3.png" class="iconitbd" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-info" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <?php require "inc/courses.php";?>
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Admission
                                    </a>
                                    <ul style="width: 250px; left: 0px;" class="dropdown-menu"
                                        aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="admission.php"><i
                                                    class="fas fa-star text-warning "></i> Student</a></li>
                                        <li><a class="dropdown-item " href="#"><i class="fas fa-star text-warning "></i>
                                                Teacher</a></li>
                                        <li class="ms-4"><a class="dropdown-item " href="addmission-poly-teacher.php"><i
                                                    class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                Polytechnic</a></li>
                                        <li class="ms-4"><a class="dropdown-item "
                                                href="addmission-versity-teacher.php"><i
                                                    class="fa-solid fa-circle-chevron-right text-warning"></i>
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
                                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Contests
                                    </a>
                                    <ul style="width: 250px; left: 0px;" class="dropdown-menu"
                                        aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="contest.php"><i
                                                    class="fas fa-star text-warning "></i> Programming Contest</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-star text-warning "></i>
                                                Networking Contest</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex justify-content-center py-4">
                            <a href="login.php" class="btn btn-outline-info btn-sm me-3" title="Log In" type="submit"><i
                                    class="fas fa-sign-in-alt "></i> Log In</a>
                            <a href="signin.php" class="btn btn-outline-primary btn-sm me-3" title="Sign In"
                                type="submit"><i class="fa-solid fa-user-plus"></i> Sign In</a>
                        </form>
                    </div>

                </div>
            </nav>
        </div>

    </section>

    <!-- Main Nav End -->
    <!-- carsoel Start -->


    <section class="container-fluid p-0">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="col-md-12">
                    <div class="slide-one">

                        <div class="row pb-5">
                            <div class="col-md-6">
                                <div class=" pt-5 text-center">
                                    <h1 class="fw-bold text-info pt-2 display-5" data-aos="fade-right"
                                        data-aos-duration="3000">Web Applications Development &nbsp; <i
                                            class="fa-solid fa-arrow-down-short-wide fs-3"></i></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="px-5 col-md-8 ">


                                <div class="blurred d-flex flex-wrap justify-content-around justify-content-center ps-4 py-3"
                                    style="border-radius: 10px;" data-aos="fade-right" data-aos-duration="3000">
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Static & Dynamic
                                            Website.
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> Raw Coding (PHP)
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; PHP - OOP
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Dynamic Website
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; AJAX , jQuery
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Laravel Framework
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Admin Panel Setup
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Payment Method
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; 3+ Projects
                                        </h5>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="col-md-8 text-light pb-1 text-end pt-5">
                                    <a class="btn btn-info px-3 me-5 float-right fs-5 py-2 home_enrole"
                                        href="student_addmissions.php" data-aos="fade-left"
                                        data-aos-duration="4000">Enroll Now &nbsp; <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ps-2 ">
                            <div class="modal-dialog">
                                <div class="modal-content mb-2 bg-danger border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-6 text-light" style="font-weight: 500;">Up Comming
                                            Course & Workshops</h5>
                                        <a href="event.php" type="button" class="btn btn-sm btn-dark my-1">Go And Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="cisco-banneer">

                        <div class="row pb-4">
                            <div class="col-md-6">
                                <div class=" pt-5 text-center">
                                    <h1 class="fw-bold text-warning pt-2 display-5" data-aos="fade-right"
                                        data-aos-duration="3000"> Cisco Certified
                                        Network Associate &nbsp; <i class="fa-solid fa-arrow-down-short-wide fs-3"></i>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="px-5 col-md-8 ">


                                <div class="blurred d-flex flex-wrap justify-content-around justify-content-center ps-4 py-3"
                                    style="border-radius: 10px;" data-aos="fade-right" data-aos-duration="3000">
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Static Routing
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> Dynamic Routing (RIPV1 &
                                            RIPV2)
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; EIGRP
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; OSPFv1 & OSPFv2
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; DHCP & Telnet
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; NAT
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Switch
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; VLAN
                                            VTP And Inter VLAN
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; HSRP, VRRP, GLBP
                                        </h5>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="col-md-8 text-light pb-1 text-end pt-5">
                                    <a class="btn btn-info px-3 me-5 float-right fs-5 py-2 home_enrole"
                                        href="student_addmissions.php" data-aos="fade-left"
                                        data-aos-duration="4000">Enroll Now &nbsp; <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ps-2 ">
                            <div class="modal-dialog">
                                <div class="modal-content mb-2 bg-danger border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-6 text-light" style="font-weight: 500;">Up Comming
                                            Course & Workshops</h5>
                                        <a href="event.php" type="button" class="btn btn-sm btn-dark my-1">Go And Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="slide-two">

                        <div class="row pb-4">
                            <div class="col-md-6">
                                <div class=" pt-5 text-center">
                                    <h1 class="fw-bold text-warning pt-2 display-5" data-aos="fade-right"
                                        data-aos-duration="3000"> Certificate Of Ethical  Hacking &nbsp; <i class="fa-solid fa-arrow-down-short-wide fs-3"></i>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="px-5 col-md-8 ">


                                <div class="blurred d-flex flex-wrap justify-content-around justify-content-center ps-4 py-3"
                                    style="border-radius: 10px;" data-aos="fade-right" data-aos-duration="3000">
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  Introduction   To   Ethical   Hacking
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> Scanning   Networks
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; System   Hacking
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Malware   Threats
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Denial   Of   Service
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Hacking   Web   Applications
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; SQL   Injection
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Hacking   Wireless   Networks
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  Hacking   Mobile   Platforms
                                        </h5>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="col-md-8 text-light pb-1 text-end pt-5">
                                    <a class="btn btn-info px-3 me-5 float-right fs-5 py-2 home_enrole"
                                        href="student_addmissions.php" data-aos="fade-left"
                                        data-aos-duration="4000">Enroll Now &nbsp; <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ps-2 ">
                            <div class="modal-dialog">
                                <div class="modal-content mb-2 bg-danger border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-6 text-light" style="font-weight: 500;">Up Comming
                                            Course & Workshops</h5>
                                        <a href="event.php" type="button" class="btn btn-sm btn-dark my-1">Go And Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="slide-four">

                        <div class="row pb-4">
                            <div class="col-md-6">
                                <div class=" pt-5 text-center">
                                    <h1 class="fw-bold text-warning pt-2 display-5" data-aos="fade-right"
                                        data-aos-duration="3000"> MikroTik &nbsp; <i class="fa-solid fa-arrow-down-short-wide fs-3"></i>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="px-5 col-md-8 ">


                                <div class="blurred d-flex flex-wrap justify-content-around justify-content-center ps-4 py-3"
                                    style="border-radius: 10px;" data-aos="fade-right" data-aos-duration="3000">
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  IP   Addressing
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> Subnetting
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Static   IP   Addressing   And   Routing
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Firewall   Filters   And   NAT   Rules
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Various   VPN   Tunnel   Types
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Hotspot   Configuration
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;   Wireless   Networks
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;   Creating   A   DHCP   Server   And   Client
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  Caching   And   The   Dude.
                                        </h5>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="col-md-8 text-light pb-1 text-end pt-5">
                                    <a class="btn btn-info px-3 me-5 float-right fs-5 py-2 home_enrole"
                                        href="student_addmissions.php" data-aos="fade-left"
                                        data-aos-duration="4000">Enroll Now &nbsp; <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ps-2 ">
                            <div class="modal-dialog">
                                <div class="modal-content mb-2 bg-danger border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-6 text-light" style="font-weight: 500;">Up Comming
                                            Course & Workshops</h5>
                                        <a href="event.php" type="button" class="btn btn-sm btn-dark my-1">Go And Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="slide-two">

                        <div class="row pb-4">
                            <div class="col-md-6">
                                <div class=" pt-5 text-center">
                                    <h1 class="fw-bold text-warning pt-2 display-5" data-aos="fade-right"
                                        data-aos-duration="3000"> Redhat Linux &nbsp; <i class="fa-solid fa-arrow-down-short-wide fs-3"></i>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="px-5 col-md-8 ">


                                <div class="blurred d-flex flex-wrap justify-content-around justify-content-center ps-4 py-3"
                                    style="border-radius: 10px;" data-aos="fade-right" data-aos-duration="3000">
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  SETUP Redhat
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> PERMISSION   AND   OWNERSHIP
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; KERNEL   UPDATE
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; ACL
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  NETWORK   CONFIGURATION
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;PASSWORD   BREAK
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;   NTP
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;    WEB   Server   NFS   Server
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;   PACKAGE   INSTALL
                                        </h5>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="col-md-8 text-light pb-1 text-end pt-5">
                                    <a class="btn btn-info px-3 me-5 float-right fs-5 py-2 home_enrole"
                                        href="student_addmissions.php" data-aos="fade-left"
                                        data-aos-duration="4000">Enroll Now &nbsp; <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ps-2 ">
                            <div class="modal-dialog">
                                <div class="modal-content mb-2 bg-danger border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-6 text-light" style="font-weight: 500;">Up Comming
                                            Course & Workshops</h5>
                                        <a href="event.php" type="button" class="btn btn-sm btn-dark my-1">Go And Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="slide-five">

                        <div class="row pb-5">
                            <div class="col-md-6">
                                <div class=" pt-5 text-center">
                                    <h1 class="fw-bold text-info pt-2 display-5" data-aos="fade-right"
                                        data-aos-duration="3000"> Graphic Design &nbsp; <i class="fa-solid fa-arrow-down-short-wide fs-3"></i>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="px-5 col-md-8 ">


                                <div class="blurred d-flex flex-wrap justify-content-around justify-content-center ps-4 py-3"
                                    style="border-radius: 10px;" data-aos="fade-right" data-aos-duration="3000">
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  Social   Media   Banner   Design
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i>  Professional   Presentation
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Raster   to   Vector
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Business   Card
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  Invoice   Template   Design
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;Logo   Design
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  Product   Packaging
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;    Banner   /   Poster   Design
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;   Web   UI   Design
                                        </h5>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="col-md-8 text-light pb-1 text-end pt-5">
                                    <a class="btn btn-info px-3 me-5 float-right fs-5 py-2 home_enrole"
                                        href="student_addmissions.php" data-aos="fade-left"
                                        data-aos-duration="4000">Enroll Now &nbsp; <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ps-2 ">
                            <div class="modal-dialog">
                                <div class="modal-content mb-2 bg-danger border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-6 text-light" style="font-weight: 500;">Up Comming
                                            Course & Workshops</h5>
                                        <a href="event.php" type="button" class="btn btn-sm btn-dark my-1">Go And Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="slide-one">

                        <div class="row pb-5">
                            <div class="col-md-6">
                                <div class=" pt-5 text-center">
                                    <h1 class="fw-bold text-info pt-2 display-5" data-aos="fade-right"
                                        data-aos-duration="3000">App Development &nbsp; <i class="fa-solid fa-arrow-down-short-wide fs-3"></i>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="px-5 col-md-8 ">


                                <div class="blurred d-flex flex-wrap justify-content-around justify-content-center ps-4 py-3"
                                    style="border-radius: 10px;" data-aos="fade-right" data-aos-duration="3000">
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;  Introduction To Java Programming
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i>   Language   Fundamentals
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Core   Collection   Classes
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp; Packages
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;   Exception   Handling
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;Android   Components
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;     Content   Providers
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;    Location   Services
                                        </h5>
                                    </div>
                                    <div class="col-md-4 text-light pb-1 pe-4">
                                        <h5>
                                            <i class="fa-solid fa-check text-warning"></i> &nbsp;    Multimedia   &   Deployment
                                        </h5>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="col-md-8 text-light pb-1 text-end pt-5">
                                    <a class="btn btn-info px-3 me-5 float-right fs-5 py-2 home_enrole"
                                        href="student_addmissions.php" data-aos="fade-left"
                                        data-aos-duration="4000">Enroll Now &nbsp; <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ps-2 ">
                            <div class="modal-dialog">
                                <div class="modal-content mb-2 bg-danger border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-6 text-light" style="font-weight: 500;">Up Comming
                                            Course & Workshops</h5>
                                        <a href="event.php" type="button" class="btn btn-sm btn-dark my-1">Go And Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        </div>
    </section>



    <section data-aos="zoom-in" data-aos-duration="1000" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description ">
                    <h1 class="  text-center fw-bold"> <span class="text-danger">Welcome To</span> <span
                            class="text-success">IT Bangladesh</span></h1>
                    <hr class="new5 ">
                    <h3 class="text-danger pb-2 fw-bold pt-3">"We are committed to build best It resource"</h3>
                </div>
                <div class="des-pera px-2">
                    <p style="text-align: justify;">IT Bangladesh is committed to working with enterprises, to bring its
                        customers some of the
                        very
                        best data protection solutions. Our customers enjoy vast array of benefits, including
                        special
                        pricing, ongoing technical support and besides the quality of our software. IT Bangladesh
                        provides powerful, innovative data protection solutions for networked storage, delivering
                        the
                        deepest and broadest support for Linux operating systems. <br> <br>
                        IT Bangladesh delivers unique, top-of-the-line solutions for several distinct segments.
                        Advanced
                        Global Technology is focused on developing innovative data protection software tailored to
                        Storage Administrator’s needs. Developing Innovative data protection software is the sole
                        focus
                        of IT Bangladesh development efforts, resulting in technically sophisticated products which
                        are
                        designed with Storage Administrators in mind reduce risks of data loss and manage storage
                        infrastructure costs. <br> <br>
                        Backup solutions are data protection solutions that take care of data security problems. If
                        your
                        business requires business critical operations, requires weekly or daily backups is need of
                        plug
                        and play capability, requires simple and effective manageability and focuses on capacity,
                        reliability, performance, and durability, then you need. IT Bangladesh efficient backup
                        solutions.</p>
                </div>
            </div>
        </div>

    </section>

    <!--it-description ends-->

    <!-- Cource Pill Nav Start -->

    <section class="container-fluid py-5">
        <div class="container">
            <div class="Cource-Form text-center">
                <h1 class="text-info fw-bold">Our Courses</h1>
                <hr class="new6">
                <h4 class="py-2">"Service is our main goal"</h4>
            </div>
            <div class="pill-navigation">
                <div class="row">
                    <div class="col-md-4">
                        <nav>
                            <div class="nav nav-tabs d-flex justify-content-center iconn mx-auto py-5" id="nav-tab"
                                role="tablist">
                                <a class="nav-link" id="nav-wdesign-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-wdesign" type="button" role="tab" aria-controls="nav-wdesign"
                                    aria-selected="true" href="">
                                    <img class="img-fluid" src="asset/img/web-design.png" alt="">

                                </a>

                                <a class="nav-link" id="nav-gri-tab" data-bs-toggle="tab" data-bs-target="#nav-gri"
                                    type="button" role="tab" aria-controls="nav-gri" aria-selected="true" href=""><img
                                        class="img-fluid" src="asset/img/Graphic.png" alt=""></a>

                                <a class="nav-link" id="nav-ui-tab" data-bs-toggle="tab" data-bs-target="#nav-ui"
                                    type="button" role="tab" aria-controls="nav-ui" aria-selected="true" href=""><img
                                        class="img-fluid" src="asset/img/UI-Design.png" alt=""></a>

                                <a class="nav-link active" id="nav-net-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-net" type="button" role="tab" aria-controls="nav-net"
                                    aria-selected="true" href=""><img class="img-fluid" src="asset/img/Networking.png"
                                        alt=""></a>


                                <a class="nav-link" id="nav-dev-tab" data-bs-toggle="tab" data-bs-target="#nav-dev"
                                    type="button" role="tab" aria-controls="nav-dev" aria-selected="true" href=""><img
                                        class="img-fluid" src="asset/img/web-Development.png" alt=""></a>



                                <a class="nav-link" id="nav-digital-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital"
                                    aria-selected="true" href=""><img class="img-fluid"
                                        src="asset/img/Digital-marketing.png" alt=""></a>

                                <a class="nav-link" id="nav-apps-tab" data-bs-toggle="tab" data-bs-target="#nav-apps"
                                    type="button" role="tab" aria-controls="nav-apps" aria-selected="true" href=""><img
                                        class="img-fluid" src="asset/img/Apps.png" alt=""></a>




                                <a class="nav-link" id="nav-auto-tab" data-bs-toggle="tab" data-bs-target="#nav-auto"
                                    type="button" role="tab" aria-controls="nav-auto" aria-selected="true" href=""><img
                                        class="img-fluid" src="asset/img/autocad.png" alt=""></a>

                                <a class="nav-link items-display-hide" id="nav-ios-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ios" type="button" role="tab" aria-controls="nav-ios"
                                    aria-selected="true" href=""><img class="img-fluid"
                                        src="asset/img/Ios-Development.png" alt=""></a>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-8 p-0 border bg-light my-5 rounded">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane show active  fade" id="nav-wdesign" role="tabpanel"
                                aria-labelledby="nav-wdesign-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                Professional Web Design
                                            </h3>
                                            <p class="pb-4 pt-2">Web design means creating websites with a user-friendly
                                                structure and with an
                                                aesthetic approach. In IT Bangladesh Institute, we will delegate our
                                                students with the modern and the most up-to-date techniques that will
                                                bring out
                                                their talents to be successful web designers.
                                            </p>
                                            <a href="web-design.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4  p-0 pill-nav-image">
                                        <img src="asset/img/pill-1.jpg" class="img-fluid rounded pill-content" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-gri" role="tabpanel" aria-labelledby="nav-gri-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                Professional Graphic Design
                                            </h3>
                                            <p class="pb-4 pt-2">The main purpose here is to make you able to use the
                                                graphic design tools and
                                                techniques in a professional way. Graphic Design helps to build the
                                                brand identity
                                                of a company. To know more about the module, take a look in the
                                                highlights of the
                                                module and get insights of how we are conducting the course.
                                            </p>
                                            <a href="graphic.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 p-0 pill-nav-image">
                                        <img src="asset/img/pill-2.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-net" role="tabpanel" aria-labelledby="nav-net-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                CCNA
                                            </h3>
                                            <p class="pb-4 pt-2">The Cisco Network Associate certification validates the
                                                ability to install,
                                                configure, operate, and troubleshoot medium-size routed and switched
                                                networks. This new curriculum also includes the use of these protocols:
                                                IP, EIGRP,
                                                SLIP Frame Relay, RIPv2, VLANs, Ethernet, ACLs, IPv6 etc.</p>
                                            <a href="ccna.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 p-0 pill-nav-image">
                                        <img src="asset/img/pill-4.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade  " id="nav-dev" role="tabpanel" aria-labelledby="nav-dev-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                Professional Web Development
                                            </h3>
                                            <p class="pb-4 pt-2">Web Development consists of two segments: front end
                                                development and backend
                                                development. Front-end Developers work with visual designs of a website.
                                                Besides Backend developers work with more advanced issues. They work
                                                with
                                                API, CGI programs and sometimes script like PHP.</p>
                                            <a href="web-development.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 p-0 pill-nav-image">
                                        <img src="asset/img/pill-5.png" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade " id="nav-digital" role="tabpanel"
                                aria-labelledby="nav-digital-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                Digital Marketing
                                            </h3>
                                            <p class="pb-4 pt-2">Our digital marketing course will not only enable you
                                                to have a good
                                                understanding of the fundamentals of digital marketing but also generate
                                                a strategy
                                                for career growth. To help you understand the market behavior and
                                                formulate a productive approach,
                                                we have covered all the aspects of digital marketing.</p>
                                            <a href="digital-marketing.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 p-0 pill-nav-image">
                                        <img src="asset/img/pill-6.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="nav-apps" role="tabpanel" aria-labelledby="nav-apps-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                Android App Development
                                            </h3>
                                            <p class="pb-4 pt-2">With the world going mobile, the importance of apps is
                                                increasing day by day. App
                                                development hence refers to the creation of applications to be used on
                                                mobile
                                                devices. Today when we buy a smartphone, we can see that it comes
                                                with some pre-installed apps for social media or searching or such other
                                                purposes.</p>
                                            <a href="app-dev.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 p-0 pill-nav-image">
                                        <img src="asset/img/pill-7.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  " id="nav-ui" role="tabpanel" aria-labelledby="nav-ui-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                UI/UX Design
                                            </h3>
                                            <p class="pb-4 pt-2">This course UX & UI Design is designed for those
                                                people, who wants to design
                                                anything to keep users on first priority. In our
                                                course, we will guide you for complete website UI & Mobile UI based on
                                                User
                                                Experience. Our Course module is divided into three important section so
                                                that you
                                                can learn from scratch.</p>
                                            <a href="uiux.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 p-0 pill-nav-image">
                                        <img src="asset/img/pill-3.png" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="nav-auto" role="tabpanel" aria-labelledby="nav-auto-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                3D Animation
                                            </h3>
                                            <p class="pb-4 pt-2">Modeling is generating 3D objects in a certain scene.
                                                The next phase is done by
                                                positioning and animating. And the last phase, rendering, is the output
                                                of the
                                                completed result. The techniques used in 3D Animation involves
                                                appearance
                                                sketching, appearance modeling, texturing,
                                                alteration, and rendering.</p>
                                            <a href="3d.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 p-0 pill-nav-image">
                                        <img src="asset/img/pill-8.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  " id="nav-ios" role="tabpanel" aria-labelledby="nav-ios-tab">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="pill-nav-item-wrapper p-4">
                                            <h3 class="text-info py-3 fw-bold">
                                                IOS Development
                                            </h3>
                                            <p class="pb-4 pt-2">IT Bangladesh hosts top-rated iOS development
                                                instructors who are experts at
                                                showing students how to master the art of developing apps for Apple
                                                products. Whether you’re interested in developing for the iPhone,
                                                iPad, or MacBook, IT Bangladesh has a course to help you achieve your
                                                goals.</p>
                                            <a href="python.php" style="font-size: 25px;"
                                                class="text-danger text-decoration-none"><i
                                                    class="fas fa-angle-double-right"></i> Read
                                                More</a>
                                            <br>

                                        </div>
                                        <a href="admission.php" class="text-decoration-none mt-1 p-0">
                                            <div class="admisshion-wrapper  py-2 bg-info text-light w-50">
                                                <span class="ps-2">Admission
                                                    Now</span> <i class="fas fa-user-plus text-dark ps-2"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 p-0 pill-nav-image">
                                        <img src="asset/img/pill-9.png" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="text-center">
                    <a href="course.php"><button class="btn btn-danger px-4 py-2"><span style="font-size: 20px;">More
                                Course</span></button></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Cource Pill Nav End -->

    <!-- Upcoming Events and seminar Start -->

    <section class="container-fluid bg-light">
        <div class="px-5">
            <div class="container">
                <div class="py-3 workshop-title">
                    <h1 class="text-center fw-bold text-info">Upcoming Course/Workshops</h1>
                    <hr class="new7">
                    <p class="text-center">"We are committed to build best It resource"</p>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1000" class="accordion  mx-auto"
                    id="accordionPanelsStayOpenExample">
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button py-4 bg-info fw-bold text-light" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Click Here to know our Upcoming Course
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <!-- table -->
                            <div class="card-body spn_block">
                                <div class="row">
                                    <div class="table-responsive seminar-table text-center">
                                        <table class="table  table-striped mt-3 table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="bg-dark text-light" scope="col">Topic</th>
                                                    <th class="bg-dark text-light" scope="col">Date</th>
                                                    <th class="bg-dark text-light" scope="col">Time</th>
                                                    <th class="bg-dark text-light" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>CCNA And MikroTik (Online)</td>
                                                    <td>26-March-2022, Moday And Tuesday</td>
                                                    <td>8:30 PM - 10:30 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items1"><button type="button"
                                                                class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>CCNA And MikroTik (Offline)</td>
                                                    <td>26-March-2022, Tuesday And Friday</td>
                                                    <td>05:00 PM - 7:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items2"><button type="button"
                                                                class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>CCNP (Online)</td>
                                                    <td>26-March-2022, Monday And Tuesday</td>
                                                    <td>8:30 PM - 10:30 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items3"><button type="button"
                                                                class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>CCNP (Offline)</td>
                                                    <td>26-March-2022, Tuesday And Friday</td>
                                                    <td>05:00 PM - 7:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items4"><button type="button"
                                                                class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Windows Server 2019 (Online)</td>
                                                    <td>26-March-2022, Monday And Tuesday</td>
                                                    <td>8:30 PM - 10:30 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items5"><button type="button"
                                                                class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Windows Server 2019 (Offline)</td>
                                                    <td>26-March-2022, Tuesday And Friday</td>
                                                    <td>05:00 PM - 7:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items6"><button type="button"
                                                                class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>IP Cam And CCTV And Lan Connection (Offline)</td>
                                                    <td>26-March-2022, Monday And Tuesday</td>
                                                    <td>8:30 PM - 10:30 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items7"><button type="button"
                                                                class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- table -->
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed bg-info fw-bold text-light py-4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Click Here to know our Upcoming Course
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">

                            <div class="card-body spn_block">
                                <div class="row">
                                    <div class="table-responsive seminar-table text-center">
                                        <table class="table table-striped mt-3 table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="bg-dark text-light" scope="col">Topic</th>
                                                    <th class="bg-dark text-light" scope="col">Date</th>
                                                    <th class="bg-dark text-light" scope="col">Time</th>
                                                    <th class="bg-dark text-light" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>YouTube Video Making</td>
                                                    <td>23-Jan-2022, Sunday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items1"><button type="button"
                                                                class="btn btn-info">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cyber Security for Beginners</td>
                                                    <td>24-Jan-2022, Monday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items2"><button type="button"
                                                                class="btn btn-info">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Python With Django</td>
                                                    <td>25-Jan-2022, Tuesday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items3"><button type="button"
                                                                class="btn btn-info">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Python With Machine Learning</td>
                                                    <td>25-Jan-2022, Tuesday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items4"><button type="button"
                                                                class="btn btn-info">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Upcoming Events and seminar End-->

    <!-- Completed Events and seminar Start -->

    <section class="container-fluid bg-light pt-4">
        <div class="px-5">
            <div class="container">
                <div class="py-3 workshop-title">
                    <h1 class="text-center fw-bold text-info">Recent Events/Workshops</h1>
                    <hr class="new7">
                    <p class="text-center">"We are committed to build best It resource"</p>
                </div>
                <div class="accordion  mx-auto" id="accordionPanelsStayOpenExample2">
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button py-4 bg-info fw-bold text-light" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                Click Here to know our Recent Workshops And Events.
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <!-- table -->
                            <div class="card-body spn_block">
                                <div class="row">
                                    <div class="table-responsive seminar-table text-center">
                                        <table class="table  table-striped mt-3 table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="bg-dark text-light" scope="col">Topic</th>
                                                    <th class="bg-dark text-light" scope="col">Date</th>
                                                    <th class="bg-dark text-light" scope="col">Time</th>
                                                    <th class="bg-dark text-light" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>YouTube Video Making</td>
                                                    <td>23-Jan-2022, Sunday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items1"><button type="button"
                                                                class="btn btn-info">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cyber Security for Beginners</td>
                                                    <td>24-Jan-2022, Monday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items2"><button type="button"
                                                                class="btn btn-info">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Python With Django</td>
                                                    <td>25-Jan-2022, Tuesday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items3"><button type="button"
                                                                class="btn btn-info">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Python With Machine Learning</td>
                                                    <td>25-Jan-2022, Tuesday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items4"><button type="button"
                                                                class="btn btn-info">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Gone Events and seminar End-->

    <!-- Our Service start -->

    <section class="py-5 container-fluid services">
        <div class="container pb-1">
            <div class="service-title text-center pb-3">
                <h1 class="fw-bold text-info">Our Service</h1>
                <hr class="new6">
                <p>"Service is our main goal"</p>
            </div>
            <div class="row my-5 pb-5">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                    class="col-lg-4 col-md-4 mt-5">
                    <div class="card achiv text-center border-0 ">
                        <img src="asset/img/instructor.png" class="card-img-top img-fluid mx-auto" alt="">
                        <div class="card-body">
                            <h4 class="card-title fw-bold pb-2 text-info pt-2">Expert Instructors</h4>
                            <p class="card-text px-4 ">Our Instructors Responsibile, Experiensed, Top Rated Freelancer
                                And
                                Corporate Worker.</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                    class="col-lg-4 col-md-4 mt-5">
                    <div class="card achiv text-center border-0 ">
                        <img src="asset/img/c.png" class="card-img-top img-fluid mx-auto" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold pb-2 text-info">Lifetime Access</h4>
                            <p class="card-text px-4">In This Country Only Our It Provide Life Time Access. You Can
                                Re-Complete Your Cource Any Time.</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                    class="col-lg-4 col-md-4 mt-5">
                    <div class="card achiv text-center border-0 ">
                        <img src="asset/img/pc.png" class="card-img-top img-fluid mx-auto" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold pb-2 text-info pt-2">Learn Anywhere</h4>
                            <p class="card-text px-4">We Also Provide Online System. So You Can Learn Any Time Any Whare
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                    class="col-lg-4 col-md-4 mt-5">
                    <div class="card achiv text-center border-0 ">
                        <img src="asset/img/class-video.png" class="card-img-top img-fluid mx-auto" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold pb-2 text-info pt-2">Class Video</h4>
                            <p class="card-text px-4">We Also Provide After Class Video. So You Can Learn Any Time Any
                                Whare
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                    class="col-lg-4 col-md-4 mt-5">
                    <div class="card achiv text-center border-0 ">
                        <img src="asset/img/job-remove.png" class="card-img-top img-fluid mx-auto" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold pb-2 text-info pt-2">Job Placement</h4>
                            <p class="card-text px-4">We Also Provide Online System. So You Can Learn Any Time Any Whare
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                    class="col-lg-4 col-md-4 mt-5">
                    <div class="card achiv text-center border-0 ">
                        <img src="https://www.websolutions.com/Customer-Content/www/CMS/files/hosting_2.png"
                            class="card-img-top img-fluid mx-auto" alt="...">
                        <div class="card-body">
                            <h4 class="card-title fw-bold pb-2 text-info pt-2">Domain Hosting</h4>
                            <p class="card-text px-4">We Also Provide Domain And Hosting Service System.You Get this
                                service from us.
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="text-center py-5">
                    <a href="admission.php"><button type="button"
                            class="btn btn-info tw-bold px-4 mx-auto text-light shadow">Get Started For
                            Free</button></a>
                </div>
            </div>
        </div>
    </section>



    <!-- Our Service End -->
    <!-- Founder And Creator Start -->
    <section class="container-fluid creator-section py-5 bg-light">
        <div data-aos="fade-up" data-aos-duration="3000" class="founder-wrapper text-center">
            <h1 class="fw-bold text-info">Creator And Founder</h1>
            <hr class="new5 mb-4">
            <div class="container creator-wrapper">
                <div style="background-color: rgb(255, 255, 255);" class="row shadow rounded-bottom pt-5">
                    <div class="col-md-4 creator-image ">
                        <img src="asset/img/ceo-profile.png" alt="">
                        <div class="creator-social-icons bg-info pt-2">
                            <ul class="list-unstyled creator-icons d-flex flex-wrap flex-row justify-content-center">
                                <li class="">
                                    <a class="text-dark px-2" href="https://www.facebook.com/mushfiq11">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class=" px-2" href="#!">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a class=" ps-2" href="https://www.youtube.com/user/Mdmushfiq111">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class=" ps-2" href="#!">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a class=" ps-2" href="#!">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 text-center">
                        <h4 class="py-4 px-2"><span class="fw-bold text-info">Md. Mushfiqur Rahman</span> | <span
                                class="h5">Creator
                                And Founder,
                                <span>IT
                                    Bangladesh</span></span></h4>
                        <p class="px-2 pe-5" style="line-height: 30px; text-align: justify;">

                            M.Sc. in Information System & Security
                            B.Sc. in Computer Science & Engineering
                            Ex-Officer of BITS (BRAC IT Services Limited)
                            Technical Trainer of Networking Technology (IDB-BISEW)
                            Founder & Senior Technical Trainer of Networking (IT Bangladesh)
                            CCNA, CCNP, RHCSA, RHCE, MCP, MCSA, CEH
                            Contact: 01982672499
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Founder And Creator End -->


    <!-- Cource Plan Start -->

    <section class="container pt-5">
        <div class="cource-plan-wrapper ">
            <div class="cource-plan-title text-center">
                <h1 class="fw-bold text-info">Course Plan</h1>
                <hr class="new6">

                <section class="card d-flex justify-content-center container1 grid py-5 border-0">
                    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                        class=" card__container grid d-flex justify-content-center flex-wrap">
                        <!--==================== CARD 1 ====================-->
                        <article class="card__content grid">
                            <div class="card__pricing">
                                <div class="card__pricing-number">
                                    <span class="card__pricing-symbol"></span>03
                                </div>
                                <span class="card__pricing-month">month</span>
                            </div>

                            <header class="card__header">
                                <div class="card__header-circle grid">
                                    <img src="asset/img/free-coin.png" alt="" class="card__header-img">
                                </div>

                                <span class="card__header-subtitle">Free plan</span>
                                <h1 class="card__header-title">Basic</h1>
                            </header>

                            <ul class="card__list grid">
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon "></i>
                                    <p class="card__list-description">3 Month live support</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Basic Bassed Course</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">24 Hours lab practis</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Complate Course outline</p>
                                </li>
                            </ul>

                            <button class="card__button"><a style="text-decoration: none; color: white;"
                                    href="admission.php">Choose
                                    this plan</a></button>
                        </article>

                        <!--==================== CARD 2 ====================-->
                        <article class="card__content grid">
                            <div class="card__pricing">
                                <div class="card__pricing-number">
                                    <span class="card__pricing-symbol"></span>06
                                </div>
                                <span class="card__pricing-month">month</span>
                            </div>

                            <header class="card__header">
                                <div class="card__header-circle grid">
                                    <img src="asset/img/pro-coin.png" alt="" class="card__header-img">
                                </div>

                                <span class="card__header-subtitle">Most popular</span>
                                <h1 class="card__header-title">Professional</h1>
                            </header>

                            <ul class="card__list grid">
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">6 Month live support</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Intermidied Based Course</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">24 Hours lab practis</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Complate Course outline</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Anytime Recape Course</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">freelancing marketplace</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description"> professional course outline</p>
                                </li>
                            </ul>

                            <button class="card__button"><a style="text-decoration: none; color: white;"
                                    href="admission.php">Choose
                                    this plan</a></button>
                        </article>

                        <!--==================== CARD 3 ====================-->
                        <articl class="card__content grid">
                            <div class="card__pricing">
                                <div class="card__pricing-number">
                                    <span class="card__pricing-symbol"></span>12
                                </div>
                                <span class="card__pricing-month">month</span>
                            </div>

                            <header class="card__header">
                                <div class="card__header-circle grid">
                                    <img src="asset/img/enterprise-coin.png" alt="" class="card__header-img">
                                </div>

                                <span class="card__header-subtitle">For agencies</span>
                                <h1 class="card__header-title">Enterprise</h1>
                            </header>

                            <ul class="card__list grid">
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">12 Month live support</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Advance Based Course</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">24 Hours lab practis</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Complate Course outline</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Anytime Recape Course</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">freelancing marketplace</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">professional Course outline</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description">Job Plessment </p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description"> Drop CV 300+ Company</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="fas fa-check-square pb-3 card__list-icon"></i>
                                    <p class="card__list-description"> live time IT support</p>
                                </li>
                            </ul>

                            <button class="card__button"><a style="text-decoration: none; color: white;"
                                    href="admission.php">Choose
                                    this plan</a></button>
                            </article>
                    </div>
                </section>


            </div>
        </div>
    </section>


    <!-- Cource Plan End -->

    <!-- Contact Section Start -->

    <div class="container pt-5">
        <h1 class="text-info fw-bold">Connect With Us _._</h1>
        <div class="row col-lg-12">
            <div class="col-lg-6 pt-5">
                <div class="getin">
                    <div class="getin-details py-4">
                        <h5 class="fw-bold">Head Office</h5>
                        <div class="d-flex py-1 pb-3">
                            <i class="fas fa-home pe-2 text-info pt-1"></i>
                            <p>
                                558(3rd floor), East Kazipara Bus Stand, Mirpur,Dhaka-1216</p>
                        </div>
                        <h5 class="fw-bold">Phone</h5>
                        <div class="d-flex py-1  pb-3">
                            <i class="fas fa-phone pe-2 text-info pt-1"></i>
                            <p> +8801982672499</p>
                        </div>
                        <h5 class="fw-bold">Supports</h5>
                        <div class="d-flex py-1 pb-3">
                            <i class="fas fa-envelope-open-text pe-2 text-info pt-1"></i>
                            <p>itbd@gmail.com</p>
                        </div>
                        <h5 class="fw-bold">
                            Follow Us On
                        </h5>
                        <div class="pro-links pt-2 text-center  pb-3">
                            <a href="https://www.facebook.com/itbangladesh.net/"><i
                                    class="fab fa-facebook fa-2x pe-3 text-info"></i></a>
                            <a href="https://www.youtube.com/user/Mdmushfiq111"><i
                                    class="fab fa-youtube fa-2x pe-3 text-danger"></i></a>
                            <a href=""><i class="fab fa-linkedin fa-2x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-4 py-5">

                <div style="width: 100%; padding: 0px; margin: 0;"><iframe style="padding: 0; margin: 0;" width="100%"
                        height="500" frameborder="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=IT%20Bangladesh,%20567,%20Dhaka%201216+(It%20Bangladesh)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.gps.ie/golf-gps/">golf gps</a></iframe></div>

            </div>
        </div>
    </div>

    <!-- main Section End -->



    <!-- Footer -->

    <?php
require "inc/footer.php";

require 'inc/script.php';
?>


    <script>
        jQuery(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 20,
                time: 2000
            });
            //
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: false,
                autoplay: false,
                animateOut: 'fadeOut',
                autoplayTimeout: 4000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            //
        });
    </script>
</body>

</html>