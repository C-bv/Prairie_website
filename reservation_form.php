<?php
// database connection code

$con = mysqli_connect('localhost', 'phpmyadmin', 'bouveret','db_restaurant');

// get the post records
$txtName = $_POST['txtName'];
$txtSname = $_POST['txtSname'];
$txtPhone = $_POST['txtPhone'];
$txtNumber= $_POST['txtNumber'];
$txtDate = $_POST['txtDate'];
$txtService = $_POST['txtService'];
$txtMessage = $_POST['txtMessage'];


// database insert SQL code
$sql = "INSERT INTO `tbl_reservation` (`id`, `Nom`, `Prénom`,`Numéro`, `Nombre`, `Date`, `Service`, `Message`) VALUES ('0', '$txtName', '$txtSname', '$txtPhone', '$txtNumber', '$txtDate', '$txtService', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Comment Records Inserted";
}

header('location: reservation.html');


?>
