
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
    <div class="form-warpper sign-in">
        <form action="">
            <h2>Login</h2>


            <div class="input-group">
                <input type="text" required>
                <label for="">Username</label>
            </div>


            <div class="input-group">
                <input type="password" required>
                <label for="">Password</label>
            </div>


            <div class="remember">
                <label for="">
                    <input type="checkbox"> Remember me
                </label>
            </div>
            
            <button type="submit">Login</button>


            <div class="signUp-link">
                <p>Don't have an account?
                    <a href="#" class="signUpBtn-link">Sign Up</a>
                </p>
            </div>
        </form>
    </div>
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


