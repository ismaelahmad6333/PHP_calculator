<?php

declare(strict_types=1);
include "includes/class-autoload.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="includes/calc.inc.php" method="post">
        <p>My own calculator</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper" id="">
            <option value="add">Addition</option>
            <option value="add">Subtraction</option>
            <option value="add">Division</option>
            <option value="add">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>

</html>