<?php
$mystring = $argv[1];
$findme = "s"; 
$pos = strpos($mystring, $findme);
var_dump($pos);
$seconden = (int)$mystring;
echo $seconden . " Seconden";

