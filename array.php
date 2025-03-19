<?php

$fruits = array("apples", "orange");
// menambahkan array bisa seperti ini
$fruits[] = "mangga";

// mengakses value di array
$fruits[0];

// menghapus array
unset($fruits[0]);

// jika menggunakan print_r data yang sudah dihapus tidak di tampilkan
print_r($fruits);

// jika menggunakan var_dump data yang sudah dihapus tetap di tampilkan

var_dump($fruits);


// jika data adalah array of string key adalah key dan value adalah index
foreach ($fruits as $key => $value) {
    echo "Current element of $fruits: $key $name <br>";
};


$array = [
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
];

// jika data adalah array of object key adalah key dan value adalah valuenya

foreach ($array as $key => $value) {
    echo "this $key and $value <br>";
}
