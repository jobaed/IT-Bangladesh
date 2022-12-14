<?php

$id = $_GET['id'];

require "inc/database.php";

$d = "DELETE FROM student_addmission WHERE id = $id";
$delete = $conn->query($d);
if ($delete) {
    header("Location: student_addmissions.php");
} else {
    echo "Faild";
}
