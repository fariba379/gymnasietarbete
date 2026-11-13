
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once __DIR__ . "/assets/config/db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    try {

        $sql = "SELECT * FROM user WHERE username = :username";

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

            header("Location: homepage.php");
            exit;

        } else {
            $error = "Wrong username or password!";
        }

    } catch (PDOException $e) {

        die("Database error: " . htmlspecialchars($e->getMessage()));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="css/styls.css">
</head>

<body class="loginBild">

    <div class="warpper">

        <div class="form-warpper sign-in">

            <form action="login.php" method="POST">

                <h2>Login</h2>

                <div class="input-group">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>

                <div class="input-group">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>

                <div class="remember">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                </div>

                <button class="btn-login" type="submit">
                    Login
                </button>

                <?php if (!empty($error)): ?>
                    <p style="color: red;">
                        <?= htmlspecialchars($error) ?>
                    </p>
                <?php endif; ?>

                <div class="signUp-link">
                    <p>
                        Don't have an account?
                        <a href="./signup.php" class="signUpBtn-link">
                            Sign Up
                        </a>
                    </p>
                </div>

            </form>

        </div>

    </div>

</body>
</html>




