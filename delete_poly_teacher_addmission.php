<?php

$id = $_GET['id'];

require "inc/database.php";

$d = "DELETE FROM polytechnicteacher WHERE id = $id";
$delete = $conn->query($d);
if ($delete) {
    header("Location: poly_teachers_addmission.php");
} else {
    echo "Faild";
}
