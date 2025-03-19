<?php
class Fruit
{
    // Properties
    public $name;
    public $color;
    public $result;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }

    function set_result($result)
    {
        return $this->result = $result;
    }

    function get_result()
    {
        return $this->result;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$apple->set_result('this apple is red');

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
echo "Result: " . $apple->get_result();
echo "<br>";

class greeting
{

    function welcome()
    {
        echo "Hello World!";
    }

    public static function regrats()
    {
        echo "this from we ";
    }

    // akses static method or function in class menggunakan self::
    // akses function public in class dengan menggunakan $this

    public function __construct()
    {
        self::regrats();
        $this->welcome();
    }
}

$greet = new greeting();
echo $greet;
