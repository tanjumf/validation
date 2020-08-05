<?php 


$conn = mysqli_connect('localhost','root','','userregistration');


          
          $uname =  $_POST['uname'];
          $password = $_POST['password'];
        

$sql ="select * from usertable where uname = '$uname' AND password = '$password'  "; 
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
    session_start();
    $_SESSION['uname'] = $uname;
    header("Location: index.php");
}
else
{
	echo "User not found";
}

?>