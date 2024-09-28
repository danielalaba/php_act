<?php
if(isset($_GET['getAns']))
    $num1 = $_GET['a'];
    $num2 = $_GET['b'];
    $num3 = $_GET['c'];

    $ans = $num2 * $num2 - 4 * $num1 * $num3;

    echo "<h2>$ans</h2>"
?>