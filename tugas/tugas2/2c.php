<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
    <style>
        .kotak {
            display: inline-flex;
            width: 70px;
            height: 70px;
            background-color: brown;
            border: 1px solid black;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class= "kotak">' . $j . '</div>';
        }
        echo "<br>";
    }
    ?>
</body>

</html>