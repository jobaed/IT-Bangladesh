<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "3d";
require "inc/header.php";

?>

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
            <h2 class="fw-bold text-center py-4">Auto CAD (2D,3D Max)</h2>
            <div id="webDesign" class="card course-item border-0 shadow mx-auto">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                    Populer
                </div>

                <div class="course-image">
                    <img class="card-img-top" src="asset/img/autocad.jpg" alt="Card image cap">
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
                        <h5 class="card-title text-center fw-bold text-info pb-1 pt-5">3D Animation</h5>
                        <p class="text-center fw-bold pt-2"><span class="text-muted text-decoration-line-through">23000৳</span>
                            <span class="fw-bold">&nbsp; 20,500৳</span>
                        </p>
                        <p class="text-dark text-center text-muted">Already Enroll - 1800</p>
                        <div class="py-3 px-5">
                            <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll
                                    Now</button></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold text-center pt-2">About The Course</h3>
                        <p style="text-align: justify;" class=" pt-3 pe-3">
                        AutoCAD is computer-aided software that is mainly used to draw the plan and blueprint of a building, any construction or bridge. It is drafting software that is why the software is often used by civil, mechanical, electrical, architectural engineers, and interior designers.
                        <br> AutoCAD can be used for multiple purposes. This is the primary advantage of this software. We tried to enlist the tasks that can be done using the software. So take a look at a glance at the following.
                        <br> The software has many features, and the design layout is one of them. The feature contains numerous templates that are compatible with designing building construction and architectural planning.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-dark p-0">
        <div class="container row px-5 p-0">
            <div class=" col-md-6 px-2 py-3 ">
                <h4 class="fw-bold pt-2 text-light pt-4">Course Module</h4>
                <p class="text-light"> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Briefly  discussion  on  Auto CAD<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i>Installation, Description of extended Primitives and their creation method<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Description of Auto CAD interface, <br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Basic drawing tools: 1.Line, Circle, Polyline, Rectangle, Erasing object & Undo and Redo Actions<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Organizing drawing objects on layers<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i>Preparing a layout to be plotted<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> 3D viewing techniques<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i>Interface enhancements<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;</i>Various 3D command enhancements and more..<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Insert Raster image and free hand drawing with raster image<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Electrical appliance add & electric diagram<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Cameras and setting the Shot Working with Target and Free cameras<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Rendering, V-Ray and more<br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;  </i> Live Project<br>
                </p>

                <div class="col-md-6 py-3 pb-5">
                    <h4 class="fw-bold pt-2 text-light pt-4">Duration</h4>
                    <p class="text-warning">Duration : <br> 3 Months</p>
                    <button class="btn btn-warning  my-2"></button>
                    <p class="text-warning">Total Class : <br> - 24</p>
                    <button class="btn btn-warning  my-2"></button>
                    <p class="text-warning">- 3 hours a Day <br>- 2 Days in a Week</p>
                </div>
                <h4 class="fw-bold pt-2 text-light pt-4">Prerequisites</h4>
                <button class="btn btn-warning px-3 my-2 mb-5">Basic Knowledge on Using Computer</button>
                <h4 class="fw-bold pt-2 text-light">Marketplace</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;Fiverr</i> <br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Freelancer </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Upwork </i><br>
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

                            <div class="btn btn-dark px-4 mt-3">View Profile</div>
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span>
                                <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container px-4 py-4">
        <h3 class="fw-bold py-4">Career Opportunity</h3>
        <p class="fw-bold">How to create an outsourcing website profile and 100% complete profile? <br>
        Why need to create perfect cover letters for each category of job posting? <br>
Way to apply and activate MasterCard & International Payments System? <br>
After taking a course from DUSRA Soft Outsourcing Solution then you will get lifetime support & help? <br>
Refer to the developer company or Architecture company <br>
        </p>
    </div>






    <!-- Footer -->

    <?php
require "inc/footer.php";
require 'inc/script.php';
?>
</body>