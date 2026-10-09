<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Check</title>

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
            font-size: 24px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>

    <div class="box">

        <h1>Prime Number Program</h1>
<?php
$num = 7;
$count = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $count++;
    }
}

if ($count == 2) {
    echo "Prime Number";
} else {
    echo "Not a Prime Number";
}
?>
</div>

</body>
</html>