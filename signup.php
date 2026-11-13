<?php
session_start();

require_once __DIR__ . '/assets/functions.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? "");
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username === "" || $name === "") {
        $message = "Please fill in all fields!";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email address!";

    } elseif (strlen($password) < 8) {
        $message = "Password must be at least 8 characters!";

    } elseif (!isset($_POST["terms"])) {
        $message = "You must accept the terms and conditions!";

    } else {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO user (username, name, email, password)
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
    $message = $e->getMessage();
}
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up</title>

    <link rel="stylesheet" href="css/styls.css">
</head>

<body class="loginBild">

    <div class="warpper">

        <div class="form-warpper sign-up">

            <form action="signup.php" method="POST">

                <h2>Sign Up</h2>

                <div class="input-group">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>

                <div class="input-group">
                    <input type="text" name="name" required>
                    <label>Name</label>
                </div>

                <div class="input-group">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-group">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>

                <div class="remember">
                    <label>
                        <input type="checkbox" name="terms" required>
                        I agree to the terms & conditions
                    </label>
                </div>

                <button class="btn-login" type="submit">
                    Register
                </button>

                <?php if (!empty($message)): ?>
                    <p style="color: red;">
                        <?= htmlspecialchars($message) ?>
                    </p>
                <?php endif; ?>

                <div class="signUp-link">
                    <p>
                        Already have an account?
                        <a href="./login.php" class="signInBtn-link">
                            Login
                        </a>
                    </p>
                </div>

            </form>

        </div>

    </div>

</body>
</html>
