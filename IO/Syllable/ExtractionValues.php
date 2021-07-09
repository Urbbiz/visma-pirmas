<?php
namespace Syllable;
use Syllable;


class ExtractionValues {




    // isspausdina values is txt filo

    public  function getValues(){
        $values = [];
        $file = new \SplFileObject(DIR."/data/inputfile.txt");
        while (!$file->eof()) {
            $values[] =  trim($file->fgets());
        }
        return $values;
    }
}



