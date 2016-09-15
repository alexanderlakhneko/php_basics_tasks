<?php
$a = rand(-100,100);
$b = rand(-100,100);
if ($a > $b){
    echo 'Max number is a=' . $a;
}
elseif ($a < $b) {
    echo 'Max number is b=' . $a;
}
else {
    echo 'Draw a=' . $a . ' b=' . $b;
}
