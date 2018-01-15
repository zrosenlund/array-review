<?php
/**
 * Created by PhpStorm.
 * User: zrose
 * Date: 1/15/2018
 * Time: 12:37 PM
 */
ini_set("display_errors", 1);
error_reporting(E_ALL);

$animals = array('panda', 'alpaca', 'boa');

function printArray() {
    global $animals;
    sort($animals);

    echo '<p>';
    foreach ($animals as $animal)
    {
        echo "$animal ";
    }
    echo '</p>';
}

printArray();