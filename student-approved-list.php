<?php
$page = "contest-info";
// session_start();
// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
// } else {
//     header("location:login.php");
// }
// if ($_SESSION['role'] == 2) {
// } else {
//     header("location:login.php");
// }
require "inc/database.php";

$contest = $conn->query("SELECT * FROM student_addmission WHERE status = '2' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
$page = "student";
require "inc/header.php";

?>
    <title>Admission Student</title>

    <link rel="stylesheet" type="text/css" href="asset/DataTables/datatables.min.css" />
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Admission
                                        </a>
                                        <ul style="width: 250px; left: 0px;" class="dropdown-menu"
                                            aria-labelledby="navbarDropdown">

                                            <li><a class="dropdown-item" href="admission.php"><i
                                                        class="fas fa-star text-warning "></i> Student</a></li>
                                            <li><a class="dropdown-item " href="#"><i
                                                        class="fas fa-star text-warning "></i>
                                                    Teacher</a></li>
                                            <li class="ms-4"><a class="dropdown-item "
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
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
                                    <a class="nav-link" href="https://itbd-training.blogspot.com/"
                                        target="blank">Blog</a>
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
                                                        class="fas fa-star text-warning "></i> Programming Contest</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-star text-warning "></i>
                                                    Networking Contest</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="contact.php">Contact</a>
                                </li>
                            </ul>
                            <form class="d-flex justify-content-center py-4">
                                <a href="admin/admin-edit.php" class="btn btn-success btn-sm me-3" title="Log In"
                                    type="submit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href="admin/logout.php" class="btn btn-danger btn-sm me-3" title="Log In"
                                    type="submit"><i class="fas fa-sign-in-alt "></i> Log Out</a>
                            </form>
                        </div>

                </div>
            </nav>
        </div>

    </section>
    <!-- Main Nav End -->

    <div class="container-fluid px-3 pb-5">
        <h2 class="pt-5 fw-bold text-center">Addmission List of Polytechnic Teachers</h2>
        <div>
            <a href="admin/lhasdfd4654sd4fas465s4dashboard.php" class="btn btn-warning px-3 my-3 "><i class="fa-solid fa-gauge"></i>
                Dahsboard</a>
        </div>
        <!-- <form action="">
            <a href="make_pdf_poly_teacher.php" class="btn btn-primary px-5">Download PDF <i class="fa-solid fa-download"></i></a>
        </form> -->
        <div>
            <table id="myTable" class="table table-striped table-responsive mt-2 display responsive nowrap">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">ID NO</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Course</th>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Aplication Time </th>
                        <th scope="col">Present Address</th>
                        <th scope="col">Gurdian Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$i = 0;
while ($row = $contest->fetch_assoc()) {
    $i++;
    ?>

                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['unique_id'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php
if ($row['course'] == 1) {
        echo "Responsive Web Design";
    } elseif ($row['course'] == 2) {
        echo "Profeshional Web Development";
    } elseif ($row['course'] == 3) {
        echo "Python";
    } elseif ($row['course'] == 4) {
        echo "Cisco Certified Network Associate";
    } elseif ($row['course'] == 5) {
        echo "Cisco Certified Network Associate (Profeshional)";
    } elseif ($row['course'] == 6) {
        echo "UX/UI Design";
    } elseif ($row['course'] == 7) {
        echo "3D Animation";
    } elseif ($row['course'] == 8) {
        echo "Professional Graphic Design";
    } elseif ($row['course'] == 9) {
        echo "RED HAT - Linux";
    } elseif ($row['course'] == 10) {
        echo "Microsoft Windows Server 2016";
    } elseif ($row['course'] == 11) {
        echo "Cyber Security";
    } elseif ($row['course'] == 12) {
        echo "ISP Setup And Administration Using MikroTik";
    } elseif ($row['course'] == 13) {
        echo "Android App Development";
    } elseif ($row['course'] == 14) {
        echo "Affiliate Marketing";
    } elseif ($row['course'] == 15) {
        echo "Digital Marketing";
    } elseif ($row['course'] == 16) {
        echo "Digital Marketing";
    } elseif ($row['course'] == 17) {
        echo "Digital Marketing";
    }
    ?></td>
                        <td><?php echo $row['tid'] ?></td>
                        <td><?php echo $row['created'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['gphone'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <a href='approve-student-admission.php?id=<?php echo $row['id'] ?>' class='btn btn-sm btn-primary'>Approve <i class='fa-solid fa-check'></i></a>
                        </td>
                    </tr>


                <?php
}
?>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Footer -->

    <?php
require "inc/footer.php";
require "inc/script.php";
?>

    <script type="text/javascript" src="asset/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                responsive: true
            });
        });
    </script>
</body>