<?php
$page = "contest";
require "inc/database.php";

$message = '';
if (isset($_POST['submit'])) {
    $name = $conn->escape_string($_POST['name']);
    $email = $conn->escape_string($_POST['email']);
    $phone = $conn->escape_string($_POST['phone']);
    $institute = $conn->escape_string($_POST['institute']);
    $semester = $conn->escape_string($_POST['semester']);
    $hacker_rank = $conn->escape_string($_POST['hacker']);
    $roll = $conn->escape_string($_POST['roll']);
    $head = $conn->escape_string($_POST['head-of-dept']);
    $district = $conn->escape_string($_POST['district']);
    if (strspn($phone, "0123456789") == 11 && strlen($phone) == 11 && $phone[0] == '0' && $phone[1] == '1') {
        $selectQuery = "select * from contest where email='" . $email . "' limit 1";
        $SQ_R = $conn->query($selectQuery);
        if ($SQ_R->num_rows > 0) {
            echo "<script>alert('This Email Is Already Taken')</script>";
            exit;
        }


        $insertQuery = "INSERT INTO contest(name, email, phone, institute, semester, hacker_rank, roll, headOfTheDept, district) 
    VALUES('$name', '$email', '$phone', '$institute','$semester','$hacker_rank','$roll', '$head', '$district')";

        $insert = $conn->query($insertQuery);
        if (!$insert) {
            $message = "<div class='alert alert-danger alert-dismissible fade show'>
                            <strong>insert Faild; Try Again </strong> 
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
            echo "<script>alert('Insert Faild')</script>";
        } else {
            $message = "<div class='alert alert-primary alert-dismissible fade show'>
                        <strong>Your Data Insert Successfull</strong> 
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";

            echo "<script>alert('Insert Successfull')</script>";
        }
    } else {
        $message = "<div class='alert alert-warning alert-dismissible fade show'>
                        <strong>Invalid Phone Please Enter Valid Phone Number</strong> 
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>

<?php
require "inc/header.php";

?>
    <title>IT | Bangladesh | Contest</title>



</head>

<body>
    <!-- Main Nav Start -->

    <section class="container-fluid shadow sticky-top bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light shadow-buttom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <a href="index.php"><img src="asset/img/IT-Bd-3.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <?php require "inc/courses.php"; ?>
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
                                        <a class="nav-link active text-info dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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


    <div class="container mx-auto py-3">
        <div class="rounded image-wrapper py-3 bg-secondary mb-2">
            <div class="px-5">
                <?php

                echo $message;

                ?>
            </div>
            <img src="asset/img/contest-banner.jpeg" alt="">
        </div>
        <div class="px-5 bg-secondary text-light rounded">
            <h2 data-aos="fade-up" data-aos-duration="2000" class="fw-bold pt-4">IT Bangladesh IPPC-2022</h2>
            <p data-aos="fade-up" data-aos-duration="2000" class="py-3">IT Bangladesh কর্তৃক আয়োজিত প্রোগ্রামিং কনটেস্ট। এই কনটেস্টে
                অংশ নিতে ফর্মটি সতর্কতার
                সাথে
                পূরণ করুন।
            </p>
            <a data-aos="fade-up" data-aos-duration="2000" target="_blank" href="https://www.facebook.com/1538878039698372/posts/3076412632611564/?sfnsn=mo" class="text-light">
                বিস্তারিত জানতে এখানে ক্লিক করুন <i class="fa-solid fa-circle-right"></i>
            </a>
            <hr class="text-light">
            <div class=" mx-auto w-75">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label" for="name">*Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $name; ?>" placeholder="Your Name" required />
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label" for="email">*Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" placeholder="Your Email" required />
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label" for="phone">*Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $phone; ?>" placeholder="Your Phone" required />
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label" for="Institute">*Institute</label>
                        <input type="text" name="institute" id="Institute" class="form-control" value="<?php echo $phone; ?>" placeholder="Your Institute" required />
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label" for="hacker">*Hacker Rank Handel Name</label>
                        <input type="text" name="hacker" id="hacker" class="form-control" value="<?php echo $hacker_rank; ?>" placeholder="Hacker Rank Handel Name" required />
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label">*Semester/Class</label><br>
                        <select class="form-select" name="semester" value="<?php echo $semester; ?>" aria-label="Default select example" required>
                            <option value="" selected>Select</option>
                            <option value="1st-semester">1st Semester</option>
                            <option value="2nd-semester">2nd Semester</option>
                            <option value="3rd-semester">3rd Semester</option>
                            <option value="4th-semester">4th Semester</option>
                            <option value="5th-semester">5th Semester</option>
                            <option value="6th-semester">6th Semester</option>
                            <option value="7th-semester">7th Semester</option>
                        </select>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label" for="roll">*Roll</label>
                        <input type="number" name="roll" id="roll" class="form-control" value="<?php echo $roll; ?>" placeholder="Your Roll" required />
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label" for="head">*Head Of The Department</label>
                        <input type="text" name="head-of-dept" id="head" class="form-control" value="<?php echo $head; ?>" placeholder="Head Of The Department" required />
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4">
                        <label class="form-label" for="district">*Home District</label>
                        <input type="text" name="district" id="district" class="form-control" value="<?php echo $district; ?>" placeholder="Your Home District" required />
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000" class="form-outline mb-4 text-center pb-3">
                        <input type="submit" value="Submit" name="submit" class="btn btn-info text-light px-5">
                    </div>
                </form>
                <p data-aos="fade-up" data-aos-duration="2000" class="text-light fw-bold pb-3">After submitting, join our Whatsapp group for get the next update :
                    <a href="https://chat.whatsapp.com/BSqr3HhdWVYA0yFhsdj4Dx"><br><span class="btn btn-info text-light my-4 px-5 pb-3 fw-bold">ITBD-IPPC-2022 <i class="fa-brands fa-whatsapp fa-2x ps-2"></i></span></a>
                </p>
            </div>
        </div>
    </div>


    <!-- Footer -->

    <?php require "inc/footer.php"; ?>



    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>


</body>