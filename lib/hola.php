<?php
//Autor: Rafa <rrodmen709@g.educaand.es>
//El nombre por defecto es mundo
$nombre = isset($argv[1]) ? $argv[1]: "Mundo";
@print "Hola {$nombre}\n";
?>
