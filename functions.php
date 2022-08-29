<?php 


function dumper($data){

	echo '<pre>';

	die(var_dump($data));

	echo '</pre>';

}

function age_validate($age){

	if ($age > 18){

		return true;

	} else {

		return false;
	}
}