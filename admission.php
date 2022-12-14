<?php
$page = "student_admission";
$message = "";

require "inc/database.php";
if (isset($_POST['submit'])) {
    $name = $conn->escape_string($_POST['name']);
    $username = $conn->escape_string($_POST['username']);
    $fname = $conn->escape_string($_POST['fname']);
    $mname = $conn->escape_string($_POST['mname']);
    $address = $conn->escape_string($_POST['address']);
    $paddress = $conn->escape_string($_POST['paddress']);
    $email = $conn->escape_string($_POST['email']);
    $phone = $conn->escape_string($_POST['phone']);
    $gphone = $conn->escape_string($_POST['gphone']);
    $zip = $conn->escape_string($_POST['zip']);
    $course = $conn->escape_string($_POST['course']);
    $gender = $conn->escape_string($_POST['gender']);
    $tid = $conn->escape_string($_POST['tid']);

    $year = date("y");

    $unique_id = '';

    $cq = "SELECT * FROM student_addmission WHERE course = '$course'  ORDER BY created DESC LIMIT 1";
    $cqresult = $conn->query($cq);
    if (mysqli_num_rows($cqresult)) {
        $cqrow = $cqresult->fetch_assoc();
        $course_unique_id = $cqrow['unique_id'];

        $course_unique_id_array = (explode("-", $course_unique_id));

        $course_unique_id_last = (end($course_unique_id_array));
    } else {
        $course_unique_id_last = '1000';
    }
    // exit();

    if ($course == 1) {
        $batch = 10;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'WDES' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 2) {
        $batch = 7;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'WDEV' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 3) {
        $batch = 11;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'PY' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 4) {
        $batch = 22;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'CCNA' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 5) {
        $batch = 15;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'CCNP' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 6) {
        $batch = 2;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'UIUX' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 7) {
        $batch = 5;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = '3D' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 8) {
        $batch = 16;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'GD' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 9) {
        $batch = 25;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'RH' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 10) {
        $batch = 10;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'WS' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 11) {
        $batch = 12;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'SC' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 12) {
        $batch = 20;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'ISP' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 13) {
        $batch = 6;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'AD' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 14) {
        $batch = 4;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'AM' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 15) {
        $batch = 11;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'DM' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 16) {
        $batch = 8;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'AWS' . $year . '-B' . $batch . '-' . $cuid_code . '';
    } elseif ($course == 17) {
        $batch = 14;
        $cuid_code = $course_unique_id_last + 1;
        $unique_id = 'CEH' . $year . '-B' . $batch . '-' . $cuid_code . '';
    }

    // echo $unique_id;
    // exit();

    // 1 = "Responsive Web Design";
    // 2 = "Professional Web Development";
    // 3 = "Python";
    // 4 = "Cisco Certified Network Associate";
    // 5 =  "CCNP";
    // 6 = "UX/UI Design";
    // 7 = "3D Animation";
    // 8 = "Professional
    //     Graphic
    //     Design";
    // 9 = "RED HAT - Linux";
    // 10 = "Microsoft Windows
    //     Server
    //     2016";
    // 11 = "Cyber Security";
    // 12 = "ISP
    //     Setup And
    //     Administration Using MikroTik";
    // 13 = "Android App
    //     Development";
    // 14 = "Affiliate
    //     Marketing";
    // 15 = "Digital Marketing";
    // 15 = "AWS";
    // 15 = "CEH";

    if ($course) {
        $s = "SELECT * FROM student_addmission WHERE email = '$email' limit 1";
    }

    $result = $conn->query($s);

    if ($result->num_rows > 0) {
        $message = "<div class='alert alert-danger alert-dismissible fade show'>
                            <strong>Oops Sorry </strong> This Email Already Taken
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
    } else {
        if ($gender == '') {
            $message = "<div class='alert alert-danger alert-dismissible fade show'>
                            <strong>Oops...!</strong> Gender Required
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        } else {
            if ((strspn($phone, "0123456789") == 11 && strlen($phone) == 11 && $phone[0] == '0' && $phone[1] == '1') && (strspn($gphone, "0123456789") == 11 && strlen($gphone) == 11 && $gphone[0] == '0' && $gphone[1] == '1')) {

                $q = "INSERT INTO student_addmission(unique_id,name, username, fname, mname, `address`, paddress, email, phone, gphone, zip, course, gender, tid) VALUES
                ('$unique_id','$name','$username','$fname','$mname','$address','$paddress','$email','$phone','$gphone','$zip','$course','$gender','$tid')";
                $insert = $conn->query($q);

                // Course Name
                if ($course == 1) {
                    $course_name = "Responsive Web Design";
                } elseif ($course == 2) {
                    $course_name = "Profeshional Web Development";
                } elseif ($course == 3) {
                    $course_name = "Python";
                } elseif ($course == 4) {
                    $course_name = "Cisco Certified Network Associate";
                } elseif ($course == 5) {
                    $course_name = "Cisco Certified Network Associate (Profeshional)";
                } elseif ($course == 6) {
                    $course_name = "UX/UI Design";
                } elseif ($course == 7) {
                    $course_name = "3D Animation";
                } elseif ($course == 8) {
                    $course_name = "Professional Graphic Design";
                } elseif ($course == 9) {
                    $course_name = "RED HAT - Linux";
                } elseif ($course == 10) {
                    $course_name = "Microsoft Windows Server 2016";
                } elseif ($course == 11) {
                    $course_name = "Cyber Security";
                } elseif ($course == 12) {
                    $course_name = "ISP Setup And Administration Using MikroTik";
                } elseif ($course == 13) {
                    $course_name = "Android App Development";
                } elseif ($course == 14) {
                    $course_name = "Affiliate Marketing";
                } elseif ($course == 15) {
                    $course_name = "Digital Marketing";
                } elseif ($course == 16) {
                    $course_name = "Digital Marketing";
                } elseif ($course == 17) {
                    $course_name = "Digital Marketing";
                }

                // Send Mail
                $to = $email;
                $subject = "Congress Your Application Successfully Submited ID: $unique_id";
                $message = "<b>Dear, $name </b>";
                $message .= "<p> Thanks To Purches Our Course. </p> <br>";
                $message .= "<h5> Your Payment Status Are Pending.</h5>";
                $message .= "<h5> We will check your payment very soon and let you know.</h5>";
                $message .= "<h5> We will contact you shortly Thank you</h5>";
                $message .= "<h4>Your Course :  $course_name</h4>";
                $message .= "<h4>ID Number :  $unique_id</h4>";
                $message .= "<h4>Your Transection Id :  $tid</h4>";
                $message .= "<p>Happy Journey With IT Bangladesh</p> <br>";
                $message .= "<p>Thank You. See You Soon</p>";

                $header = "From:training.itbangladesh@gmail.com \r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";

                $retval = mail($to, $subject, $message, $header);

                if ($insert) {
                    $message = "<div class='alert alert-success alert-dismissible fade show'>
                                <strong>Congress..!</strong> Application Submitted. <br>
                                Cheak Your Email Inbox.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                } else {
                    $message = "<div class='alert alert-danger alert-dismissible fade show'>
                                <strong>Oops..!</strong> Application Faild.
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
                                <?php require "inc/courses.php";?>
                            </li>
                            <li class="nav-item dropdown">
                                <div>
                                    <a class="nav-link dropdown-toggle active text-info" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Admission
                                    </a>
                                    <ul style="width: 250px; left: 0px;" class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item bg-info" href="admission.php"><i class="fas fa-star text-warning "></i> Student</a></li>
                                        <li><a class="dropdown-item " href="#"><i class="fas fa-star text-warning "></i>
                                                Teacher</a></li>
                                        <li class="ms-4"><a class="dropdown-item " href="addmission-poly-teacher.php"><i class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                Polytechnic</a></li>
                                        <li class="ms-4"><a class="dropdown-item " href="addmission-versity-teacher.php"><i class="fa-solid fa-circle-chevron-right text-warning"></i>
                                                University</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="event.php">Events</a>
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

    <section class="container py-5">
        <div class=" ">
            <h1 class="text-center fw-bold">Admission Process</h1>
            <hr class="new9">
        </div>
    </section>


    <!-- Admission Pross -->
    <section data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="container my-5">
            <div class="col-md-12">
                <nav class="d-flex justify-content-center">
                    <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                        <button class="nav-link  btn btn-danger btn-lg bg-danger text-light me-2 mb-5 mx-auto" id="nav-off-tab" data-bs-toggle="tab" data-bs-target="#nav-off" type="button" role="tab" aria-controls="nav-off" aria-selected="true">
                            Offline Procedure
                        </button>

                        <button class="nav-link btn btn-danger bg-warning btn-lg text-dark me-2 mb-5 mx-auto" id="nav-online-tab" data-bs-toggle="tab" data-bs-target="#nav-online" type="button" role="tab" aria-controls="nav-online" aria-selected="true">
                            Online Procedure
                        </button>

                        <button class="nav-link btn btn-danger bg-primary btn-lg text-light mb-5 mx-auto" id="nav-form-tab" data-bs-toggle="tab" data-bs-target="#nav-form" type="button" role="tab" aria-controls="nav-form" aria-selected="true">
                            Admission Form
                        </button>
                    </div>
                </nav>
            </div>

            <div class="col-md-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade  p-3" id="nav-off" role="tabpanel" aria-labelledby="nav-off-tab">
                        <div class="col-lg-12 order-first order-lg-last">
                            <div class="offline-pro">
                                <div class="ad-pro texss">
                                    <h1 class="fw-bold text-info text-center">Offline Procedure</h1><br>
                                    <p class="fw-bold">To become a student of Creative IT you need to fulfill several
                                        formalities to maintain
                                        records of both end. And while taking admission we need several important
                                        documents for records. Here
                                        are few steps that you need to follow for completing the admission procedures.
                                    </p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-circle text-info me-2"></i> Documents that are required
                                            need to submit
                                            while taking admission.
                                        </li><br>
                                        <li><i class="fas fa-circle text-info me-2"></i> You must pay your Course fee on
                                            time. With
                                            every extension of the
                                            given date late fee will be added to the course fee.</li><br>
                                        <li><i class="fas fa-circle text-info me-2"></i> Admission Fee BDT 2000/- is
                                            compulsory.</li>
                                        <br>
                                        <li><i class="fas fa-circle text-info me-2"></i> When you are paying the course
                                            fee in
                                            installments the must follow
                                            rules are given </li><br>
                                        <ul style="margin-left: 40px;" class="list-unstyled">
                                            <li><span><i class="fas fa-star text-danger me-2"></i></span> You must pay
                                                50% of
                                                the course fee in time of admission
                                                and
                                                extra 50% of the course
                                                fee you must pay within 25-30 days after the admission.</li><br>
                                            <li><span><i class="fas fa-star text-danger me-2"></i></span> You must pay
                                                50% of
                                                the course fee in time of admission
                                                and
                                                extra 50% of the course
                                                fee you must pay within 25-30 days after the admission.</li><b></b>
                                            <li><span><i class="fas fa-star text-danger me-2"></i></span> Paid course
                                                fee is
                                                not refundable.</li><br>
                                            <li><span><i class="fas fa-star text-danger me-2"></i></span> If anyone
                                                wants to
                                                cancel his/her admission then he/she
                                                must follow our stated
                                                procedure</li><br>
                                            <li><span><i class="fas fa-star text-danger me-2"></i></span> One can change
                                                the
                                                course and batch only if it is
                                                justified
                                                with reasons and within
                                                given time periods.</li><br>
                                            <li><span><i class="fas fa-star text-danger me-2"></i></span> He who wants
                                                to do
                                                1 year Diploma courses must be
                                                regular
                                                and needs to successfully
                                                complete the course otherwise we will not provide the certificate.</li>
                                            <br>
                                            <li><span><i class="fas fa-star text-danger me-2"></i></span> You must write
                                                present/permanent address, phone number
                                                and
                                                other informations
                                                correctly in admission from. If you fail to provide the correct
                                                information
                                                then your admission will
                                                be cancelled.</li><br>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="ad-pro">
                                    <h2 class="fw-bold text-danger">Requirements</h2>
                                    <p class="text-danger">The list of documents that are required for admission –</p>
                                    <br>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-circle text-info me-2"></i> Documents that are required
                                            need to
                                            submit
                                            while taking admission.
                                        </li><br>
                                        <li><i class="fas fa-circle text-info me-2"></i> You must pay your Course fee on
                                            time. With
                                            every extension of the
                                            given date late fee will be added to the course fee.</li><br>
                                        <li><i class="fas fa-circle text-info me-2"></i> Admission Fee BDT 2000/- is
                                            compulsory.</li>
                                        <br>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="nav-online" role="tabpanel" aria-labelledby="nav-online-tab">
                        <div class="online-pro texss ">

                            <div class="ad-pro texss">
                                <h1 class="fw-bold text-info text-center">Online Procedure</h1><br>
                                <p class="fw-bold">To become a student of Creative IT you need to fulfill several
                                    formalities to maintain
                                    records of both end. And while taking admission we need several important
                                    documents for records. Here
                                    are few steps that you need to follow for completing the admission procedures.
                                </p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-circle text-info me-2"></i> Documents that are required
                                        need to submit
                                        while taking admission.
                                    </li><br>
                                    <li><i class="fas fa-circle text-info me-2"></i> You must pay your Course fee on
                                        time. With
                                        every extension of the
                                        given date late fee will be added to the course fee.</li><br>
                                    <li><i class="fas fa-circle text-info me-2"></i> Admission Fee BDT 2000/- is
                                        compulsory.</li>
                                    <br>
                                    <li><i class="fas fa-circle text-info me-2"></i> When you are paying the course
                                        fee in
                                        installments the must follow
                                        rules are given </li><br>
                                    <ul style="margin-left: 40px;" class="list-unstyled">
                                        <li><span><i class="fas fa-star text-danger me-2"></i></span> You must pay 50%
                                            of
                                            the course fee in time of admission
                                            and
                                            extra 50% of the course
                                            fee you must pay within 25-30 days after the admission.</li><br>
                                        <li><span><i class="fas fa-star text-danger me-2"></i></span> You must pay 50%
                                            of
                                            the course fee in time of admission
                                            and
                                            extra 50% of the course
                                            fee you must pay within 25-30 days after the admission.</li><b></b>
                                        <li><span><i class="fas fa-star text-danger me-2"></i></span> Paid course fee is
                                            not refundable.</li><br>
                                        <li><span><i class="fas fa-star text-danger me-2"></i></span> If anyone wants to
                                            cancel his/her admission then he/she
                                            must follow our stated
                                            procedure</li><br>
                                        <li><span><i class="fas fa-star text-danger me-2"></i></span> One can change the
                                            course and batch only if it is
                                            justified
                                            with reasons and within
                                            given time periods.</li><br>
                                        <li><span><i class="fas fa-star text-danger me-2"></i></span> He who wants to do
                                            1 year Diploma courses must be
                                            regular
                                            and needs to successfully
                                            complete the course otherwise we will not provide the certificate.</li>
                                        <br>
                                        <li><span><i class="fas fa-star text-danger me-2"></i></span> You must write
                                            present/permanent address, phone number
                                            and
                                            other informations
                                            correctly in admission from. If you fail to provide the correct
                                            information
                                            then your admission will
                                            be cancelled.</li><br>
                                    </ul>
                                </ul>
                            </div>
                            <div class="ad-pro">
                                <h2 class="fw-bold text-danger">Requirements</h2>
                                <p class="text-danger">The list of documents that are required for admission –</p>
                                <br>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-circle text-info me-2"></i> Documents that are required
                                        need to
                                        submit
                                        while taking admission.
                                    </li><br>
                                    <li><i class="fas fa-circle text-info me-2"></i> You must pay your Course fee on
                                        time. With
                                        every extension of the
                                        given date late fee will be added to the course fee.</li><br>
                                    <li><i class="fas fa-circle text-info me-2"></i> Admission Fee BDT 2000/- is
                                        compulsory.</li>
                                    <br>
                                </ul>

                            </div>
                            <div class="ad-pro b-0">
                                <h2 class="text-info fw-bold">Upcoming Batches</h2>
                                <p class="text-danger">The list of upcoming batches that you can get admitted– </p>
                                <table class="table table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Graphic Design</th>
                                            <th scope="col">Web Design</th>
                                            <th scope="col">Web Development</th>
                                            <th scope="col">Animation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GB - 2001</td>
                                            <td>CIT WEB - 2001</td>
                                            <td>UI/UX - 2001</td>
                                            <td>LEGB - 2001</td>
                                        </tr>
                                        <tr>
                                            <td>GB - 2002</td>
                                            <td>LEW - 2001</td>
                                            <td>IAW - 2001</td>
                                            <td>-----</td>
                                        </tr>
                                        <tr>
                                            <td>UI/UX - 2001</td>
                                            <td>IAW - 2001</td>
                                            <td>UI/UX - 2001</td>
                                            <td>IAW - 2001</td>
                                        </tr>
                                        <tr>
                                            <td>LEGB - 2001</td>
                                            <td>-----</td>
                                            <td>UI/UX - 2001</td>
                                            <td>IAW - 2001</td>`
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade show active p-3" id="nav-form" role="tabpanel" aria-labelledby="nav-form-tab">
                        <div class="online-pro">
                            <!-- addmission form start -->
                            <div class="container1">
                                <div class="title">
                                    <h3 class="fw-bold">
                                        Registration:
                                    </h3>
                                </div>
                                <div class="content">
                                    <?php echo $message ?>
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                        <div class="user-details">
                                            <div class="input-box col-md-6">
                                                <span class="details">Full Name</span>
                                                <input type="text" name="name" placeholder="Enter your name" required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Username</span>
                                                <input type="text" name="username" placeholder="Enter your username" required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Father's Name</span>
                                                <input type="text" name="fname" placeholder="Father's Name" required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Mother's Name</span>
                                                <input type="text" name="mname" placeholder="Mother's Name" required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Present Address</span>
                                                <input type="text" name="address" placeholder="Vill- , Post- , District- ,Division- " required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Permanent Address</span>
                                                <input type="text" name="paddress" placeholder="Vill- , Post- , District- ,Division- " required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Email</span>
                                                <input type="email" name="email" placeholder="Enter your email" required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Phone Number</span>
                                                <input type="text" name="phone" placeholder="Enter your number" required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Guardian's Phone</span>
                                                <input type="text" name="gphone" placeholder="Enter your number" required>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">ZIP Code</span>
                                                <input type="number" name="zip" class="form-control" placeholder="Zip Code" required>
                                            </div>
                                            <div class="input-box-control">
                                                <label for="course" class="fw-bold ">Course</label>
                                                <select id="course" name="course" class="form-control my-2" aria-label="Default select example" required>
                                                    <option value="">Select Your Course</option>
                                                    <option value="1"> Responsive Web Design</option>
                                                    <option value="2"> Professional Web
                                                        Development</option>
                                                    <option value="3"> Python</option>
                                                    <option value="4">Cisco Certified
                                                        Network Associate</option>
                                                    <option value="5">Cisco Certified Network Associate (Profeshional)</option>
                                                    <option value="6"> UX/UI Design</option>
                                                    <option value="7">3D Animation</option>
                                                    <option value="8">Professional
                                                        Graphic
                                                        Design</option>
                                                    <option value="9">RED HAT - Linux</option>
                                                    <option value="10">Microsoft Windows
                                                        Server
                                                        2016</option>
                                                    <option value="11">Cyber Security</option>
                                                    <option value="12">ISP
                                                        Setup And
                                                        Administration Using MikroTik</option>
                                                    <option value="13">Android App
                                                        Development</option>
                                                    <option value="14">Affiliate
                                                        Marketing</option>
                                                    <option value="15">Digital Marketing</option>
                                                    <option value="16">AWS (Amazon Web Service)</option>
                                                    <option value="17">CEH (Certified Ethical Hacker)</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="gender-details pt-4">
                                            <input type="radio" name="gender" value="Male" id="dot-1">
                                            <input type="radio" name="gender" value="Female" id="dot-2">
                                            <input type="radio" name="gender" value="Prefer-not-to-say" id="dot-3">
                                            <span class="gender-title">Gender</span>
                                            <div class="category">
                                                <label for="dot-1">
                                                    <span class="dot one"></span>
                                                    <span class="gender">Male</span>
                                                </label>
                                                <label for="dot-2">
                                                    <span class="dot two"></span>
                                                    <span class="gender">Female</span>
                                                </label>
                                                <label for="dot-3">
                                                    <span class="dot three"></span>
                                                    <span class="gender">Prefer not to say</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Registration Fee</span>
                                            <input type="text" name="tid" class="form-control" placeholder="Transaction Id" required>
                                            <p class="pt-1 text-danger">*Give Your Transaction id Of Bkash</p>
                                        </div>
                                        <div class=" col-lg-12 text-center pt-2">
                                            <div class="pt-3 ">
                                                <button style="width: 250px;" type="submit" name="submit" class="btn btn-info btn-lg px-5 shadow"> <span class="rounded text-light "> Submit</span></button>
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
require "inc/script.php";
?>

</body>

</html>