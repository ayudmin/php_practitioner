<?php 


require 'functions.php';

$animals = ['dog', 'cat'];

$person_age = 25;

if (is_allowed($person_age)){
    
    echo 'You are old enough to enter';
} else {

    echo 'You are under age';
}


dd($animals);


require 'index.view.php';
