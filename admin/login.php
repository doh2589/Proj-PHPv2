<?php 
require_once "connect.php";
session_start();
if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result) > 0){
    
        $_SESSION['username'] = $username;
        echo "<script>alert('Login Successfully');</script>";
        header("location: index.php");
  } else {
    echo "<script>alert('Username or Password ผิดพลาด');</script>";
  }
}




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/sign-in.css" rel="stylesheet">
    
    <title>Admin Login</title>
  </head>

   <style>
        input {
            border:1px solid #ccc;
            width:500px;
            height: 75px;
            padding:10px;
            margin:5px 15px;
            border-radius:5px;
        }
    </style>
     <center>
  <body class="text-center">
        <form  action="login.php" method="post" >
            <img class="mb-4" src="https://media.discordapp.net/attachments/844252912879927366/859075559547469854/pulse-line.png" alt="" width="120" height="120">
            <h1 class="h3 mb-3 font-weight-normal">ADsing Login</h1>
            <label for="inputEmail" class="sr-only">username</label>
            <input type="text"name="username" class="form-control" placeholder="Username ของคุณ"required class="form-control" >
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control mt-1" placeholder="Password" required class="form-control">
           </div>
            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" value="เข้าสู่ระบบ" class="btn btn-success mt-2" />
            </div>
           
        </form>
    </center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>