<?php
    error_reporting(-1);

    $minutes = 60;
    $hour = $minutes * 60;
    $day = $hour * 24;
    $week = $day * 7;
    echo "$hour, $day, $week";

    $x = 60;
    var_dump($x *= 60);
    var_dump($x *= 24);
    var_dump($x *= 7);
