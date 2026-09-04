<!DOCTYPE html>
<html>
<head>
<title>Form Validation</title>
</head>
<body>

<h2>Student Registration Form</h2>

<?php
$name = "";
$email = "";
$age = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $age = trim($_POST["age"] ?? "");

    // Validate name
    if ($name == "") {
        $errors[] = "Name is required.";
    }

    // Validate email
    if ($email == "") {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Enter a valid email address.";
    }

    // Validate age
    if ($age == "") {
        $errors[] = "Age is required.";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errors[] = "Age must be a number.";
    } elseif ($age < 17 || $age > 100) {
        $errors[] = "Age must be between 17 and 100.";
    }

    if (empty($errors)) {
        echo "<h3>Registration Successful!</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Age: " . htmlspecialchars($age);
    }
}
?>

<?php
if (!empty($errors)) {
    echo "<h3>Please correct the following errors:</h3>";
    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }

    echo "</ul>";
}
?>

<form method="post" action="">
    Name:
<input type="text" name="name"
           value="<?php echo htmlspecialchars($name); ?>"
           required>
<br><br>

    Email:
<input type="email" name="email"
           value="<?php echo htmlspecialchars($email); ?>"
           required>
<br><br>

    Age:
<input type="number" name="age"
           value="<?php echo htmlspecialchars($age); ?>"
           required>
<br><br>

<input type="submit" value="Submit">
</form>

</body>
</html>
