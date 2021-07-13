<?php
namespace Syllable\App;

use Psr\Log\Logger;
use Syllable\App;
use Syllable\Service\SyllableAlgorithm;
use Syllable\Service\SyllableResult;
use Syllable\IO\PatternExtractor;
use Syllable\IO\Input\UserInput;



class Application
{
    public function runApp ()
    {

//        $d=mktime();
//        echo "Created date is " . date("Y-m-d h:i:sa", $d);
        $logger = new Logger();
//        $logger->log(""," test message time of message:".date("Y-m-d h:i:sa", $d)."\n");



        $userInput = new UserInput;
        $givenWord = $userInput->getInputWord();  // paduoda ivesta zodi

        $startTime = microtime(true); // laiko pradzia

        $patternExtractor = new PatternExtractor();
        $patternsResult = $patternExtractor->getPatterns(DIR."data/inputfile.txt"); // issitraukiam txt failo turini.



        $SyllableAlgorithm = new SyllableAlgorithm();
        $syllableResult=$SyllableAlgorithm->syllable($givenWord, $patternsResult);

        echo  "Syllable result: ". $syllableResult->dashResult . "\n";   // parodo isskiemenuota zodi.

        // var_dump($syllableResult);


        $endTime = microtime(true); //laiko pabaiga
        $executionTime = round($endTime - $startTime, 4); // programos veikimo laikas suapvalintas iki 4 skaiciu po kablelio
        echo "Execution time: $executionTime seconds";

        $logger->debug( "\n"."Syllable method took{$executionTime} seconds.");
    }

    // public function getInputWord(){

    // echo "Please Enter the word you want to syllable", "\n";
    //     echo "Enter Word here: ";

    //     $givenWord = trim(fgets(STDIN, 1024));

    //     echo "The word you entered is: $givenWord". "\n";
    // return $givenWord;
    // }
}