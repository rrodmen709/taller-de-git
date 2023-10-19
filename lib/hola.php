<?php
//Autor: Rafa <rrodmen709@g.educaand.es>
require('HolaMundo.php');

print "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);;

?>
