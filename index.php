<?php

$colors = array(
    "White" =>  "#FFFFFF",
    "Red"   =>  "#FF0000",
    "Green" =>  "#00FF00",
    "Blue"  =>  "#0000FF",
    "Black" =>  "#000000",
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Colors
    </title>
</head>
<body>
    <table cellpadding="10px" cellspacing="5px">
        <?php
            foreach ($colors as $key => $value) {
                print("<tr><td style='background-color: $value'>$value</td><td>$key</td></td></tr>");
            }
        ?>
    </table>
</body>
</html>
