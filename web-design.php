<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "web-design";
require "inc/header.php";

?>
    <title>IT | Bangladesh | Course</title>

    <style>

    </style>

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
                            <a href="login.php" class="btn btn-outline-info btn-sm me-3 btn1" title="Log In" type="submit"><i
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
            <h2 class="fw-bold text-center py-4">Responsive Web Design</h2>
            <div id="webDesign" class="card course-item border-0 shadow mx-auto">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                    Populer
                </div>

                <div class="course-image">
                    <img class="card-img-top" src="asset/img/responsive-web-design.png" alt="Card image cap">
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
                        <h5 class="card-title text-center fw-bold text-info pb-1 pt-5">Responsive Web Design</h5>
                        <p class="text-center fw-bold pt-2"><span
                                class="text-muted text-decoration-line-through">20000৳</span>
                            <span class="fw-bold">&nbsp; 17000৳</span>
                        </p>
                        <p class="text-dark text-center text-muted">Already Enrolled - 1800</p>
                        <div class="py-3 px-5">
                            <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll
                                    Now</button></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold text-center pt-2">About The Course</h3>
                        <p style="text-align: justify;" class=" pt-3 pe-3">
                            Web design means creating websites with a user-friendly structure and with an
                            aesthetic approach. A web designers always think about the layout, color scheme
                            and unique design of a website. But their task does not just end there. They also
                            work hard to create a user-friendly navigation system. They also need to rank their
                            websites and for that, they need to do some SEO tasks too. In short Web Designer
                            can be denoted as a front-end designer or an experienced designer. A web designer
                            needs to design such interface that will be comfortable, attractive and friendly to
                            the visitors. But it also needs to be responsive that user can use it in different
                            devices as per their choices. In IT Bangladesh Institute, we will delegate our
                            students with the modern and the most up-to-date techniques that will bring out
                            their talents to be successful web designers.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-dark p-0">
        <div class="container row px-5 p-0">
            <div class=" col-md-6 px-2 py-3 ">
                <h4 class="fw-bold pt-2 text-light pt-4">Course Module</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; HTML5 </i> <br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; CSS3 </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Design &nbsp; To &nbsp; HTML </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; CSS3 &nbsp; Animation &nbsp; Effect
                    </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; JavaScript </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; jQuery </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Bootstrap &nbsp; Latest &nbsp; Version
                    </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Marketplace &nbsp; Related &nbsp;
                        Classes </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Exams </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Final &nbsp; Project </i><br>
                </p>

                <h4 class="fw-bold pt-2 text-light pt-4">Prerequisites</h4>
                <button class="btn btn-warning px-3 my-2 mb-2">Basic Knowledge of Using Computer</button>
                <h4 class="fw-bold pt-2 text-light pt-5">Marketplace</h4>
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
                                <img style="border-radius: 50%;" src="asset/img/nahid-afridi.jpeg" height="100" width="100" />
                            </button> <span class="name mt-3 mb-3">Nahid Afridi</span>
                            <span class="idd">Instructor Of Web Design</span>
                            <span style="text-align: justify; border: 2px solid #5C636A; font-size: 15px;" class="px-3 rounded mt-2 mb-3">
                             Project management, Expert In WordPress,Javascript, ReactJS, jQuery, Web service, uiux , Frontend Expert
                            </span>

                            <a href="nahid-afridi.php" class="btn btn-dark px-4 mt-3">View Profile</a>
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
        <p style="text-align: justify;">
            Here is a list of possible job opportunities for the software developers, designers
            who will complete the course. After completing the course and handling all project
            works, it is possible for students to build one strong portfolio and can apply for
            jobs that are open for recruitment. It is possible both in local and in international
            marketplaces. And our job placement cell will be there with all the supports,
            guidelines and grooming sessions for students. Thus it will help them to get
            confidence and flourish in the digital arena. The opportunities are as follows-
        </p>
        <p class="fw-bold">Web Designer <br>
            Front-End Developer
        </p>
    </div>






    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";
?>
</body>