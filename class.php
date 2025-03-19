<?php

declare(strict_types=1);

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting";
  const ALL_ARRAY = [
    "ayam" => "goreng",
    "ikan" => "bakar",
];


  public string $name ="andi";
  public int $age = 19;
  
}
echo Goodbye::LEAVING_MESSAGE  . PHP_EOL;

print_r(Goodbye::ALL_ARRAY);

$goodbye = new Goodbye();

echo $goodbye -> name  . PHP_EOL;
echo $goodbye -> age  . PHP_EOL;


?>
