<?php

$server_name ="localhost";
$user_name ="root";
$user_pass = '';
$databse_name = "music_user";

$con = mysqli_connect($server_name, $user_name, $user_pass, $databse_name);

if (!$con) {
    die('connection Failed' .mysql_error());
} else {
    echo ('Database Succesfully Connected');
}

?>