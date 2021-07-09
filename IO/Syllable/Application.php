<?php
namespace Syllable;
use Syllable;
use Syllable\SyllableAlgorithm;
use Syllable\ExtractionValues;

class Application
{
public function runApp (){

    echo "Please Enter the word you want to syllable", "\n";
    echo "Enter Word here: ";

    $givenWord = self::getInputWord();

    $startTime = microtime(true); // laiko pradzia

    echo "The word you entered is: $givenWord". "\n";


    $values = ExtractionValues::getValues(); // issitraukiam txt failo turini.

    echo "Word in syllables: ";
    $syllableWord = SyllableAlgorithm::syllableMaker($givenWord, $values);

    echo   $syllableWord . "\n";

    $endTime = microtime(true); //laiko pabaiga
    $executionTime = round($endTime - $startTime, 4); // programos veikimo laikas suapvalintas iki 4 skaiciu po kablelio

    echo "Execution time: $executionTime seconds";

    }

    public function getInputWord(){
        $givenWord = trim(fgets(STDIN, 1024));
    return $givenWord;
    }
}