<?php
namespace Syllable\IO;
use Syllable\IO;


class PatternExtractor implements PatternExtractorInterface {

    // isspausdina values is txt filo

    public  function getPatterns($filePath): PatternResult{
        $result = new PatternResult();
        $file = new \SplFileObject($filePath);
        while (!$file->eof()) {
            $value = trim($file->fgets());
            $result->RawPatterns[] =  $value;
            $result->PatternsNoNumbers[] = str_replace(['1','2','3','4','5','6','7','8','9','0'], "",$value );


        }

        return $result;
    }


    //     //   <--------perdarom i masiva be skaiciu-------->
    //   public function  valueNoNumbers($values) {

    //         $valuesNoNumbers= [];  // tokio pacio ilgio masyvas kaip ir values
    //         foreach ($values as $value){
    //             $valuesNoNumbers[] = str_replace(['1','2','3','4','5','6','7','8','9','0'], "",$value );
    //         }
    //         return $valuesNoNumbers;
    //     }
}