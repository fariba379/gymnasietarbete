
<?php

$hostname_forumtest = "localhost";
$database_forumtest = "taxi";
$username_forumtest = "taxi";
$password_forumtest = "taxi";

try {

    $pdo = new PDO(
        "mysql:host=$hostname_forumtest;dbname=$database_forumtest;charset=utf8mb4",
        $username_forumtest,
        $password_forumtest
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    error_log($e->getMessage());
    die("Database connection failed!");

}
?>