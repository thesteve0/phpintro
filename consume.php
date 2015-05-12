<?php
$name = $_POST['first_name'] . " " . $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$age = $_POST['age'];
$confirm_string = "Received information for " . $name . ", who is " . $age . " years old and can be reached at " . $phone_number . ".";
echo $confirm_string;