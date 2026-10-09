<?php
session_start();

if (isset($_POST['login'])) {

    $username = trim($_POST['username'] ?? "");

    if ($username != "") {

        $_SESSION['username'] = $username;

        echo "Login successful.<br>";
        echo "Welcome, "
             . htmlspecialchars($_SESSION['username']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Session Example</title>
</head>

<body>

<h2>Login</h2>

<form method="post">

    Username:
    <input type="text" name="username" required>

    <br><br>

    <input type="submit" name="login" value="Login">

</form>

<?php

if (isset($_SESSION['username'])) {

    echo "<p>Current user: "
         . htmlspecialchars($_SESSION['username'])
         . "</p>";
}

?>

</body>
</html>