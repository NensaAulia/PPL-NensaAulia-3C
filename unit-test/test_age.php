<?php
//File: test_age.php
require_once "Validator.php";

//Test case 1: umur valid
try{
    $result = validateAge(25);
    echo "PASS: umur 25 diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur 25 tidak diterima. Error: " . $e->getMessage() . "\n";
}