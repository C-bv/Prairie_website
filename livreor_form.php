<?php
// database connection code

$con = mysqli_connect('localhost', 'phpmyadmin', 'bouveret','db_reservation');

// get the post records
$txtNamec = $_POST['txtNamec'];
$txtEmailc= $_POST['txtEmailc'];
$txtRatingc = $_POST['txtRatingc'];
$txtMessagec = $_POST['txtMessagec'];


// database insert SQL code
$sql = "INSERT INTO tbl_livreor (id, Nom, Mail, Rating, Message) VALUES (null, '$txtNamec', '$txtEmailc', '$txtRatingc', '$txtMessagec')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Comment Records Inserted";
}

header('location: livre_or.php');


?>
