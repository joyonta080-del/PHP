<!DOCTYPE html>
<html>
    <head>
        <title>
            GET Form Example
        </title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #dbeafe, #e9d5ff);
            text-align: center;
            padding: 50px 15px;
        }

        .container {
            background-color: white;
            max-width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        h2 {
            color: #4f46e5;
            margin-bottom: 25px;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4f46e5;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3730a3;
        }

        .result {
            background-color: #dcfce7;
            color: #166534;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            overflow-wrap: anywhere;
        }
    </style>
    </head>

<body>
    <h2>Student informaion</h2>
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
    if (isset($_GET['name']) && isset($_GET['course'])) {
        $name = htmlspecialchars($_GET['name']);
        $course = htmlspecialchars($_GET['course']);

        echo "<h3>Submitted Information</h3>";
        echo "Name: " . $name . "<br>";
        echo "Course: " . $course;
    }
    ?>

</html>
</body>