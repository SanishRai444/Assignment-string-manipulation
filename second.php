<?php
$str = "Gandalf,Aragorn,Legolas";
$strarray = explode(",", $str);
$newarray = array();
foreach ($strarray as $element) {
    $newarray[] = strtolower($element);
}
var_dump($newarray);
$str = implode("*", $newarray);
echo " the final string: " . $str;
