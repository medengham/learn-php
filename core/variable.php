<?php

/**
 * Varialbles in php:
 * integer 10
 * float 10.3
 * string "Hello"
 * boolean true|false
 * array [10, 10, 20]
 * nullable null
 */

$int = (int) 10;
$float = (float) 10.30;
$string = (string) "hello";
$bool = (bool) FALSE;
$arr = ["hello", 10, 30, 40];
$nullable = NULL;


echo gettype($int) . "\n" . gettype($float) . "\n" . gettype($string) . "\n" . gettype($bool) . "\n" . gettype($arr) . "\n" . gettype($nullable) . "\n";