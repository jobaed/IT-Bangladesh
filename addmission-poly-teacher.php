<?php
$page = "poly-teacher";
require "inc/database.php";
$message = '';

if (isset($_POST['submit'])) {
    $name = $conn->escape_string($_POST['name']);
    $email = $conn->escape_string($_POST['email']);
    $phone = $conn->escape_string($_POST['phone']);
    $institute = $conn->escape_string($_POST['institute']);
    $designation = $conn->escape_string($_POST['designation']);
    $course = $conn->escape_string($_POST['course']);
    $tid = $conn->escape_string($_POST['t-id']);

    $photo = $_FILES['photo'];
    $photoname = $photo['name'];
    $filtmpname = $photo['tmp_name'];
    $filepat = "asset/polytechnic-teacher-admission-photo/" . time() . "-" . $photoname;
    move_uploaded_file($filtmpname, $filepat);

    $approvephoto = $_FILES['approvephoto'];
    $photoname2 = $approvephoto['name'];
    $filtmpname2 = $approvephoto['tmp_name'];
    $filepat2 = "asset/polytechnic-teacher-admission-photo/approval-latter/" . rand(500, 9999) . "-" . $photoname2;
    move_uploaded_file($filtmpname2, $filepat2);
    //exit;

    if (strspn($phone, "0123456789") == 11 && strlen($phone) == 11 && $phone[0] == '0') {
        $q = "INSERT INTO polytechnicteacher(name, email, phone, institute, photo, approvephoto, designation, course, tid) VALUES ('$name','$email','$phone','$institute','$filepat','$filepat2', '$designation','$course','$tid')";
        $insert = $conn->query($q);

        // Send Mail
        $to = $email;
        $subject = "Congress Your Application Successfully.";
        $message = "<b>Dear, $name </b>";
        $message .= "<p> Thanks To Purches Our Course. </p> <br>";
        $message .= "<h5> Your Payment Status Are Pending.</h5>";
        $message .= "<h5> We will check your payment very soon and let you know.</h5>";
        $message .= "<h5> We will contact you shortly Thank you</h5>";
        $message .= "<h4>Your Course :  $course</h4>";
        $message .= "<h4>Your Transection Id :  $tid</h4>";
        $message .= "<p>Happy Journey With IT Bangladesh</p> <br>";
        $message .= "<p>Thank You. See You Soon</p>";

        $header = "From:training.itbangladesh@gmail.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail($to, $subject, $message, $header);

        if ($insert) {
            $message = "<div class='alert alert-success alert-dismissible fade show'>
                        <strong>Application Successfully Done</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        } else {
            $message = "<div class='alert alert-danger alert-dismissible fade show'>
                        <strong>Insert Faild</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        }
    } else {
        $message = "<div class='alert alert-danger alert-dismissible fade show'>
                        <strong>Invalid Phone</strong>
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

    <title>IT | Bangladesh Admission</title>
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
                                <a class="nav-link " href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <?php require "inc/courses.php";?>
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle active text-info" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Admission
                                    </a>
                                    <ul style="width: 250px; left: 0px;" class="dropdown-menu"
                                        aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="admission.php"><i
                                                    class="fas fa-star text-warning "></i> Student</a></li>
                                        <li><a class="dropdown-item " href="#"><i class="fas fa-star text-warning "></i>
                                                Teacher</a></li>
                                        <li class="ms-4"><a class="dropdown-item bg-primary text-light"
                                                href="addmission-poly-teacher.php"><i
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
                                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Events
                                    </a>
                                    <ul style="width: 250px; left: 0px;" class="dropdown-menu"
                                        aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="event.php">Upcoming Events</a></li>
                                        <li><a class="dropdown-item" href="event.php">
                                                Upcoming Workshops</a></li>
                                        <li><a class="dropdown-item" target="blank"
                                                href="https://www.youtube.com/user/Mdmushfiq111"></i>
                                                Youtube Channel</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://itbd-training.blogspot.com/" target="blank">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
                                <a class="nav-link" href="contact.php">Contact</a>
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

    <section class="container pt-5">
        <div class=" ">
            <h1 class="text-center fw-bold">Admission Polytechnic Teacher</h1>
            <hr class="new9">
        </div>

    </section>


    <!-- Admission Pross -->
    <section>
        <div class="container my-5">
            <div class="col-md-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-form" role="tabpanel" aria-labelledby="nav-form-tab">
                        <div class="online-pro">
                            <!-- addmission form start -->
                            <div class="container1">
                                <div class="title">
                                    <h3 class="fw-bold">
                                        Registration:
                                    </h3>
                                </div>
                                <?php if (isset($_POST['submit'])) {
    echo $message;
}
?>
                                <div class="content">
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="user-details">
                                            <div class="input-box col-lg-6 ">
                                                <span for="name" class="details">Full Name:</span>
                                                <input id="name" type="text" class="shadow" name="name"
                                                    placeholder="Your Name" value="<?php if (isset($_POST['submit'])) {
    echo $name;
}?>" required>
                                            </div>
                                            <div class="input-box col-lg-6">
                                                <span class="details">Email:</span>
                                                <input type="email" name="email" class="shadow" placeholder="Your Email"
                                                    value="<?php if (isset($_POST['submit'])) {
    echo $email;
}?>" required>
                                            </div>
                                            <div class="input-box col-lg-6">
                                                <span class="details">Phone:</span>
                                                <input type="text" name="phone" class="shadow" placeholder="Your Phone"
                                                    value="<?php if (isset($_POST['submit'])) {
    echo $phone;
}?>" required>
                                            </div>
                                            <div class="input-box col-lg-6">
                                                <span class="details">Institite Name:</span>
                                                <input type="text" name="institute" class="shadow"
                                                    placeholder="Your Institute" value="<?php if (isset($_POST['submit'])) {
    echo $institute;
}?>" required>
                                            </div>
                                            <div class="input-box border-0 col-lg-6 ">
                                                <span class="details">Your Photo:</span>
                                                <input type="file" class="form-control border-0 shadow" name="photo"
                                                    accept="image/png, image/gif, image/jpeg" required>
                                            </div>
                                            <div class="input-box border-0 col-lg-6">
                                                <span class="details">Approval Letter From Principal</span>
                                                <input type="file" class="form-control border-0 shadow"
                                                    name="approvephoto" required>
                                            </div>
                                            <div class="form-control border-0 px-0">
                                                <div>
                                                    <label class="form-label">Designation:</label><br>
                                                    <select class="form-select shadow" name="designation"
                                                        aria-label="Default select example" required>
                                                        <option>Select Designation</option>
                                                        <option <?php if (isset($_POST['submit'])) {
    if ($designation == 'junior-instructor') {
        echo "selected";
    }

}?> value="junior-instructor">Junior Instructor</option>
                                                        <option <?php if (isset($_POST['submit'])) {
    if ($designation == 'instructor') {
        echo "selected";
    }

}?> value="instructor">Instructor</option>
                                                        <option <?php if (isset($_POST['submit'])) {
    if ($designation == 'head-of-department') {
        echo "selected";
    }

}?> value="head-of-department">Head Of Department</option>
                                                        <option <?php if (isset($_POST['submit'])) {
    if ($designation == 'chif-instructor') {
        echo "selected";
    }

}?> value="chif-instructor">Chief Instructor</option>
                                                        <option <?php if (isset($_POST['submit'])) {
    if ($designation == 'head-of-department') {
        echo "selected";
    }

}?> value="head-of-department">Head Of Department</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-control border-0 px-0">
                                                <label class="form-label">Course:</label><br>
                                                <select class="form-select shadow" name="course"
                                                    aria-label="Default select example" required>
                                                    <option>Select Course</option>
                                                    <option <?php if (isset($_POST['submit'])) {
    if ($course == 'networking') {
        echo "selected";
    }

}?> value="networking">Networking</option>
                                                    <option <?php if (isset($_POST['submit'])) {
    if ($course == 'python-with-django') {
        echo "selected";
    }

}?> value="python-with-django">Python With Django</option>
                                                </select>
                                            </div>
                                            <div class="input-box col-lg-6 pt-2">
                                                <span class="details">Registration Fee</span>
                                                <input type="text" class="shadow" name="t-id"
                                                    placeholder="Transaction Id" value="<?php if (isset($_POST['submit'])) {
    echo $tid;
}?>" required>
                                                <p class="pt-1 text-danger">*Give Your Transaction id Of Bkash</p>
                                            </div>
                                            <div class="form-control border-0 text-center px-0">
                                                <input type="submit" value="Submit" class="btn btn-primary w-25 shadow"
                                                    name="submit">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <!-- Footer -->
    <?php
require "inc/footer.php";
require 'inc/script.php';
?>

</body>

</html>