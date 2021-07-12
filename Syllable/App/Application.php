<?php

namespace Syllable\App;

use Syllable\App;
use Syllable\IO\PatternResult;
use Syllable\Service\SyllableAlgorithm;
use Syllable\Service\SyllableResult;
use Syllable\IO\PatternExtractor;
use Syllable\IO\Input\UserInput;


class Application
{
    public function runApp ():void
    {

        $userInput = new UserInput;
        $givenWord = $userInput->getInputWord();  // paduoda ivesta zodi

        $startTime = microtime(true); // laiko pradzia

        $patternExtractor = new PatternExtractor();
        $patternsResult = $patternExtractor->getPatterns(DIR."data/inputfile.txt"); // paduodam txt failo turini. toliau jis bus vadinamas kaip $filePath.

        $SyllableAlgorithm = new SyllableAlgorithm();
        $syllableResult=$SyllableAlgorithm->syllable($givenWord, $patternsResult);

        echo  "Syllable result: ". $syllableResult->dashResult . "\n";   // parodo isskiemenuota zodi.

//        var_dump($syllableResult);
        $endTime = microtime(true); //laiko pabaiga
        $executionTime = round($endTime - $startTime, 4); // programos veikimo laikas suapvalintas iki 4 skaiciu po kablelio
        echo "Execution time: $executionTime seconds". "\n";

    }

    // public function getInputWord(){

    // echo "Please Enter the word you want to syllable", "\n";
    //     echo "Enter Word here: ";

    //     $givenWord = trim(fgets(STDIN, 1024));

    //     echo "The word you entered is: $givenWord". "\n";
    // return $givenWord;
    // }
}