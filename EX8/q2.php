<?php 

    class Base{
        function add($x, $y){
            echo "Addition : ".$x + $y;
        }
    }

    class child1 extends Base{
        function sub($x, $y){
            echo "<br>Substraction : ".$x - $y;
        }
    }

    class child2 extends child1{
        function mult($x, $y){
            echo "<br>Multiplication : ".$x * $y;
        }
    }

    $a = 30;
    $b = 30;

    $obj = new child2;

    $obj -> add($a, $b);
    $obj -> sub($a, $b);
    $obj -> mult($a, $b);

?>