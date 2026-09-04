<!DOCTYPE html>
<html>
<head>
<title>POST Form Example</title>
</head>
<body>

<h2>Student Registration</h2>

<form method="post" action="">
    Name:
<input type="text" name="name">
<br><br>

    Email:
<input type="email" name="email">
<br><br>

<input type="submit" name="submit" value="Register">
</form>

<?php
if (isset($_POST['submit'])) {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h3>Registration Details</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>
