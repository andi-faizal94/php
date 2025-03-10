<?php


class Fruit {
    public $name;
    public $color;
    function set_name ($name){ 
        $this -> name =$name;
    }
    function get_name (){ 
       return $this -> name;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$apple->get_name();
$banana->set_name('Banana');

var_dump($apple);
echo "<br>";
echo $banana->get_name();
?>