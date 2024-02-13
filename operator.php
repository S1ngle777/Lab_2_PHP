<?php
//пример с if
$varsta = 22;
if (($varsta > 12) && ($varsta < 20)) {
    $mesaj = " вы подросток!";
} elseif ($varsta > 40) {
    $mesaj = " вы взрослый человек!";
} else {
    $mesaj = " вы в рассвете сил ... приступайте к работе!";
}
//тернарный оператор
$nume = "Аня";
echo ($nume) ? $nume . ', ' . $mesaj : 'Anonymous,' . $mesaj;

$d = date("w");

switch ($d) {
    case 1:
        $dayOfWeek = "понедельник";
        break;
    case 2:
        $dayOfWeek = "вторник";
        break;
    case 3:
        $dayOfWeek = "среда";
        break;
    case 4:
        $dayOfWeek = "четверг";
        break;
    case 5:
        $dayOfWeek = "пятница";
        break;
    case 6:
        $dayOfWeek = "суббота";
        break;
    case 0:
        $dayOfWeek = "воскресенье";
        break;
}

$date = date("d.m.y");

echo "<br />Сегодня, $dayOfWeek, $date";
