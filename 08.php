<?php
    error_reporting(-1);    // -1 --> показать ошибку, 0 --> не показывать ошибку
                            // 0

    // var_dump('-10');   // ==> -10
    // var_dump(-'-10');   // ==> 10

    // var_dump(12-2);   // ==> 12-2=10
    // var_dump(10*2);   // ==> 10*2=20
    // var_dump(10/2);   // ==> 10/2=5

    // var_dump(1+'2t');   // при сложении числа с нечисловую строку ('2t') ==> 1+2=3, но с предупреждением >=php 7.1
    // var_dump(1+'t2');   // при сложении числа и префиксную числовую строку ('t2') ==> фатальная ошибка

    #деление по модулю - возвращает целое число
    // var_dump(20 % 7);   // при делении 20 на 7 остаётся остаток 6 ==> выподится 6 как результат

    #возведение в стень
    // var_dump(2 ** 3);   // 2 в 3 степени ==> 8