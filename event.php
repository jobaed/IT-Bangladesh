<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "event";
require "inc/header.php";

?>
    <title>IT | Bangladesh | Events</title>

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
                                <a class="nav-link " href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <?php require "inc/courses.php";?>
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button"
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
                                <a class="nav-link" href="contact.php">Contact</a>
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
                <h1 class="">Events</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a class="text-light text-decoration-none" href="index.php">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page"><span class="">Event</span>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>

    </section>

    <!-- Breadcamp End -->





    <!-- Upcoming Events and seminar Start -->

    <section class="container-fluid bg-light py-5">
        <div class="px-5">
            <div class="container">
                <div class="py-3 workshop-title">
                    <h1 class="text-center fw-bold text-info">Upcoming Course/Workshops</h1>
                    <hr class="new7">
                    <p class="text-center">"We are committed to build best It resource"</p>
                </div>
                <div class="accordion  mx-auto" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button py-4 bg-info fw-bold text-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Click Here to know our Upcoming Course
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show text-light" aria-labelledby="panelsStayOpen-headingOne">
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
                                                        <a href="event.php#event_items1"><button type="button" class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>CCNA And MikroTik (Offline)</td>
                                                    <td>26-March-2022, Tuesday And Friday</td>
                                                    <td>05:00 PM - 7:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items2"><button type="button" class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>CCNP (Online)</td>
                                                    <td>26-March-2022, Monday And Tuesday</td>
                                                    <td>8:30 PM - 10:30 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items3"><button type="button" class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>CCNP (Offline)</td>
                                                    <td>26-March-2022, Tuesday And Friday</td>
                                                    <td>05:00 PM - 7:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items4"><button type="button" class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Windows Server 2019 (Online)</td>
                                                    <td>26-March-2022, Monday And Tuesday</td>
                                                    <td>8:30 PM - 10:30 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items5"><button type="button" class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Windows Server 2019 (Offline)</td>
                                                    <td>26-March-2022, Tuesday And Friday</td>
                                                    <td>05:00 PM - 7:00 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items6"><button type="button" class="btn btn-info text-light">
                                                                Join</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>IP Cam And CCTV And Lan Connection (Offline)</td>
                                                    <td>26-March-2022, Monday And Tuesday</td>
                                                    <td>8:30 PM - 10:30 PM</td>
                                                    <td>
                                                        <a href="event.php#event_items7"><button type="button" class="btn btn-info text-light">
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
                            <button class="accordion-button collapsed bg-info fw-bold text-light py-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Click Here to know our Upcoming Event
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">

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
                                                        <button type="button" class="btn btn-info">Join</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cyber Security for Beginners</td>
                                                    <td>24-Jan-2022, Monday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info">Join</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Python With Django</td>
                                                    <td>25-Jan-2022, Tuesday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info">Join</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Python With Machine Learning</td>
                                                    <td>25-Jan-2022, Tuesday</td>
                                                    <td>08:00 PM</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info">Join</button>
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
    <!-- Events Items start -->

    <section data-aos="zoom-in" class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="event-wrapper px-5">
                <h2 class="text-info fw-bold">Upcoming <span class="text-danger">__</span></h2>
                <div class="row ms-auto">
                    <div class="col-lg-6 col-md-6 py-5 pe-3">
                        <div class="event-container " id="event_items1">
                            <div class="event-photo">
                                <img src="asset/img/event-1.png" class="img-fluid rounded" alt="">
                                <div class="event-date bg-info">
                                    <h5 class="fw-bold">26</h5>
                                    <h5>Mar</h5>
                                </div>
                            </div>
                            <div class="event-content ps-4 py-3 pt-4 shadow">
                                <h4 class="text-info">CCNA And MikroTik (Online)</h4>
                                <p class="text-muted pe-5"></p>
                                <div class="d-flex justify-content-between pt-3 pe-4 pb-4">
                                    <div class="d-flex">
                                        <i class="far fa-calendar-check text-info pe-2 pt-1"></i>
                                        <p>26 Mar-22</p>
                                    </div>
                                    <div class="d-flex ">
                                        <i class="far fa-clock pe-2 pt-1"></i>
                                        <p>8:30PM - 10:30PM</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt pe-2 pt-1"></i>
                                        <p>Kajipara Mirpur - 10</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#event-join-form"><button type="button" class="btn btn-outline-info  mb-4 ">Event
                                            Going</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 py-5 pe-3">
                        <div class="event-container " id="event_items1">
                            <div class="event-photo">
                                <img src="asset/img/event-1.png" class="img-fluid rounded" alt="">
                                <div class="event-date bg-info">
                                    <h5 class="fw-bold">26</h5>
                                    <h5>Mar</h5>
                                </div>
                            </div>
                            <div class="event-content ps-4 py-3 pt-4 shadow">
                                <h4 class="text-info">CCNA And MikroTik (Offline)</h4>
                                <p class="text-muted pe-5"></p>
                                <div class="d-flex justify-content-between pt-3 pe-4 pb-4">
                                    <div class="d-flex">
                                        <i class="far fa-calendar-check text-info pe-2 pt-1"></i>
                                        <p>26 Mar-22</p>
                                    </div>
                                    <div class="d-flex ">
                                        <i class="far fa-clock pe-2 pt-1"></i>
                                        <p>5:00PM-07:00PM</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt pe-2 pt-1"></i>
                                        <p>Kajipara Mirpur - 10</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#event-join-form"><button type="button" class="btn btn-outline-info  mb-4 ">Event
                                            Going</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 py-5 pe-3 ">
                        <div class="event-container" id="event_items2">
                            <div class="event-photo">
                                <img src="asset/img/event-2.png" class="img-fluid rounded" alt="">
                                <div class="event-date bg-info">
                                    <h5 class="fw-bold">26</h5>
                                    <h5>Mar</h5>
                                </div>
                            </div>
                            <div class="event-content ps-4 py-3 pt-4 shadow">
                                <h4 class="text-info">CCNP (Online)</h4>
                                <div class="d-flex justify-content-between pt-3 pe-4 pb-4">
                                    <div class="d-flex">
                                        <i class="far fa-calendar-check text-info pe-2 pt-1"></i>
                                        <p>26 Mar-22</p>
                                    </div>
                                    <div class="d-flex ">
                                        <i class="far fa-clock pe-2 pt-1"></i>
                                        <p>8:30PM - 10:30PM</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt pe-2 pt-1"></i>
                                        <p>Kajipara Mirpur - 10</p>
                                    </div>
                                </div>
                                <a href="#event-join-form"><button type="button" class="btn btn-outline-info  mb-4 ">Event
                                        Going</button></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 py-5 pe-3 ">
                        <div class="event-container" id="event_items2">
                            <div class="event-photo">
                                <img src="asset/img/event-2.png" class="img-fluid rounded" alt="">
                                <div class="event-date bg-info">
                                    <h5 class="fw-bold">26</h5>
                                    <h5>Mar</h5>
                                </div>
                            </div>
                            <div class="event-content ps-4 py-3 pt-4 shadow">
                                <h4 class="text-info">CCNP (Offline)</h4>
                                <div class="d-flex justify-content-between pt-3 pe-4 pb-4">
                                    <div class="d-flex">
                                        <i class="far fa-calendar-check text-info pe-2 pt-1"></i>
                                        <p>26 Mar-22</p>
                                    </div>
                                    <div class="d-flex ">
                                        <i class="far fa-clock pe-2 pt-1"></i>
                                        <p>5:00PM-07:00PM</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt pe-2 pt-1"></i>
                                        <p>Kajipara Mirpur - 10</p>
                                    </div>
                                </div>
                                <a href="#event-join-form"><button type="button" class="btn btn-outline-info  mb-4 ">Event
                                        Going</button></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 py-5 pe-3">
                        <div class="event-container" id="event_items3">
                            <div class="event-photo ">
                                <img src="asset/img/event-3.png" class="img-fluid rounded" alt="">
                                <div class="event-date bg-info text-end">
                                    <h5 class="fw-bold">26</h5>
                                    <h5>Mar</h5>
                                </div>
                            </div>
                            <div class="event-content ps-4 py-3 pt-4 shadow">
                                <h4 class="text-info">Windows Server 2019 (Online)</h4>
                                <div class="d-flex justify-content-between pt-3 pe-4 pb-4">
                                    <div class="d-flex">
                                        <i class="far fa-calendar-check text-info pe-2 pt-1"></i>
                                        <p>26 Mar-22</p>
                                    </div>
                                    <div class="d-flex ">
                                        <i class="far fa-clock pe-2 pt-1"></i>
                                        <p>8:30PM - 10:30PM</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt pe-2 pt-1"></i>
                                        <p>Kajipara Mirpur - 10</p>
                                    </div>
                                </div>
                                <a href="#event-join-form"><button type="button" class="btn btn-outline-info  mb-4 ">Event
                                        Going</button></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 py-5 pe-3">
                        <div class="event-container" id="event_items3">
                            <div class="event-photo ">
                                <img src="asset/img/event-3.png" class="img-fluid rounded" alt="">
                                <div class="event-date bg-info text-end">
                                    <h5 class="fw-bold">7</h5>
                                    <h5>July</h5>
                                </div>
                            </div>
                            <div class="event-content ps-4 py-3 pt-4 shadow">
                                <h4 class="text-info">Windows Server 2019 (Offline)</h4>
                                <div class="d-flex justify-content-between pt-3 pe-4 pb-4">
                                    <div class="d-flex">
                                        <i class="far fa-calendar-check text-info pe-2 pt-1"></i>
                                        <p>26 Mar-22</p>
                                    </div>
                                    <div class="d-flex ">
                                        <i class="far fa-clock pe-2 pt-1"></i>
                                        <p>5:00PM-07:00PM
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt pe-2 pt-1"></i>
                                        <p>Kajipara Mirpur - 10</p>
                                    </div>
                                </div>
                                <a href="#event-join-form"><button type="button" class="btn btn-outline-info  mb-4 ">Event
                                        Going</button></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 py-5 pe-3 mx-auto">
                        <div class="event-container" id="event_items4">
                            <div class="event-photo">
                                <img src="asset/img/event-4.png" class="img-fluid rounded" alt="">
                                <div class="event-date bg-info">
                                    <h5 class="fw-bold">26</h5>
                                    <h5>Mar</h5>
                                </div>
                            </div>

                            <div class="event-content ps-4 py-3 pt-4 shadow">
                                <h4 class="text-info">Windows Server 2019 (Online)</h4>
                                <div class="d-flex justify-content-between pt-3 pe-4 pb-4">
                                    <div class="d-flex">
                                        <i class="far fa-calendar-check text-info pe-2 pt-1"></i>
                                        <p>26 Mar-22</p>
                                    </div>
                                    <div class="d-flex ">
                                        <i class="far fa-clock pe-2 pt-1"></i>
                                        <p>8:30PM - 10:30PM</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt pe-2 pt-1"></i>
                                        <p>Kajipara Mirpur - 10</p>
                                    </div>
                                </div>
                                <a href="#event-join-form"><button type="button" class="btn btn-outline-info  mb-4 ">Event
                                        Going</button></a>

                            </div>



                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Events Items End -->

    <!-- Join Our Seminar Start -->
    <section class="container py-5" id="event-join-form">
        <div class="contact-wrapper px-5 pb-5">
            <h1 class="pb-5 text-info">Join Our Free Workshops <span class="text-danger">__</span></h1>
            <div class="col-lg-12 col-md-12 row">
                <div data-aos="fade-right" class="col-lg-7 pe-4 pb-5">
                    <input type="text" class="form-control border-0 border-bottom pb-2 mb-5 shadow" placeholder="Your Name">
                    <input type="text" class="form-control border-0 border-bottom pb-2 mb-5 shadow" placeholder="Your Email">
                    <input type="text" class="form-control border-0 border-bottom pb-2 mb-5 shadow" placeholder="Your Phone">
                    <input type="text" class="form-control border-0 border-bottom pb-2 mb-5 shadow" placeholder="Your Address">
                    <select class="custom-select form-control border-0 border-bottom pb-2 mb-5 shadow" id="inputGroupSelect03">
                        <option selected>Choose Your Events</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="pb-5">
                        <button type="submit" class="btn btn-info text-light px-3 shadow">Submit Now</button>
                    </div>
                </div>
                <div data-aos="fade-left" class="col-lg-5 ps-4 ">
                    <div class="contact-box-wrapper bg-info  text-light p-5 shadow">
                        <div class="d-flex align-items-center pb-3">
                            <i class="fas fa-map-marker-alt fa-2x pe-4 pb-3"></i>
                            <div>
                                <p>Mirpur - 10 | Dhaka</p>
                                <p>Kazipara, Dhaka</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3">
                            <i class="fas fa-phone fa-2x pe-4 pb-3"></i>
                            <div>
                                <p>+88 01707586774</p>
                                <p>+88 01968075867</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3">
                            <i class="fas fa-sms fa-2x pe-4 pb-3"></i>
                            <div>
                                <p><a class="text-light" href="#">itbd@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="d-flex mt-4 px-4 align-items-center justify-content-between  pb-3">
                            <a href="#"><i class="text-light fab fa-facebook fa-2x"></i></a>
                            <a href="#"><i class="text-light fab fa-instagram fa-2x"></i></a>
                            <a href="#"><i class="text-light fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="text-light fab fa-google-plus fa-2x"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Join Our Seminar End -->

    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";
?>




</body>