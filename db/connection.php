<?php

$con = mysqli_connect("localhost", "root", "", "ResumeBuilder");

if (!$con) {
    die("Failed to Connect Database: " . mysqli_connect_error());
}

?>