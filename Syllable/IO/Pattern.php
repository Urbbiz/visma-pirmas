<?php

namespace Syllable\IO;

use Syllable\IO;


class Pattern
{

    function __construct($value) {
        $this->rawPattern = $value;
        $this->patternNoNumbers = str_replace(['1','2','3','4','5','6','7','8','9','0'], "",$value );
    }
    private string $rawPattern;
    private string $patternNoNumbers;


    function  __toString(): string {
        return $this->rawPattern;

    }


    function getPatternWithoutNumbers():string
    {
        return $this->patternNoNumbers;
    }
}





