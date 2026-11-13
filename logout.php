
<?php
session_start();

// Avsluta sessionen
$_SESSION = [];
session_destroy();

// Skicka användaren till login-sidan
header("Location: login.php");
exit;
