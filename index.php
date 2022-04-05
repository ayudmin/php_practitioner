<?php 

$person = [

    'age'=> 22,
    'hair' => 'black',
    'career'=> 'web developer'

];

$person['name'] = 'Ayume';

unset($person['hair']);

die(var_dump($person)) ;

require 'index.view.php';
