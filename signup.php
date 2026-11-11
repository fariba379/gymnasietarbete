 <?php
session_start();
require "config.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email address!";

    } elseif (strlen($password) < 8) {
        $message = "Password must be at least 8 characters!";

    } else {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO users (username, name, email, password)
                    VALUES (:username, :name, :email, :password)";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ":username" => $username,
                ":name" => $name,
                ":email" => $email,
                ":password" => $hashedPassword
            ]);

            header("Location: login.php");
            exit;

        } catch (PDOException $e) {
            $message = "Username or email already exists!";
        }
    }
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp Form</title>
     <link rel="stylesheet" href="css/styls.css">
  
</head>
<body class="loginBild">


    <div class="warpper">
       <div class="form-warpper sign-up">
            <form action="">
                <h2>signUp</h2>

                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>

                <div class="input-group">
                    <input type="text" required>
                    <label for="">Name</label>
                </div>
     
     
     

                <div class="input-group">
                    <input type="email" required>
                    <label for="">Email</label>
                </div>

                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>

                <div class="remember">
                    <label>
                        <input type="checkbox">
                        I agree to the terms & conditions
                    </label>
                </div>

                <button  class="btn-login" type="submit">Register</button>

             <div class="signUp-link">
              <p>
               Already have an account?
              <a href="./login.php" class="signInBtn-link">Login</a>
              </p>
             </div>

            </form>
        </div>
    </div>

</body>
</html>
