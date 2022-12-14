<?php
// $page = "contest-info";
// session_start();
// if (isset($_SESSION['loggedin']) &&  $_SESSION['loggedin'] == true) {
// } else {
//     header("location:login.php");
// }
require "inc/database.php";

$contest = $conn->query("SELECT * FROM contest");
?>

<!DOCTYPE html>
<html lang="en">

<head>

<?php
$page = "cinfo";
require "inc/header.php";

?>
    <title>Contest Info</title>

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
                                <a href="admin-edit.php" class="btn btn-success btn-sm me-3" title="Log In" type="submit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href="admin/logout.php" class="btn btn-danger btn-sm me-3" title="Log In" type="submit"><i class="fas fa-sign-in-alt "></i> Log Out</a>
                            </form>
                        </div>

                </div>
            </nav>
        </div>

    </section>
    <!-- Main Nav End -->

    <div class="container-fluid pb-5 px-5">
        <h2 class="pt-5 py-3 fw-bold">List of Competitors</h2>
        <div>
            <a href="admin/lhasdfd4654sd4fas465s4dashboard.php" class="btn btn-warning px-3 my-3 "><i class="fa-solid fa-gauge"></i> Dahsboard</a>
        </div>
        <form action="">
            <a href="makepdf.php" class="btn btn-primary px-5" target="_blank">Download PDF <i class="fa-solid fa-download"></i></a>
        </form>
        <div class="pt-4">
            <table id="myTable" class="table display responsive nowrap">
                <thead  class="thead-dark ">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Institute</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Hacker Rank Handel Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Head Of The Department</th>
                        <th scope="col">Home District</th>
                        <th scope="col">Create Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$i = 0;
while ($row = $contest->fetch_assoc()) {
    $i++;
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['institute'] . "</td>";
    echo "<td>" . $row['semester'] . "</td>";
    echo "<td>" . $row['hacker_rank'] . "</td>";
    echo "<td>" . $row['roll'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['headOfTheDept'] . "</td>";
    echo "<td>" . $row['district'] . "</td>";
    echo "<td>" . $row['created'] . "</td>";
    echo "</tr>";
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
                responsive: true,
            });
        });
    </script>
</body>