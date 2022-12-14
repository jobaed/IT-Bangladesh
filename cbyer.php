<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "cyber";
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


    <div class="container">
        <div class=" element-item p-3 px-5 web ecommerce1">
            <!-- 1 -->
            <h2 class="fw-bold text-center py-4">Cyber Security</h2>
            <div id="webDesign" class="card course-item border-0 shadow mx-auto">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Best Sels
                </div>

                <div class="course-image">
                    <img class="card-img-top" src="asset/img/cyber-security.png" alt="Card image cap">
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
                        <h5 class="card-title text-center fw-bold text-info pb-1 pt-5">Cyber Security</h5>
                        <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                            <span class="fw-bold">&nbsp; 13000৳</span>
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
                            When the word „hacker‟ enters into our ears, we may get scared! But don‟t worry.
                            Not all hackers are dangerous. If you have a knack for security loopholes and
                            possible server threats, you are already familiar with the term “Ethical Hacker”.
                            It‟s a system where a company appoints hackers who try to find out the possible
                            security threats and then remove and ensuring the companies security and also
                            protect from outside attackers. Large companies having big servers with massive
                            collection of data are constantly looking for such ethical hackers to make them
                            unexploited.
                            The Cyber Security course will significantly benefit you directing the progressive
                            concepts on Ethical hacking such as corporate intelligence, Vulnerability
                            assessment, penetration testing, exploit writing, reverse engineering.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-dark p-0">
        <div class="container row px-5 p-0">

            <div class="col-md-6 px-2 py-3">
                <h4 class="fw-bold pt-2 text-light pt-4">Prerequisites</h4>
                <button class="btn btn-warning px-3 my-2">Basic Knowledge on Graphic Design</button>
                <h4 class="fw-bold pt-2 text-light">Who Can Join:</h4>
                <p class="text-light">Security officers, auditors, security professionals, site administrators, anyone who
                    is concerned about the integrity of the network infrastructure and individuals who
                    have highly pensionate about hacking.
                </p>
                <h4 class="fw-bold pt-2 text-light">Marketplace</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;Fiverr</i> <br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Freelancer </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Hacker &nbsp; One</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> Bug &nbsp; Crowd</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> Openbugbounty</i><br>

                <h4 class="fw-bold pt-2 text-light pt-4">Project Items</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Introduction &nbsp; To &nbsp; Ethical &nbsp; Hacking</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Footprinting &nbsp; And &nbsp; Reconnaissance</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Scanning &nbsp; Networks</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Enumeration</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Vulnerability &nbsp; Analysis</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; System &nbsp; Hacking</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Malware &nbsp; Threats</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Sniffing</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Social &nbsp; Engineering</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Denial &nbsp; Of &nbsp; Service</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Session &nbsp; Hijacking</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Evading &nbsp; IDS, &nbsp; Firewalls, &nbsp; And &nbsp; Honeypots</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Hacking &nbsp; Web &nbsp; Applications</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; SQL &nbsp; Injection</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Hacking &nbsp; Wireless &nbsp; Networks</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Hacking &nbsp; Mobile &nbsp; Platforms</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; IoT &nbsp; Hacking</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Cloud &nbsp; Computing</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Cryptography</i><br>
                </p>
            </div>
            <div class=" col-md-6 px-2 py-3 ">
                <h4 class="pt-4 fw-bold text-light"><i class="fa-solid fa-chalkboard-user fa-lg text-warning"></i> <span class=""> &nbsp; Instructor</span></h4>
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card card1 p-4">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn btn-secondary">
                                <img style="border-radius: 50%;" src="asset/img/foyez-billah.jpeg" height="100" width="100" />
                            </button> <span class="name mt-3 mb-3 text-center">Abul Faeze Mohammad Bakabillah </span>
                            <span class="idd">Instructor Of Cyber Security Department</span>
                            <span style="text-align: justify; border: 2px solid #5C636A; font-size: 15px;" class="px-3 rounded mt-2 mb-3">
                            MCT, Azure Administrator, CISCO CyberOps, MCSA, RHCE, MTCSE, CEH, ITIL
                            </span>

                            <a href="abul-foyez-profile.php" class="btn btn-dark px-4 mt-3">View Profile</a>
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span>
                                <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 pb-5">
                    <h4 class="fw-bold pt-2 text-light pt-4">Duration</h4>
                    <p class="text-warning">Duration : <br> 4 Months</p>
                    <button class="btn btn-warning  my-2"></button>
                    <p class="text-warning">Total Class : <br> -24</p>
                    <button class="btn btn-warning  my-2"></button>
                    <p class="text-warning">- 2 hours a Day <br>- 2 Days in a Week</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-4 py-4">
        <h3 class="fw-bold py-4">Career Opportunity</h3>
        <p class=""></p>
        <p class="fw-bold">
            Ethical Hacker <br>
            Information Security Engineer <br>
            IT Security Specialist<br>
            IT Security Consultant<br>
            Network Security Specialist<br>
            Security Administrator<br>
            Penetration Tester<br>
            Site Administrator<br>
            IT Auditor<br>
            Computer Forensics Analyst<br>
            Information Security Engineer<br>
            Cyber Engineer<br>
            Data Security Analyst
        </p>

    </div>






    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";
?>

</body>