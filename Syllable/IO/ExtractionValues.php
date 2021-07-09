<?php
namespace Syllable\IO;
use Syllable\IO;


class ExtractionValues {


    public $values = [];


    // isspausdina values is txt filo

    public  function getValues(){

        $file = new \SplFileObject(DIR."/data/inputfile.txt");
        while (!$file->eof()) {
            $values[] =  trim($file->fgets());
        }

        return $values;
    }
}



