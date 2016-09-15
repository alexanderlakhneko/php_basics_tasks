<?php
$day = rand(0,9);
//echo $day . "<br>";
switch (true)
{
    case $day <= 5 && $day >= 1:
        echo 'Это рабочий день!';
        break;
    case $day == 6 || $day == 7:
        echo 'Это выходной день!';
        break;
    default:
        echo 'Неизвестный день';
}