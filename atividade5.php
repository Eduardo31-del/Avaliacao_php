<?php

$lista = array(0, 1);

for ($num = 2; $num <10; $num++) {
    $lista[$num] = $lista[$num - 1] + $lista[$num - 2];

}
foreach($lista as $numero){
    echo $numero . " ";
}
?>