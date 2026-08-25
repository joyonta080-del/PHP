<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Form Example</title>
</head>
<body>
    <h2>Student Information</h2>
    <form method="get" action="">
        Name:
        <input type="text" name="name">
        <br><br>
        Course:
        <input type="text" name="course">
        <br><br>

        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_GET['name'])&&isset($_GET['course'])){
        $name = htmlspecialchars($_GET['name']);
        $course = htmlspecialchars($_GET['course']);

        echo "<h3>Submitted Information</h3>";
        echo "Name: ".$name. "<br>";
        echo "Course: ".$course;

    }
    ?>
    
</body>
</html>