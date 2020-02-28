<?php

    /*   While-loop eksempel
    $tal = 0;

    while ($tal < 100) {
        echo $tal += 10;
        echo "<br>";
    }
    */

    //Robot øvelse

    /*
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
    */

    // For-loop øvelse
    /*
    for ($i=0; $i <= 1000; $i++) { 
        $tilbage = $i % 2;

        if ($tilbage == 0) {
            echo $i;
            echo "<br>";
        }
    }
    */

    //funktioner
    /*
    function udprint() {
        static $i = 1;
        echo "hej nr. $i<br>";
        $i++;
    }

    udprint();
    udprint();
    udprint();
    udprint();

    $a = "lord";

    function praise() {
        global $a;
        echo "<br>";
        echo "praise the $a";
    }

    praise();
    */

    // Arrays
    $array[] = 24;
    $array[] = 256;
    $array[] = 234;
    $array[] = 89;
    $array[] = 12345;

    //print_r($array);

    echo "$array[2]<br>";

    $papir["A3"] = 50;
    $papir["A4"] = 250;

    echo $papir["A4"];

    print_r($papir);
?>