<?php      

// database connection code
$dbservername="localhost";
$dbuser="phpmyadmin";
$dbpassword="bouveret";
$dbname="db_restaurant";
$connection=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);


// get the post records
$username = $_POST['username'];  
$password = $_POST['password'];  

#prevent from mysqli injection  
$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($connection, $username);  
$password = mysqli_real_escape_string($connection, $password);  

$sql = "select *from admin where username = '$username' and password = '$password'";  
$result = mysqli_query($connection, $sql);  
$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count  = mysqli_num_rows($result);  
    
if($count == 1){  

header('location: admin_consult_reservations.php');

}  
else{  
    #If entered Wrong Credentials
    echo "<h1> mtf</h1>";
}     
?>  
