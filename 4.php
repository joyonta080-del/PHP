
<!DOCTYPE html>
<html>
<head>
    <title>Factorial Program</title>

    <style>
        body {
            background-color: lightyellow;
            font-family: Arial;
            text-align: center;
        }

        .box {
            background-color: white;
            border: 2px solid blue;
            padding: 20px;
            margin: 50px;
        }

        h1 {
            color: blue;
        }

        p {
            color: green;
            font-size: 24px;
        }
    </style>
</head>

<body>

    <div class="box">

        <h1>Factorial Program</h1>

        <?php
        $num = 5;
        $fact = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fact = $fact * $i;
        }

        echo "<p>Factorial of $num = $fact</p>";
        ?>

    </div>

</body>
</html>
