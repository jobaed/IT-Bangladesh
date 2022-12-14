<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "graphic";
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
            <h2 class="fw-bold text-center py-4">Professional Graphic Design</h2>
            <div id="webDesign" class="card course-item border-0 shadow mx-auto">
                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">NEW
                </div>

                <div class="course-image">
                    <img class="card-img-top" src="asset/img/pro-graphic-design.png" alt="Card image cap">
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
                        <h5 class="card-title text-center fw-bold text-info pb-1 pt-5">Professional Graphic Design</h5>
                        <p class="text-center"><span class="text-muted text-decoration-line-through">15000৳</span>
                            <span class="fw-bold">&nbsp; 13000৳</span>
                        </p>
                        <p class="text-dark text-center text-muted">Already Enroll - 599</p>
                        <div class="py-3 px-5">
                            <a href="admission.php"><button class="btn btn-info text-light form-control">Enroll
                                    Now</button></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold text-center pt-2">About The Course</h3>
                        <p style="text-align: justify;" class=" pt-3 pe-3">
                            The main purpose here is to make you able to use the graphic design tools and
                            techniques in a professional way. Graphic Design helps to build the brand identity
                            of a company. Thus, it needs to be conceptual and unique to represent a company,
                            brand or any kind of products or services. The module is designed to cover all
                            aspects of Graphic Design and it is mostly helpful for a fresher who can start
                            afresh. To know more about the module, take a look in the highlights of the
                            module and get insights of how we are conducting the course.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-dark p-0">
        <div class="container row px-5 p-0">
            <div class=" col-md-6 px-2 py-3 ">
                <h4 class="fw-bold pt-2 text-light pt-4">Project Items</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Social &nbsp; Media &nbsp; Banner &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Professional &nbsp; Presentation</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Raster &nbsp; to &nbsp; Vector</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Business &nbsp; Card</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Invoice &nbsp; Template &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Letterhead &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Envelope &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; ID &nbsp; Card &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Flyer &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Brochure &nbsp; Layout</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Logo &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Desk &nbsp; & &nbsp; Wall &nbsp; Calendar &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Product &nbsp; Packaging</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Product &nbsp; Label &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Food &nbsp; Menu &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Resume &nbsp; & &nbsp; Cover &nbsp; letter &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Certificate &nbsp; Template &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; T-Shirt &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Mug &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Image &nbsp; Retouch</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Pillow &nbsp; Cover &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Facebook &nbsp; CoverPhoto &nbsp; Resize</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Landscape &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Image &nbsp; Retouch</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Image &nbsp; clipping</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Various &nbsp; types &nbsp; of &nbsp; Masking</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Neck &nbsp; Joint</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Banner &nbsp; / &nbsp; Poster &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Landing &nbsp; Page &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Magazine &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Web Banner &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Newsletter &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Web &nbsp; UI &nbsp; Design</i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Social &nbsp; Media &nbsp; Banner &nbsp; Design </i> <br>
                </p>
            </div>
            <div class="col-md-6 px-2 py-3">
            <h4 class="pt-4 fw-bold text-light"><i class="fa-solid fa-chalkboard-user fa-lg text-warning"></i> <span class=""> &nbsp; Instructor</span></h4>
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card card1 p-4">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn btn-secondary">
                                <img style="border-radius: 50%;" src="asset/img/rikta-parvin.png" height="100" width="100" />
                            </button> <span class="name mt-3 mb-3">Rikta Parvin</span>
                            <span class="idd text-center">Instructor Of Graphic Department</span>
                            <span style="text-align: justify; border: 2px solid #5C636A; font-size: 15px;" class="px-3 rounded mt-2 mb-3">
                            Professional Graphic Designer Apollo International - Bangladesh
                            And IT Bangladesh, Expert In Graphic, uiux, 3D Animation
                            </span>

                            <a href="rikta-parvin.php" class="btn btn-dark px-4 mt-3">View Profile</a>
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span>
                                <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="fw-bold pt-2 text-light pt-4">Prerequisites</h4>
                <button class="btn btn-warning px-3 my-2 mb-5">Basic Knowledge on Graphic Design</button>
                <h4 class="fw-bold pt-2 text-light">Marketplace</h4>
                <p> <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp;Fiverr</i> <br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Freelancer </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Shutterstock </i><br>
                    <i class="fa-solid fa-circle-notch text-warning py-2"> &nbsp; Adobe &nbsp; Stock</i><br>
                    <!-- <div class="col-md-4 py-3 pb-5">
                    <h4 class="fw-bold pt-2 text-light pt-4">Duration</h4>
                    <p class="text-warning">Duration : <br> 6 Months</p>
                    <button class="btn btn-warning  my-2"></button>
                    <p class="text-warning">Total Class : <br> - 48</p>
                    <button class="btn btn-warning  my-2"></button>
                    <p class="text-warning">- 2 hours a Day <br>- 2 Days in a Week</p>
                </div> -->
            </div>

        </div>
    </div>
    <div class="container px-4 py-4">
        <h3 class="fw-bold py-4">Career Opportunity</h3>
        <p class="">The career opportunity in graphic design is demanding all over the world. Two
            great opportunities in graphic design are freelancing and outsourcing. With the
            passing time, foreign countries are in need of more and more freelancers and
            outsourcers. They are looking for designers in the third world countries and
            according to the statistics, Bangladesh is in the third position. Graphic designers
            can explore their career in the different areas representing different titles. Such as-
        </p>
        <p class="fw-bold">
            Graphics Designer <br>
            Creative Director <br>
            Creative Executive<br>
            Brand Promoter<br>
            PhotoShop Artist<br>
            Logo Designer<br>
            UI Designer And Related Occupations.
        </p>
        <p>A perfect blend of varieties of skills will definitely lead your path towards success.
            For starting your own outsourcing business, to freelance jobs or to work in local
            marketplaces, all the opportunities are there for you. The best the design the better
            your career path will be. Graphic design is leaving its remarks all over country.</p>
    </div>






    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";
?>

</body>