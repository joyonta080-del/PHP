
<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>

    <style>
        body {
            background: linear-gradient(135deg, #dbeafe, #e9d5ff);
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 50px 15px;
        }

        .container {
            background-color: white;
            max-width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        h1 {
            color: #4f46e5;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .number {
            color: #555;
            font-size: 18px;
        }

        .result {
            background-color: #dcfce7;
            color: #15803d;
            font-size: 24px;
            font-weight: bold;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .footer {
            color: #777;
            font-size: 13px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Sum of Digits</h1>

        <?php
        $num = 1234;
        $sum = 0;
        $original = $num;

        while ($num > 0) {
            $digit = $num % 10;
            $sum = $sum + $digit;
            $num = (int)($num / 10);
        }

        echo "<p class='number'>Original Number: $original</p>";
        echo "<div class='result'>Sum = $sum</div>";
        ?>

        <p class="footer">PHP Programming Practice</p>

    </div>

</body>
</html>
