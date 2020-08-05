<?php 

session_start();
$conn = mysqli_connect('localhost','root','','userregistration');

if(!$conn)
{
	echo "Database connection faild...";
}
else
{
	echo "Connection successfull <br>";
}
          
          $uname =  $_POST['uname'];
          $email =   $_POST['email'];
          $password = $_POST['password'];
        

$sql = "INSERT INTO usertable( uname, email, password) VALUES ('$uname','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Email already Taken";
}

?>