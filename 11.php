<?php
    error_reporting(-1);

    # ЛОГИЧЕСКИЕ ОПЕРАТОРЫ

    // «И» --> $a && $b --> результат: true, если $a и $b - true

    // Пример 1. «&&» ==>  лучше использовать этот способ
    $a = 3 == 3 && 3 < 4;   // ниже сделаны облегчения в чтении
    $a = (3 == 3) && (3 < 4);   // $a = (true) && (true) --> см. ниже
    var_dump($a);   // ==> результат: true

    // Пример 2. «and» ==>  этот способ имеет особенности --> см. примечания
    $a = 3 == 3 and 3 < 4;   // ниже сделаны облегчения в чтении
    $a = (3 == 3) and (3 < 4);   // $a = (true) && будет проигнорировано --> см. ниже
    var_dump($a);   // ==> результат: true
    // Примечания к примеру: логический оператор 'and' в приоритетах операторах (т.е. настоколь он быстрее выполнит что-либо) стоит намного ниже оператора '&&' --> т.е. приоритетное выполнится первым, а второй может даже проигнорировано

    // «ИЛИ» --> $a || $b --> результат: true, если какой-либо из $a и $b - хоть один true

    // Пример 3. «||»
    $a = 3 == 3 || 3 < 4;   // сделаны облегчения в чтении --> см. ниже
    $a = (3 == 3) || (3 > 4);   // $a = (true) && (false) --> см. ниже
    var_dump($a);   // ==> результат: true

    // Пример 4. «or»
    $a = 2 == 3 or 3 > 2;   // сделаны облегчения в чтении --> см. ниже
    $a = (2 == 3) or (3 > 2);   // $a = (false) or будет проигнорировано --> см. ниже
    var_dump($a);   // ==> результат: false
    // Примечания к примеру: логический оператор 'or' в приоритетах операторах (т.е. настоколь он быстрее выполнит что-либо) стоит намного ниже оператора '||' --> т.е. приоритетное выполнится первым, а второй может даже проигнорировано

    // «! $a» --> инвертирует результат какого-либо вычисления
    var_dump(! (4 < 3));   // (4 < 3) --> даёт false --> ! false --> true