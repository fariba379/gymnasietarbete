<?php
session_start();
require "config.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":username" => $username
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {

        session_regenerate_id(true);

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["name"] = $user["name"];

        header("Location: index.php");
        exit;

    } else {
        $error = "Wrong username or password!";
    }
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/styls.css">

</head>
<body class="loginBild">
   
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
            
            <button class="btn-login" type="submit">Login</button>


            <div class="signUp-link">
                <p>Don't have an account?
                 <a href="./signup.php" class="signUpBtn-link">Sign Up</a>
                </p>
            </div>
        </form>
    </div>
</div>
     <from>


</body>
</html>




