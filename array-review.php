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
$flavors = array('grasshopper'=>'The Grasshopper', 'maple'=>'Whiskey Maple Bacon',
    'carrot'=>'Carrot Walnut', 'caramel'=>'Salted Caramel Cupcake', 'velvet'=>'Red Velvet',
    'lemon'=>'Lemon Drop', 'tiramisu'=>'Tiramisu');

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

function addAnimal($string) {
    global $animals;

    if (!in_array(strtolower($string), $animals))
    {
        array_push($animals, strtolower($string));
    }

    echo "<p>adding  $string...</p>";
    printArray();
}

echo '<h2>Part I</h2>';

printArray();
addAnimal('goat');
addAnimal('Boa');

echo '<h2>Part II</h2>';

foreach($flavors as $flavor => $name)
{
    echo "<input type='checkbox' name='flavors[]' value='$flavor'> $name<br>";
}