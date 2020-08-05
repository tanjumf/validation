
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    session_start();
    if(isset($_SESSION["uname"])){
        if((time() - $_SESSION['last_login_timestamp'])>60){
            header("location:logout.php");
        }
        else{
            $_SESSION['last_login_timestap'] = time();
            echo "<p align='center'><a href='logout.php'> Logout</a></p>";
        }
     
    }
            else{
            header('location:logout.php');
            }
    ?>
    <h1>Weclome</h1>
</body>
</html>