<?php
require  __DIR__.'/bootstrap.php';


Echo "Please Enter the word you want to syllable", "\n";
echo "Enter Word here: ";

$givenWord = trim(fgets(STDIN, 1024));

$startTime = microtime(true); // laiko pradzia

echo "The word you entered is: $givenWord". "\n";


$values = ExtractionValues::getValues(); // issitraukiam txt failo turini.

echo "Word in syllables: ";
$syllableWord = SyllableAlgorithm::syllableMaker($givenWord, $values);

echo   $syllableWord . "\n";

$endTime = microtime(true); //laiko pabaiga
$executionTime = round($endTime - $startTime, 4); // programos veikimo laikas suapvalintas iki 4 skaiciu po kableliu

echo "Execution time: $executionTime seconds";