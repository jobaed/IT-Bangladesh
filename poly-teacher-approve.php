<?php

$id = $_GET['id'];

require "inc/database.php";

$update = "UPDATE polytechnicteacher SET status='2' WHERE id = $id";
$res = $conn->query($update);

if ($res) {
    header('Location:poly_teachers_addmission.php');
} else {
    echo "Somethins Want To Wrong";
}
