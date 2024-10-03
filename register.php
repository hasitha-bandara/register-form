<?php

require './conn.php';

$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$nic = $_POST['nic'];

$sql = "INSERT INTO personal_info (name, gender, dateofbirth, nic) VALUES ('$name', '$gender', '$dob', '$nic')";

Database::iud($sql);

header('Location: display.php');