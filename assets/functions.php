


<?php
require_once __DIR__ . '/config/db.php';

function insertForumpost($username, $message) {
    global $pdo;

    $sql = "INSERT INTO taxi (username, message)
            VALUES (:username, :msg)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':msg', $message);

    return $stmt->execute();
}

function getForumPosts() {
    global $pdo;

    $sql = "SELECT * FROM taxi ORDER BY time DESC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt;
}

function login($username, $password) {
    global $pdo;

    $sql = "SELECT * FROM user WHERE username = :username";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        return true;
    }

    return false;
}

function addUser($felt) {
    global $pdo;

    $sql = "INSERT INTO user (username, name, email, password)
            VALUES (:username, :name, :email, :password)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':username', $felt['username']);
    $stmt->bindValue(':name', $felt['name']);
    $stmt->bindValue(':email', $felt['email']);
    $stmt->bindValue(':password', $felt['password']);

    try {
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return false;
    }
}
