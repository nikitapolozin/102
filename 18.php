<?php error_reporting(-1)

$i = 4;

if ($i == 1) {
    echo 1;
}   elseif ($i == 2){
    echo 2;
}   elseif ($i == 3){
    echo 3;
}   else {
    echo 4;
}

switch ($i) {
    case '1':
        echo 1;
        break;
    case '2':
        echo 2;
        break;
    case '3':
        echo 3;
        break;
    case '4':
        echo 4;
        break;
    default:
        echo 5;
}

switch ($i) {
    case 1:
    case 2:
    case 3:
        echo "Переменная < 4";
        break;
    case 4:
        echo 4;
    case 5:
        echo "Переменная > 5"
}
?>
