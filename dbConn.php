<?php

$db = mysqli_connect("localhost","phpmyadmin","bouveret","db_reservation");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>