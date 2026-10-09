<?php

if (isset($_POST['save'])) {

    $username = trim($_POST['username'] ?? "");

    if ($username != "") {

        setcookie(
            "username",
            $username,
            time() + 3600,
            "/"
        );

        echo "Cookie has been created.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookie Example</title>
</head>

<body>

<h2>Cookie Management</h2>

<form method="post">

    Username:
    <input type="text" name="username" required>

    <br><br>

    <input type="submit" name="save" value="Save Cookie">

</form>

<?php

if (isset($_COOKIE['username'])) {

    echo "<p>Stored Username: "
         . htmlspecialchars($_COOKIE['username'])
         . "</p>";
}

?>

</body>
</html>