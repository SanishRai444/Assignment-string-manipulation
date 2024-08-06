<?php
$clue = "find the hidden treasure at the golden island";
$replaced = "golden";
$replacing = "mystic";

$newstring = str_replace($replaced, $replacing, $clue);
$newstring = strtoupper($newstring);
echo "\n updated string: " . $newstring;
