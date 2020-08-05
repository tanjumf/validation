<?php 

 session_start();


if(isset($_POST["submit"])){
     $_SESSION["uname"] = $_POST["uname"];
     $_SESSION['last_login_timestamp'] = time();

$conn = mysqli_connect('localhost','root','','userregistration');


          
          $uname =  $_POST['uname'];
          $password = $_POST['password'];
        

$sql ="select * from usertable where uname = '$uname' AND password = '$password'  "; 
$result = mysqli_query($conn, $sql);
 
     



if(mysqli_num_rows($result)>0)
{
   
    $_SESSION['uname'] = $uname;
    header("Location: index.php");
}
else
{
	echo "User not found";
}
    }
?>