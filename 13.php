<?php
$s = 36; //длина участка в км
$t = 0.5; // время проведенное в дороге в часах
define ('M_IN_KM', 1000); //количество метров в 1 км
define ('S_IN_GOD', 3600); //количество секунд в часе
echo 'Скорость автомобиля ' . $s / $t . 'км/час, ' . $s * M_IN_KM / ($t * S_IN_GOD) . 'м/c';