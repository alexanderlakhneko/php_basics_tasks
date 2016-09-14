<?php
$day = rand(1,7);
//echo $day . "<br>";
switch (true)
{
    case $day <= 5 && $day >= 1:
        echo 'Это рабочий день!';
        break;
}
