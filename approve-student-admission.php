<?php

$id = $_GET['id'];

require "inc/database.php";

$update = "UPDATE student_addmission SET status='2' WHERE id = $id";
$res = $conn->query($update);



if ($res) {
    header('Location:student_addmissions.php');
} else {
    echo "Somethins Want To Wrong";
}
