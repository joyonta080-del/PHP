
<!DOCTYPE html>
<html>
<head>
    <title>Basic CSS Example</title>

    <style>
        /* General CSS Syntax:
           selector {
               property: value;
           }
        */

        body {
            background-color: lightyellow;
            font-family: Arial;
        }

        h1 {
            color: blue;
            font-size: 30px;
            text-align: center;
        }

        p {
            color: white;
            background-color: green;
            font-size: 20px;
            padding: 15px;
            border: 2px solid black;
        }

        .student {
            color: red;
            font-size: 24px;
        }

        #title {
            color: purple;
            text-align: center;
        }

        button {
            background-color: blue;
            color: white;
            font-size: 18px;
            padding: 10px;
        }
    </style>
</head>

<body>

    <h1>Welcome to CSS</h1>

    <h2 id="title">CSS Tutorial</h2>

    <p>This is a paragraph.</p>

    <p class="student">BCA Fifth Semester</p>

    <button>Click Me</button>

</body>
</html>
