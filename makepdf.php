<?php
// session_start();
// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
// } else {
//     header("location:login.php");
// }
require_once __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";
// session_start();
// echo $_SESSION['a'];
// if ($_SESSION['loggin']) {
// } else {
//     header("location:login.php");
// }
require "inc/database.php";

$contest = $conn->query("SELECT * FROM contest");

if ($contest) {
    $html = '<div class="container">';
    $html .= '<h1>Contest Particepent</h1>';
    $html .= '</div>';
    $html .= '<div class="container table-responsive pt-5">';
    $html .= '<table class="table table-bordered">';
    $html .= '
            <thead class="thead-dark">
                <tr>
                    <th style="border-color: #96D4D4;" scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Institute</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Hacker Rank Handel Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Home District</th>
                </tr>
            </thead>';
    $i = 0;
    while ($row = $contest->fetch_assoc()) {
        $i++;
        $html .= '
        <tbody>
            <tr>
                <td>' . $i . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['phone'] . '</td>
                <td>' . $row['institute'] . '</td>
                <td>' . $row['semester'] . '</td>
                <td>' . $row['hacker_rank'] . '</td>
                <td>' . $row['roll'] . '</td>
                <td>' . $row['district'] . '</td>
            </tr>
        </tbody>';
    }
    $html .= '</table>';
    $html .= '</div>';
} else {
    $html = "Data Not Found";
}
// echo $html;

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file = time() . '.pdf';
$mpdf->output($file, 'I');
