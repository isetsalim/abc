<?php 
session_start();
if($_SESSION['username']==true){ 
    echo"<h1>Welcome $_SESSION[username]</h1>";
    echo"<h1>Welcome $_SESSION[password]</h1>";

}else{ 
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Wellcome Php Profile</h1>
</body>
</html>