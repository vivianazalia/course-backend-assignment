<?php

$text = "HASH TESTING";

echo $text."<br>";

echo md5($text)."<br>";

$salt = "sfds8fdsf8df8";

echo md5($text.$salt)."<br>";

$yaya = "vivian";

echo $yaya."<br>";

echo md5($yaya)."<br>";

echo md5($salt)."<br>";
?>