<?php

require '../vendor/autoload.php';
session_start();

class Test extends \RBM\Admin\FormAbstract {
   protected $_fields = [
       "name" => "Romain",
       "id" => 1
   ];
}

$t = new Test();
$t->setValues([
    "name" => "Delphine",
]);


var_dump($t->getValues());



