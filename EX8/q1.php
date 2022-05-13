<?php 

class addANDsub{

    function __construct($a, $b){
        $sum = $a + $b;
        $sub = $a - $b;

        echo "Addition of ".$a. " and ".$b. " : ".$sum;
        echo "<br>Substraction of ".$a. " and ".$b. " : ".$sub;
    }
}
$m=50;
$n=40;

$obj = new addANDsub($m, $n);

?>