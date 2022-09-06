<?php

function randomPassword(int $length = 8): string {
$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$pass = array(); // declarer $pass comme un array
$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
for ($i = 0; $i < $length; $i++) {
$n = rand(0, $alphaLength);
$pass[] = $alphabet[$n];
}
return implode($pass); //changer le array en un string
}

function random_username($string) {
    $pattern = " ";
    $firstPart = strstr(strtolower($string), $pattern, true);
    $secondPart = substr(strstr(strtolower($string), $pattern, false), 0,3);
    $nrRand = rand(0, 100);

    $username = trim($firstPart).trim($secondPart).trim($nrRand);
    return $username;
}
