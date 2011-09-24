<?php

//Autoload function. Only charges a class if they required.
function spl_autoload($classe){
	include_once "lib/{$classe}.php";
}

?>
