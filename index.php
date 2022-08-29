<?php

require 'functions.php';

$animals = ['Dog', 'Cat'];



// dumper($animals);


$client1_age = 25;

$client2_age = 15;

if (age_validate($client2_age)){

	echo 'Allowed to enter';

} else {

	echo 'Under age';

}

require 'index.view.php';
