<?php error_reporting(-1);

// $i = 1;
// while( $i <= 10) {
//     echo "{$i}<br>";
//     $i++;
// }


// for ($i = 1; $i <= 10; $i++) {
//     echo "{$i}<br>";
// }


// for ($i = 20; $i >= 1; $i--) {
//     echo "{$i}<br>";
// }


// Используя цикл for, реализуйте вывод выпадающего списка select с годами от 1900 до 2021 года включительно

//
// старый пример
// $year = 1900;
// echo '<select>';
//     while ($year <= 2021) {
//         echo "<option value='{$year}'>{$year}</option>";
//         $year++;
//     }
// echo '</select';


// echo '<select>';
// for ($year = 2021; $year >= 1900; $year--) {
//     echo "<option value='{$year}'>{$year}</option>";
// }
// echo '</select>';


// используя цикл while, реализовать таблицу умножения


// echo '<table border="3px solid" width="1000px">';
// $st = 1;
// while ($st <= 9) {
//     echo "<tr>";
//         $td = 1;
//         while ($td <= 9) {
//             echo "<td style='text-align: center; border: 2px solid'>$td * $st = ". $st * $td ." </td>";
//             $td++;
//         }
//     $st++;
// } echo "</tr>";
// $tr++;
// echo "</table>";

echo '<table border="0px solid" width="1000px">';
for ($st = 1; $st <= 9; $st++) {
    echo "<tr>";
    for ($td= 1; $td <= 9; $td++) {
        echo "<td style='text-align: center; border: 1px solid'>$td * $st = ". $st * $td ." </td>";
    }
    echo "</tr>";
}
echo "</table>";
