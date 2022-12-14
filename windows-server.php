<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "windows";
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
            <h2 class="fw-bold text-center py-4">Microsoft Windows Server 2016</h2>
            <div id="webDesign" class="card course-item border-0 shadow mx-auto">
                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                </div>

                <div class="course-image">
                    <img class="card-img-top" src="asset/img/Windows-server-banner.webp" alt="Card image cap">
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
                        <h5 class="card-title text-center fw-bold text-info pb-1 pt-5">Microsoft Windows Server 2016</h5>
                        <p class="text-center"><span class="text-muted text-decoration-line-through">10000৳</span>
                            <span class="fw-bold">&nbsp; 8000৳</span>
                        </p>
                        <p class="text-dark text-center text-muted">Already Enroll - 800</p>
                        <div class="py-3 px-5">
                            <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll
                                    Now</button></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold text-center pt-2">About The Course</h3>
                        <p style="text-align: justify;" class=" pt-3 pe-3">
                            The MCSA (Microsoft Certified Solutions Associate) certification is a globally-recognized way to validate and promote your professional-level IT knowledge,
                            competence, and ability. Windows Server 2016 Course is an intermediate level
                            certification that enables candidates to monitor and manage Windows Server 2016
                            operating system and other related activities. This course is the first step towards
                            your path to becoming a Microsoft Certified Solutions Expert.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-dark p-0">
        <div class="container row px-5 p-0">
            <div class=" col-md-8 px-2 py-3 ">
                <h4 class="fw-bold pt-2 text-light pt-4">Course Module 70-740</h4>
                <p class="text-warning"> Module 1: Installing, Upgrading, And Migrating Servers And Workloads <br>
                    Module 2: Configuring Local Storage.<br>
                    Module 3: Implementing Enterprise Storage Solutions.<br>
                    Module 4: Implementing Storage Spaces And Data Duplications.<br>
                    Module 5: Installing And Configuring Hyper-V And Virtual Machines.<br>
                    Module 6: Deploying And Managing Windows Server And Hyper-V Containers.<br>
                    Module 7: Overview Of High Availability And Disaster.<br>
                    Module 8: Implementing And Managing Failover Clustering.<br>
                    Module 9: Implementing Failover Clustering For Hyper-V Virtual Machines.<br>
                </p>
                <h4 class="fw-bold pt-2 text-light pt-4">Course Module 70-741</h4>
                <p class="text-warning">
                    Module 1: Planning And Implementing An IPV4 Network<br>
                    Module 2: Implementing DHCP<br>
                    Module 3: Implementing IPV6<br>
                    Module 4: Implementing DNS<br>
                    Module 5: Implementing And Managing IPAM<br>
                    Module 6: Remote Access In Windows Server 2016<br>
                    Module 7: Implementing Direct Access<br>
                    Module 8: Implementing VPNs<br>
                    Module 9: Implementing NETWORKING FOR Branch Offices<br>
                    Module 10: Configuring Advanced Network Features<br>
                    Module 11: Implementing Software-Defined Networking<br>
                </p>
                <h4 class="fw-bold pt-2 text-light pt-4">Course Module 70-742</h4>
                <p class="text-warning">
                    Module 1: Installing And Configuring Domain Controllers <br>
                    Module 2: Managing Objects In AD DS<br>
                    Module 3: Advanced AD DS Infrastructure Management<br>
                    Module 4: Implementing And Administrating AD DS Sites And Replication<br>
                    Module 5: Implementing Group Policy<br>
                    Module 6: Managing User Settings With Group Policy<br>
                    Module 7: Securing Active Directory Domain Services<br>
                    Module 8: Deploying And Managing ADDS<br>
                    Module 9: Deploying And Managing Certificates<br>
                    Module 10: Implementing And Administrating AD FS<br>
                    Module 11: Implementing And Administrating AD RMS<br>
                    Module 12: Monitoring, Managing And Recovering AD DS<br>
                </p>

            </div>
            <div class="col-md-4">
            <h4 class="pt-4 fw-bold text-light"><i class="fa-solid fa-chalkboard-user fa-lg text-warning"></i> <span
                        class=""> &nbsp; Instructor</span></h4>
                        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card card1 p-4">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn btn-secondary">
                                <img style="border-radius: 50%;" src="asset/img/ceo-profile.png" height="100" width="100" />
                            </button> <span class="name mt-3 mb-3"> Md. Mushfiqur Rahman</span>
                            <span class="idd text-center">Head Of All Department & Instructor OF Networking Department</span>
                            <span style="text-align: justify; border: 2px solid #5C636A; font-size: 13px;" class="px-3 rounded mt-2 mb-3">
                            M.Sc. in Information System & Security
B.Sc. in Computer Science & Engineering
Founder & Senior Technical Trainer of Networking (IT Bangladesh)
CCNA,CCNP,RHCSA,RHCE,MCP,MCSA,CEH
                            </span>

                            <a href="mushfiq-profile.php" class="btn btn-dark px-4 mt-3">View Profile</a>
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                <span><i class="fa fa-twitter"></i></span> <span><a href="https://www.facebook.com/mushfiq11"><i class="fa fa-facebook-f"></i></span></a>
                                <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>







    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";
?>
</body>