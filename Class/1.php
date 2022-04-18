<?php

class myclass{
    public $var1 = "Hello";
    function view(){
        echo $this->var1;
    }
}

$obj = new myclass();
$obj->view();

?>