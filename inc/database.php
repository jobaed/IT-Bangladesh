<?php

// $conn = new mysqli("localhost:3306", "itbdtech_itbdtech", "@CreatedByJB34@", "itbdtech_itbd") or die("Connection Faild" . $conn->mysqli_error);
$conn = new mysqli("localhost", "root", "", "itbd") or die("Connection Faild" . $conn->mysqli_error);
$conn->set_charset("utf8");
