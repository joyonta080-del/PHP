
<!DOCTYPE html>
<html>
<head>
    <title>Reverse Number Program</title>

    <style>
        body {
            background-color: lightyellow;
            font-family: Arial;
            text-align: center;
        }

        .box {
            background-color: white;
            border: 2px solid blue;
            padding: 30px;
            margin: 50px;
            border-radius: 10px;
        }

        h1 {
            color: blue;
        }

        .result {
            color: green;
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="box">

        <h1>Reverse Number Program</h1>

        <?php
        $num = 1234;
        $reverse = 0;

        while ($num > 0) {
            $digit = $num % 10;
            $reverse = ($reverse * 10) + $digit;
            $num = (int)($num / 10);
        }

        echo "<p class='result'>Reverse = " . $reverse . "</p>";
        ?>

    </div>

</body>
</html>
