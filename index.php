<?php 
include_once 'div.php';
include_once 'colordiv.php';
include_once 'roundedcolordiv.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extends  OOP php</title>
</head>
<body>
    <?php
        $div = new Div(100, 50);
        echo $div;
        echo '<br>';

        $colorDiv = new ColorDiv(100, 50, '#f90');
        echo $colorDiv;
        echo '<br>';

        $roundedColorDiv = new RoundedColorDiv(100, 50, '#f50', 12);
        echo $roundedColorDiv;
    ?>
</body>
</html>