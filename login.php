 
 <?php 
 session_start();
 include('layout/conn.php');
 if(isset($_POST['submit'])){ 
  $username = $_POST['username'];
  $password = $_POST['password'];

  $select ="SELECT * FROM loginauths WHERE username='$username' AND password='$password'";
  $result =mysqli_query($conn,$select);
  $fetch =mysqli_fetch_array($result);

  if($fetch){ 
    header('location:welcome.php');
    $_SESSION['username']= $fetch['username'];
    $_SESSION['password']= $fetch['password'];

  } else { 
    echo "<script>alert('email and password doest match')</script>";
  }
 }
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div> <br>
  <h1>Login Form</h1>
  <form action="" method="POST"> 
    <label>Username</label><br>
    <input type="text" placeholder="Enter Username..." name=username><br><br>
    <label>Password</label><br>
    <input type="password" placeholder="Enter Password..." name="password"><br><br>
    <input type="submit" value="submit" name="submit"><br>
  </form>
  <ul> 
    <li><a href="£">Forget Password?</a></li>
    <li><a href="£">Signi Up</a></li>
  </ul>
 </div>
</body>
</html>