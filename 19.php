<?php error_reporting(-1);

// countinios используется для прерывания текущей i-терации и соотвествующего перехода к следующей


echo "Привет придурок!";

for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 != 0) {
        continue; // выведет только чётные числа
    }
    echo "{$i}<br>";
}

for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 == 0) {
        continue; // выведет только нечётные числа
    }
    echo "{$i}<br>";
}
