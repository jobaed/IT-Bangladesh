<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "about";
require "inc/header.php";

?>

    <title>IT | Bangladesh | About</title>

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
                                <a class="nav-link active text-info" href="about.php">About</a>
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
                                        <li><a class="dropdown-item bg-primary text-light" href="#"><i class="fas fa-star text-warning "></i>
                                                Teacher</a></li>
                                        <li class="ms-4"><a class="dropdown-item" href="addmission-poly-teacher.php"><i class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                Polytechnic</a></li>
                                        <li class="ms-4"><a class="dropdown-item" href="addmission-versity-teacher.php"><i class="fa-solid fa-circle-chevron-right text-warning"></i>
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
                <h1 class="">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a class="text-light text-decoration-none" href="index.php">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page"><span class="">About Us</span>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>

    </section>

    <!-- Breadcamp End -->

    <!-- Mina Section -->
    <!-- ========= others details Part End Here ========== -->
    <section id="others">
        <div data-aos="fade-up" data-aos-duration="3000" class="container">

            <div class="owerview py-5 ">
                <div class="over-view-title">
                    <h1 class="text-center text-info fw-bold"> Our Resume</h1>
                    <hr class="new6">
                </div>
                <p class="pt-4"> in today’s information age every enterprise need solution which can help them
                    accelerate their
                    work process in a secure way and at the same time following all the standards and regulations.
                    IT Bangladesh started operations in 2014. Our services are computer hardware, Software,
                    Training and accessories and service support, implementation and network trouble-shoot
                    services.<br>
                    IT Bangladesh Specializes in providing solutions in almost all verticals of IT Training. Starting
                    from providing solutions in IT professional Training, Network administration and management,
                    IT Bangladesh also provides solutions for data security and storage. Apart from these, IT
                    Bangladesh also software solutions, website design and development and various multimedia
                    solutions. <br>
                    Our highly qualified staffs are continuously trained in today's evolving standards, platforms and
                    technologies. Their technical expertise and dedication to quality has enabled companies of all
                    sizes to leverage the strategic, tactical and financial benefits of outsourcing their most demanding
                    requirements, IT Bangladesh
                </p>
            </div>
            <div class="owerview py-3 ">
                <h2 class="text-center text-info fw-bold pb-4"> <span class="text-danger">WHY &nbsp;</span> <span class="text-success"> IT
                        BANGLADESH</span>
                </h2>
                <!-- <u>
                        <li><a href=""> Home<span style="#007ACC">About</span> </a></li>
                                    </u> -->
                <p>IT security breaches are major cause of concern for organizations these days. These breaches can
                    lead to theft of data and money, trashing of the trust and brand reputation and total disruption of
                    the key services. It is therefore imperative to invest in efficient security tools and processes.
                    Most of the businesses are facing this threat on a daily basis. </p>
                <p>It has been observed that even
                    minor breaches can lead to major losses. To tackle this threat, vigilance has to be maintained
                    round the clock, which requires heavy investment in security tools and processes.
                    Email carries essential messages for the everyday workings of your business. But it's also a
                    major conduit for security threats that blend web, email, and data attack strategies. You must
                    have email security that's tightly integrated into your data loss prevention (DLP) technology. If
                    you don't, you're losing data, inviting crime, risking compliance violations, and jeopardizing
                    your reputation. We Provide email solution that unifies enterprise-class email, web, and data
                    security</p>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row capacity-office">
                        <div data-aos="fade-right" class="col-lg-6 col-md-6">
                            <!-- card1 -->
                            <div class="capaciy pe-5">
                                <div class="mission-head">
                                    <h3 class="py-4 fw-bold">IT Training for Development</h3>
                                </div>
                                <div class="capcity-details">
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info pt-4"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p> Basic Computer Training has been provided to 130 underprivileged youths
                                                from low income area Dhaka Uddyan, Kazipara
                                                partnership with an NGO.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info pt-4"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p> Full free scholarship of amount Tk. 20 Lacs has been provided to 70
                                                Women for training them as freelancers from the own
                                                fund of IT Bangladesh Ltd. </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info pt-2"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Freelancing Training has been provided to 100 differently abled people
                                                with own fund.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info pt-2"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p> IT skill development Training has been provided to 30 Media Journalist
                                                to enhance their professional skill. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-left" class="col-lg-6 col-md-6 ">
                            <div class="capaciy">
                                <!-- title2 -->
                                <div class="mission-head">
                                    <h3 class="py-4 fw-bold ">Office & Training Space</h3>
                                </div>
                                <div class="capcity-details xtra9">
                                    <p>800 Sft with 250+ students capacity per shift (Air Conditioned)</p>
                                    <p>Total number of employees (400) including Trainers (20), Counselors (7), Customer
                                        Relationship Management (15), Web Developers (20), Graphic Designers (40), Apps
                                        Developers (5),IOS Developers (15), Network Engineers (10), Hardware Engineers
                                        (5), Business Developers
                                        (5), HR & Admins (5), Finance & Accounts (3), Support Staffs for Security and
                                        Cleanliness (20)</p>
                                    <p><span style="color:#0bb6eb">* On Job training facilities for eligible
                                            participants.</span></p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">

                        <div data-aos="fade-right" class="col-lg-6 col-md-6">
                            <div class="capaciy">
                                <!-- title3 -->
                                <div class="mission-head">
                                    <h3 class="py-3">Capacity & Training Scenario</h3>
                                </div>
                                <div class="capcity-details">
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Total number of Trained participants till date : 20000+</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Number of equipped computer Lab : 3</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Number of theory classroom : 3</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p> Number of Trainer : 30 (In house)</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Able to arrange 120 awareness workshop per year with 6000
                                                participants
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div data-aos="fade-left" class="col-lg-6 col-md-6 pb-5">
                            <div class="capaciy">
                                <!-- title 4 -->
                                <div class="mission-head">
                                    <h3 class="py-3">Annual Evolution</h3>
                                </div>
                                <div class="capcity-details">
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>After training Skill Development ration 90%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Successful placement ration 70%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Average self-employment record 45%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Entrepreneurship Development 20%</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-2">
                                            <i class="fas fa-circle text-info"></i>
                                        </div>
                                        <div class="col-lg-11 col-10 pl-0">
                                            <p>Able to arrange 120 awareness workshop per year with 6000
                                                participants
                                            </p>
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
    <!-- ========= others details Part End Here ========== -->




    <?php
require "inc/footer.php";
require "inc/script.php";
?>
</body>