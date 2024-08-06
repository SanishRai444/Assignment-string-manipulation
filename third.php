<?php
$spell = "   aBrACADaBRA   ";
$correctspell = "abracadabra";

$spell = trim($spell);
$spell = strtolower($spell);


if ((strcmp($spell, $correctspell)) == 0) {
    echo " the spell is correct.";
} else {
    echo "the wizarding world is still at risk!";
}
