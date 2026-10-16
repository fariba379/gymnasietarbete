
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/styls.css">
</head>
<body>
   
    <div class="warpper">
    <from action="">
    <h1>login</h1> 

     <div class="input-box">
        <input type="text"name="username" placeholder="Username" required>
     </div> 

     <div class="input-box">
        <input type="password"name="password"placeholder="Password" required>
     </div>

     <div class="remember-forget">
        <label> <input type="checkbox"> Remember me </label>
        <a href="#">Forget password</a>
     </div>

    <button type="submit" class="btn">Login</button>


     <div class="register-link">
       <p> Don't have an account?
      <a href="#"> register</a></p>
     </div>
     <from>


</body>
</html>
<?php
require_once 'assets/functions.php';
session_start();
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
  
 if (login($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: index.php');
        exit();
    }
    else
    { 
        echo "Invalid username or password";
   }
}
    ?>


