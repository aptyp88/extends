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

        Div :: $borderColor = '#00f';

        $div = new Div(100, 50);
        echo $div;
        echo $div -> getWidth();
        echo '<br>';

        $colorDiv = new ColorDiv(100, 50, '#f90');
        echo $colorDiv;
        echo $colorDiv -> getWidth();
        echo '<br>';
        
        Div :: $borderColor = '#0ff';
        // echo Div :: BORDER_WIDTH;
        $roundedColorDiv = new RoundedColorDiv(100, 50, '#f50', 12);
        echo $roundedColorDiv;
        echo $roundedColorDiv -> getWidth();
        echo '<br>';    
        echo Div :: getBorder();
    ?>
</body>
</html>