<?php
    # УРПАВЛЯЮЩИЕ КОНСТРУКЦИИ #

    // $light = 'green';
    // if ($light == 'green') {
    //     echo 'Ты можешь идти!';
    // }

    // $light = 'green';
    // if ($light == 'green') {
    //     echo 'Ты можешь идти!';
    // } else {
    //     echo 'Стой на месте!';
    // }

    // $light = 'yellow';
    // if ($light == 'green') {
    //     echo 'Ты можешь идти!';
    // } elseif ($light == 'yellow') {
    //     echo 'Ожидай!';
    // } else {
    //     echo 'Стой на месте!';
    // }

    $light = 'yellow';

    if ($light == 'green') {
        echo 'Ты можешь идти!';
    } elseif ($light == 'yellow') {
        echo 'Ожидай!';
        if (2 > 3) {          // начало вложенного if в предыдущем условие
            echo ' 2 > 3';
        } else {
            echo ' 2 < 3';
        }                     // конец вложенного if в предыдущем условие
    } else {
        echo 'Стой на месте!';
    }
