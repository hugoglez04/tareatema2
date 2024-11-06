<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de la tarea</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kablammo&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Kablammo", serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        main {
            text-align: center;
            border-radius: 10px;
            background-color: coral;
            padding: 20px;
            width: 20%;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: decimal;
            padding-left: 0;
        }

        li {
            margin: 10px 0;
            list-style: none;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #ff7f50;
            display: inline-block;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #ff5722;
        }
    </style>
</head>
<body>
    <main>
        <h1>Menú de la tarea</h1>

        <ul>
            <li><a href="./triangle.php">Triángulo</a></li>
            <li><a href="./biblioteca.php">Biblioteca</a></li>
            <li><a href="./index2.php">Index</a></li>
        </ul>
    </main>
</body>
</html>
