<?php

    /*   While-loop eksempel
    $tal = 0;

    while ($tal < 100) {
        echo $tal += 10;
        echo "<br>";
    }
    */

    //Robot øvelse

    $money = 0;
    $paycheck = 5;
    $robotCost = 100;

    while ($money < 100) {
        $money += $paycheck;
        echo $money;
        echo "<br>";
    }

    if($money = 100) {
        echo "Nu kan du købe robotten!";
    }

?>