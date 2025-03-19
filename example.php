<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div>
    <?php
    class SimpleClass
    {
      static $var = 'a default value';
      public function displayVar()
      {
        echo $this->var;
      }

      public static function staticMethod()
      {
        return self::displayVar();
      }
    }




    $foobar = new SimpleClass;
    $foobar->displayVar();
    $foobar->staticMethod();
    ?>
  </div>
</body>

</html>