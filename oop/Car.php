<?php

class Car
{
    public $color;
    public $model;
    public $no;
    public function __construct($color, $model, $no)
    {
        $this->color = $color;
        $this->model = $model;
        $this->no = $no;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo", "1");
$myNewCar = new Car("white", "Mercendance", "2");


$allData = array(
    "name" => "andi",
    "class" => "1Ab",
    "no" => "1",
);

$name = ["andi", "faizal", "kelas"];


foreach ($name as $key => $value) {
    echo "The key is :$key and the value  $value";
    echo "<br>";
}
var_dump($allData);
var_dump($myCar, "<br>", $myNewCar);
