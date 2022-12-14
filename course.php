<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "courses";
require "inc/header.php";

?>
    <title>IT | Bangladesh | Courses</title>

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
                        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="about.html">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <?php require "inc/courses.php"?>
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a class="nav-link " href="contact.php">Contact</a>
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
                <h1 class="">Course</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a class="text-light text-decoration-none" href="index.php">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page"><span class="">Course</span>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>

    </section>

    <!-- Breadcamp End -->


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
                            <div class="nav nav-tabs d-flex justify-content-center iconn mx-auto py-5" id="nav-tab" role="tablist">
                                <a class="nav-link" id="nav-wdesign-tab" data-bs-toggle="tab" data-bs-target="#nav-wdesign" type="button" role="tab" aria-controls="nav-wdesign" aria-selected="true" href="">
                                    <img class="img-fluid" src="asset/img/web-design.png" alt="">

                                </a>

                                <a class="nav-link" id="nav-gri-tab" data-bs-toggle="tab" data-bs-target="#nav-gri" type="button" role="tab" aria-controls="nav-gri" aria-selected="true" href=""><img class="img-fluid" src="asset/img/Graphic.png" alt=""></a>

                                <a class="nav-link" id="nav-ui-tab" data-bs-toggle="tab" data-bs-target="#nav-ui" type="button" role="tab" aria-controls="nav-ui" aria-selected="true" href=""><img class="img-fluid" src="asset/img/UI-Design.png" alt=""></a>

                                <a class="nav-link active" id="nav-net-tab" data-bs-toggle="tab" data-bs-target="#nav-net" type="button" role="tab" aria-controls="nav-net" aria-selected="true" href=""><img class="img-fluid" src="asset/img/Networking.png" alt=""></a>


                                <a class="nav-link" id="nav-dev-tab" data-bs-toggle="tab" data-bs-target="#nav-dev" type="button" role="tab" aria-controls="nav-dev" aria-selected="true" href=""><img class="img-fluid" src="asset/img/web-Development.png" alt=""></a>



                                <a class="nav-link" id="nav-digital-tab" data-bs-toggle="tab" data-bs-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="true" href=""><img class="img-fluid" src="asset/img/Digital-marketing.png" alt=""></a>

                                <a class="nav-link" id="nav-apps-tab" data-bs-toggle="tab" data-bs-target="#nav-apps" type="button" role="tab" aria-controls="nav-apps" aria-selected="true" href=""><img class="img-fluid" src="asset/img/Apps.png" alt=""></a>




                                <a class="nav-link" id="nav-auto-tab" data-bs-toggle="tab" data-bs-target="#nav-auto" type="button" role="tab" aria-controls="nav-auto" aria-selected="true" href=""><img class="img-fluid" src="asset/img/autocad.png" alt=""></a>

                                <a class="nav-link items-display-hide" id="nav-ios-tab" data-bs-toggle="tab" data-bs-target="#nav-ios" type="button" role="tab" aria-controls="nav-ios" aria-selected="true" href=""><img class="img-fluid" src="asset/img/Ios-Development.png" alt=""></a>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-8 p-0 border bg-light my-5 rounded">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane show active  fade" id="nav-wdesign" role="tabpanel" aria-labelledby="nav-wdesign-tab">
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
                                            <a href="web-design.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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
                                            <a href="graphic.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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
                                            <a href="ccna.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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
                                            <a href="web-development.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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

                            <div class="tab-pane fade " id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab">
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
                                            <a href="digital-marketing.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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
                                            <a href="app-dev.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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
                                            <a href="uiux.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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
                                            <a href="3d.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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
                                            <a href="python.php" style="font-size: 25px;" class="text-danger text-decoration-none"><i class="fas fa-angle-double-right"></i> Read
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
            </div>
        </div>
    </section>


    <!-- Cource Pill Nav End -->

    <!-- top Cources -->
    <section class="container">
        <div class="catagory-title text-center pb-3">
            <h1 class="fw-bold text-info">Popular Catagoris</h1>
            <hr class="new8">
        </div>
        <div class="container">
            <div class="">
                <div class="col-md-12">
                    <div class="item-menu text-center d-flex flex-wrap justify-content-center">
                        <ul>
                            <li class="btn btn-primary mx-2 my-3 px-3" data-filter="*">All Courses</li>
                            <li class="btn btn-success mx-2 my-3 px-3" data-filter=".web">Web & Application</li>
                            <li class="btn btn-secondary mx-2 my-3 px-3" data-filter=".graphic">Graphic Design</li>
                            <li class="btn btn-warning mx-2 my-3 px-3" data-filter=".networking">Networking</li>
                            <li class="btn btn-danger mx-2 my-3 px-3" data-filter=".marketing">Digital Marketing</li>
                            <li class="btn btn-info mx-2 my-3 px-3" data-filter=".seturety">Securety</li>
                        </ul>
                    </div>
                </div>
                <div class="item-details col-lg-12 col-md-12 d-flex flex-wrap">
                    <div class="col-lg-4 col-md-4 py-5  element-item p-3 web">
                        <!-- 1 -->
                        <div id="webDesign" class="card course-item border-0 shadow">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Populer
                            </div>
                            <img class="card-img-top" src="asset/img/responsive-web-design.png" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <h5 class="card-title text-center fw-bold text-info pb-1">Responsive Web Design</h5>
                                <p class="text-center pt-3">Web design means creating websites with a user-friendly
                                    structure and with an
                                    aesthetic approach. A web designers always think about the layout, color scheme
                                    and unique design of a website.</p>
                                <p class="text-center"><span class="text-muted text-decoration-line-through">20000৳</span>
                                    <span class="fw-bold">&nbsp; 17000৳</span>
                                </p>
                                <div class="py-3">
                                    <a href="web-design.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                    <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                </div>
                                <p class="text-dark text-center text-muted">Already Enroll - 1800</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 web">
                        <!-- 2 -->
                        <div class="">
                            <div id="proWebDevelopment" class="card course-item border-0 shadow">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                                </div>
                                <img class="card-img-top" src="asset/img/pro-web-development.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Professional Web
                                        Development</h5>
                                    <p class="text-center pt-3">Web Development consists of two segments: front end
                                        development and backend
                                        development. They work with
                                        API .
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">25000৳</span>
                                        <span class="fw-bold">&nbsp; 20000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="web-development.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 199</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 web">
                        <!-- 3 -->
                        <div id="python" class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Best Sels
                                </div>
                                <img class="card-img-top" src="asset/img/python.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Python</h5>
                                    <p class="text-center pt-3">Python is a popular programming language and in a very
                                        short time, it is creating
                                        hype world wide. This time python is growing faster but did we ever think why is
                                        this happening?
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">23000৳</span>
                                        <span class="fw-bold">&nbsp; 20000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="python.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 1599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 graphic">
                        <!-- 4 -->
                        <div id="proGraphic" class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                                </div>
                                <img class="card-img-top" src="asset/img/pro-graphic-design.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Professional Graphic
                                        Design</h5>
                                    <p class="text-center pt-3">The main purpose here is to make you able to use the
                                        graphic design tools and
                                        techniques in a professional way. Graphic Design helps to build the brand
                                        identity
                                        of a company.
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                                        <span class="fw-bold">&nbsp; 13000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="graphic.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 marketing">
                        <div id="digitalMarketing" class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                                </div>
                                <img class="card-img-top" src="asset/img/digital-marketingf.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Digital Marketing</h5>
                                    <p class="text-center pt-3">IT Bangladesh institute, a leading IT training institute
                                        in Bangladesh, has set its
                                        eye on providing the necessary support to individuals who want to exploit the
                                        opportunity and make their mark in digital marketing.</p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">20000৳</span>
                                        <span class="fw-bold">&nbsp; 17000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="digital-marketing.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 199</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 networking">
                        <div id="ccna">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Best Sels
                                </div>
                                <img class="card-img-top" src="asset/img/ccna-sm.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Cisco Certified Network
                                        Associate (CCNA 200-301)</h5>
                                    <p class="text-center pt-3">The Cisco CCNA network associate certification validates
                                        the ability to install,
                                        configure, operate, and troubleshoot medium-size routed and switched networks,
                                        including .</p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">19000৳</span>
                                        <span class="fw-bold">&nbsp; 16000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="ccna.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 1599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 networking">
                        <div id="ccnap" class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                                </div>
                                <img class="card-img-top" src="asset/img/ccnp.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Cisco Certified Network
                                        Professional (CCNP - Routing &
                                        Switching)
                                    </h5>
                                    <p class="text-center pt-3">Cisco Certified Network Professional (CCNP) Routing and
                                        Switching certification
                                        validates the ability to plan, implement, verify and troubleshoot local and
                                        wide-
                                        area enterprise networks and work collaboratively.
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">20000৳</span>
                                        <span class="fw-bold">&nbsp; 20000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="ccnp.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 networking">
                        <div id="linux" class="card course-item border-0 shadow">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Populer
                            </div>
                            <img class="card-img-top" src="asset/img/red-had.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <h5 class="card-title text-center fw-bold text-info pb-1">RED HAT - Linux</h5>
                                <p class="text-center pt-3">
                                    This course will cover all aspects of RHCSA- Red Hat Certified System
                                    Administrator & RHCE- Red Hat Certified Engineer Certification and the basics of
                                    Linux in detail. This course is also designed for those new bees in Linux,
                                    Technocrats, Linux Administrator etc.
                                </p>
                                <p class="text-center"><span class="text-muted text-decoration-line-through">10000৳</span>
                                    <span class="fw-bold">&nbsp; 10000৳</span>
                                </p>
                                <hr>
                                <div class="py-3">
                                    <a href="redhat.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                    <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                </div>
                                <p class="text-dark text-center text-muted">Already Enroll - 1800</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 networking">
                        <div id="msws" class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                                </div>
                                <img class="card-img-top" src="asset/img/windows-server-2016.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Microsoft Windows Server
                                        2016</h5>
                                    <p class="text-center pt-3">
                                        The MCSA (Microsoft Certified Solutions Associate) certification is a
                                        globallyrecognized way to validate and promote your professional-level IT
                                        knowledge,
                                        competence, and ability. Windows Server 2016 Course is an intermediate level
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">10000৳</span>
                                        <span class="fw-bold">&nbsp; 8000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="windows-server.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="isp" class="col-lg-4 col-md-4 py-5 element-item p-3 networking">
                        <div class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Best Sels
                                </div>
                                <img class="card-img-top" src="asset/img/ISP.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">ISP Setup And
                                        Administration Using MikroTik
                                        (MTCNA, MTCRE)</h5>
                                    <p class="text-center pt-3">
                                        This training course will provide you with the skills to configure a MikroTik
                                        RouterOS Router board as a dedicated router, a bandwidth manager, a secure
                                        firewall appliance, a simple wireless access point, a VPN Server or Client or an
                                        Internet Hotspot concentrator etc.
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                                        <span class="fw-bold">&nbsp; 15000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="isp.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 1599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 py-5 element-item p-3 seturety ">
                        <div id="CyberSecurity" class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Best Sels
                                </div>
                                <img class="card-img-top" src="asset/img/cyber-security.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Cyber Security</h5>
                                    <p class="text-center pt-3">
                                        When the word „hacker‟ enters into our ears, we may get scared! But don‟t worry.
                                        Not all hackers are dangerous. If you have a knack for security loopholes and
                                        possible server threats, you are already familiar with the term “Ethical
                                        Hacker”.
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                                        <span class="fw-bold">&nbsp; 13,000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="cbyer.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 1599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="android" class="col-lg-4 col-md-4 py-5 element-item p-3 web">
                        <div class="card course-item border-0 shadow">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Populer
                            </div>
                            <img class="card-img-top" src="asset/img/python.png" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <h5 class="card-title text-center fw-bold text-info pb-1">Android App Development</h5>
                                <p class="text-center"><span class="text-muted text-decoration-line-through">25000৳</span>
                                    <span class="fw-bold">&nbsp; 20000৳</span>
                                </p>
                                <p class="text-center pt-3">
                                    With the world going mobile, the importance of apps is increasing day by day. App
                                    development hence refers to the creation of applications to be used on mobile
                                    devices. Today when we buy a smartphone or a tablet.
                                </p>
                                <hr>
                                <div class="py-3">
                                    <a href="app-dev.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                    <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                </div>
                                <p class="text-dark text-center text-muted">Already Enroll - 1800</p>

                            </div>
                        </div>
                    </div>
                    <div id="uiux" class="col-lg-4 col-md-4 py-5 element-item p-3 web graphic">
                        <div class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Best Sels
                                </div>
                                <img class="card-img-top" src="asset/img/uiux.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">UX/UI Design </h5>
                                    <p class="text-center pt-3">
                                        This course UX & UI Design is designed for those people, who wants to design
                                        anything to keep users on first priority and working on to make them happy. In
                                        our
                                        course, we will guide you for complete website UI & Mobile UI based on User
                                        Experience.
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">19000৳</span>
                                        <span class="fw-bold">&nbsp; 19000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="uiux.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 1599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="affilate" class="col-lg-4 col-md-4 py-5 element-item p-3 marketing">
                        <div class="">
                            <div class="card course-item border-0 shadow">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                                </div>
                                <img class="card-img-top" src="asset/img/affiliate.png" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi bi-star"></div>
                                        <div class="bi bi-star"></div>
                                    </div>
                                    <h5 class="card-title text-center fw-bold text-info pb-1">Affiliate Marketing </h5>
                                    <p class="text-center pt-3">
                                        This course UX & UI Design is designed for those people, who wants to design
                                        anything to keep users on first priority and working on to make them happy. In
                                        our
                                        course, we will guide you for complete website UI & Mobile UI based on User
                                        Experience.
                                    </p>
                                    <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                                        <span class="fw-bold">&nbsp; 13000৳</span>
                                    </p>
                                    <hr>
                                    <div class="py-3">
                                        <a href="affiliat.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                        <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                    </div>
                                    <p class="text-dark text-center text-muted">Already Enroll - 599</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="3d" class="col-lg-4 col-md-4 py-5 element-item p-3 graphic">
                        <div class="card course-item border-0 shadow">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Populer
                            </div>
                            <img class="card-img-top" src="asset/img/3d.png" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <h5 class="card-title text-center fw-bold text-info pb-1">3D Animation</h5>
                                <p class="text-center pt-3">
                                    The process of generating three dimensional moving images in a digital
                                    environment is called 3D animation. Mainly it has three sections –
                                    1. Modeling
                                    2. Layout and animation
                                    3. Rendering
                                </p>
                                <p class="text-center"><span class="text-muted text-decoration-line-through">20000৳</span>
                                    <span class="fw-bold">&nbsp; 18000৳</span>
                                </p>
                                <hr>
                                <div class="py-3">
                                    <a href="3d.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                    <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                </div>
                                <p class="text-dark text-center text-muted">Already Enroll - 1800</p>

                            </div>
                        </div>
                    </div>
                    <div id="CEH" class="col-lg-4 col-md-4 py-5 element-item p-3 seturety networking ">
                        <div class="card course-item border-0 shadow">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Populer
                            </div>
                            <img class="card-img-top" src="asset/img/ceh.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <h5 class="card-title text-center fw-bold text-info pb-1">CEH - Certified Ethical Hacker</h5>
                                <p class="text-center pt-3">
                                This course help you master an ethical hacking methodology that can be used in penetration testing to lawfully assess the security of a system.
                                This course delivers in-demand ethical hacking skills while preparing you for.
                                </p>
                                <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                                    <span class="fw-bold">&nbsp; 13000৳</span>
                                </p>
                                <hr>
                                <div class="py-3">
                                    <a href="ceh.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                    <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                </div>
                                <p class="text-dark text-center text-muted">Already Enroll - 1800</p>

                            </div>
                        </div>
                    </div>
                    <div id="CEH" class="col-lg-4 col-md-4 py-5 element-item p-3 seturety networking">
                        <div class="card course-item border-0 shadow">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                NEW
                            </div>
                            <img class="card-img-top" src="asset/img/aws.png" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex px-5 pb-2 justify-content-between small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <h5 class="card-title text-center fw-bold text-info pb-1">AWS - Amazon Web Service</h5>
                                <p class="text-center pt-3">
                                Organizations need individuals with cloud skills to help transform their business. AWS Training and Certification delivers over 200% ROI, as quantified by Forrester, by upskilling your existing workforce.* Our content is created by experts at AWS and updated regularly so you can keep your cloud skills fresh.
                                </p>
                                <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                                    <span class="fw-bold">&nbsp; 15000৳</span>
                                </p>
                                <hr>
                                <div class="py-3">
                                    <a href="aws.php"><button class="btn btn-info text-light form-control mb-2">View Details</button></a>
                                    <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll Now</button></a>
                                </div>
                                <p class="text-dark text-center text-muted">Already Enroll - 1800</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Footer -->

    <?php require "inc/footer.php"?>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="asset/js/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" integrity="sha512-3J8teBiHrSyaaRBajZyIEtpDsXdPq1gsznKWIVb5CnorQuFhjWGhWe54z8YNnHHr7MZuExb9m5kvf964HiT1Sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/isotope.pkgd.min.js"></script>
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
    <script>
        // init Isotope
        var $grid = $('.item-details').isotope({
            // options
        });
        // filter items on button click
        $('.item-menu').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
    </script>
</body>