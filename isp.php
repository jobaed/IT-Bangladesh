<!DOCTYPE html>
<html lang="en">

<head>

    <?php
$page = "isp";
require "inc/header.php";

?>
    <title>Course => ISP</title>

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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
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
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
                                <a class="nav-link active" href="contact.php">Contact</a>
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


    <div class="container">
        <div class=" element-item p-3 px-5 web ecommerce1">
            <!-- 1 -->
            <h2 class="fw-bold text-center py-4">ISP Setup And Administration Using MikroTik
                (MTCNA, MTCRE)</h2>
            <div id="webDesign" class="card course-item border-0 shadow mx-auto">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Best Sels
                </div>
                <div class="course-image">
                    <img class="card-img-top" src="asset/img/ISP.png" alt="Card image cap">
                </div>

                <div class="card-body row">
                    <div class="col-md-4">
                        <div class="px-5 pt-4">
                            <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi bi-star"></div>
                                <p class="pt-1">(4.5)</p>
                            </div>
                        </div>
                        <h5 class="card-title text-center fw-bold text-info pb-1 pt-5">ISP Setup And Administration
                            Using MikroTik
                            (MTCNA, MTCRE)</h5>
                        <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                            <span class="fw-bold">&nbsp; 15000৳</span>
                        </p>
                        <p class="text-dark text-center text-muted">Already Enroll - 1599</p>
                        <div class="py-3 px-5">
                            <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll
                                    Now</button></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold text-center pt-2">About The Course</h3>
                        <p style="text-align: justify;" class=" pt-3 pe-3">
                            This training course will provide you with the skills to configure a MikroTik
                            RouterOS Router board as a dedicated router, a bandwidth manager, a secure
                            firewall appliance, a simple wireless access point, a VPN Server or Client or an
                            Internet Hotspot concentrator etc. It is a course that covers the basics for those that
                            new to MikroTik Router OS (or is struggling to understand it!) and concentrates on
                            the basics of setting up a MikroTik device.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-dark p-0">
        <div class="container row px-5 p-0">
            <div class=" col-md-8 px-2 py-3 ">
                <h4 class="fw-bold pt-2 text-light pt-4">Course Module</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; IP &nbsp; Addressing</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Subnetting</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; After &nbsp; Successfully &nbsp;
                        Completing &nbsp; The &nbsp; Course &nbsp; Attendees &nbsp; <br><br> Will &nbsp; Be &nbsp; Able
                        &nbsp; To &nbsp; Installing &nbsp; And
                        Upgrading &nbsp; The &nbsp; RouterOS</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; First &nbsp; Login &nbsp; To &nbsp;
                        The &nbsp; RouterOS &nbsp; Using &nbsp; RouterBOARD</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Creating &nbsp; A &nbsp; Simple &nbsp;
                        Network</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Static &nbsp; IP &nbsp; Addressing
                        &nbsp; And &nbsp; Routing</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;Basic &nbsp; Dynamic &nbsp; Routing
                        &nbsp; Using &nbsp; OSPF</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Creating &nbsp; A &nbsp; DHCP &nbsp;
                        Server &nbsp; And &nbsp; Client</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Firewall &nbsp; Filters &nbsp; And
                        &nbsp; NAT &nbsp; Rules</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Various &nbsp; VPN &nbsp; Tunnel
                        &nbsp; Types</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Simple &nbsp; Queues &nbsp; For &nbsp;
                        Bandwidth &nbsp; Control</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Hotspot &nbsp; Configuration</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Wireless &nbsp; Networks</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Web &nbsp; Proxy &nbsp; For &nbsp; URL
                        &nbsp; Filtering &nbsp; Control &nbsp; And &nbsp; <br><br> Caching &nbsp; And &nbsp; The &nbsp;
                        Dude.</i><br>
                </p>
                <h4 class="fw-bold pt-2 text-light pt-4">Prerequisites</h4>
                <button class="btn btn-warning px-3 my-3">CCNA</button>
                <h4 class="fw-bold pt-2 text-light">Duration</h4>
                <p class="text-warning">Duration : <br> 16 Hours</p>
                <button class="btn btn-warning  my-2"></button>
                <p class="text-warning">Total Class : <br> - 16</p>
                <button class="btn btn-warning  my-2"></button>
                <p class="text-warning">- 2 hours a Day <br>- 2 Days in a Week</p>
            </div>
            <div class="col-md-4 px-2 py-3">
                <h4 class="pt-4 fw-bold text-light"><i class="fa-solid fa-chalkboard-user fa-lg text-warning"></i> <span
                        class=""> &nbsp; Instructor</span></h4>
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card card1 p-4">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn btn-secondary">
                                <img style="border-radius: 50%;" src="asset/img/ceo-profile.png" height="100"
                                    width="100" />
                            </button> <span class="name mt-3 mb-3"> Md. Mushfiqur Rahman</span>
                            <span class="idd text-center">Head Of All Department & Instructor OF Networking
                                Department</span>
                            <span style="text-align: justify; border: 2px solid #5C636A; font-size: 13px;"
                                class="px-3 rounded mt-2 mb-3">
                                M.Sc. in Information System & Security
                                B.Sc. in Computer Science & Engineering
                                Founder & Senior Technical Trainer of Networking (IT Bangladesh)
                                CCNA,CCNP,RHCSA,RHCE,MCP,MCSA,CEH
                            </span>

                            <a href="mushfiq-profile.php" class="btn btn-dark px-4 mt-3">View Profile</a>
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                <span><i class="fa fa-twitter"></i></span> <span><a
                                        href="https://www.facebook.com/mushfiq11"><i
                                            class="fa fa-facebook-f"></i></span></a>
                                <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="fw-bold pt-2 text-light">Marketplace</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;All &nbsp; Corporate &nbsp; Company
                        &nbsp; Area</i> <br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Internet &nbsp; Service &nbsp;
                        Provider </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Bank</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; ITS </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; ICX </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; IGW</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; IIG</i><br>
            </div>

        </div>
    </div>
    <div class="container px-4 py-4">
        <h3 class="fw-bold py-4">Career Opportunity</h3>
        <p class="">After successful course completion students can start a career as

        </p>
        <p class="fw-bold">
            System Support Engineer <br>
            Support Engineer <br>
            Network Engineer <br>
            Senior Network Engineer
        </p>
    </div>






    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";

?>

</body>