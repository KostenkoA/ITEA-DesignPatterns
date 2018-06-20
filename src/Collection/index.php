<?php

use App\DesignPatterns\Collection\ArrayCollection;

require __DIR__ . '/../../vendor/autoload.php';


$collection = new ArrayCollection(['PHP','JavaScript','Ruby','C#','Java','C++']);

//print_r($collection);

foreach ($collection as $value){
    var_dump($value);
}

var_dump(\count($collection));

$collection[2] = 'Python';

\var_dump($collection[2]);