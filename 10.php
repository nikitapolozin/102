<?php
    error_reporting(-1);

    # ОПЕРАТОРЫ СРАВНЕНИЯ <-- для сравнения одного знанения с другим; применяется в управляющих конструкциях

    // оператор 'верно ли' --> возвращает Булево значение: true или false
    // $a = 5;
    // var_dump($a == 10); // ==> результат: false
    // $a = 10;
    // var_dump($a == 10); // ==> результат: true

    // оператор 'тождествено ли верно' --> возвращает Булево значение: true или false + проверяет тип значения --> более серъёзная проверка
    // $a = '10';
    // var_dump($a === 10);   // ==> результат: false, т.к. $a = '10' - значение string, а сравнивается с цифровым значением int
    // $a = 20;
    // var_dump($a === 20);   // ==> результат: true

    // оператор 'не равно'
    // $a = 10;
    // var_dump($a != 10);   // ==> результат: false
    // var_dump($a <> 5);   // ==> результат: true
    // var_dump($a !== 10);   // ==> результат: false
    // var_dump($a !== '10');   // ==> результат: true (вдобавок проверяе тип значений $a)

    // $a = 5;
    // var_dump($a <=> 3);   // ==> результат: 1 - т.к. 3 > 5
    // var_dump($a <=> 5);   // ==> результат: 0 - т.к. 5 = 5
    // var_dump($a <=> 10);  // ==> результат: -1 - т.к. 5 < 10

    // опреаторы «инкремент» и «декримент»
    // ++$a <-- преффиксный ==> уведличивает на единицу $a, а потом возвращает $a
    // $a++ <-- посффиксный ==> возвращает значение $a, а потом прибавляет единицы
    // $a = 2;
    // $a++ --> сначала возвращаем значению $a, а потом увеличиваем
    // var_dump($a++);   // аналог сл. записям: $a++; $a = $a + 1; $a += 1 // ==> результат: 2 + 1 и в $a записалось 3
    // var_dump($a);   // ==> результат: 3 (вывели результат после увеличения )

    // ++$a --> сначала увеличиваем значению $a на 1 единицу, а потом возвращаем
    // var_dump(++$a);   // ==> результат: 3 (без предватиельного возвращения)