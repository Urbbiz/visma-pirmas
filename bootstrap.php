<?php

session_start();

define('INSTALL_DIR', '/home/internalandriusurbonas/php/visma-pirmas/');
define('DIR', __DIR__ . '/');   //constants case sensitive

//spl_autoload_register('myAutoLoader');

//function myAutoLoader($className) {
//    $path = "IO/Syllable/";
//    $extension = ".php";
//    $fullpath = $path . $className . $extension;
//
//    include_once $fullpath;
//
//}

//
//require DIR . 'IO/Syllable/Application.php';
//include_once DIR . 'IO/Syllable/ExtractionValues.php';
//require DIR . 'IO/Syllable/SyllableAlgorithm.php';


spl_autoload_register(function($className){

    $prefix ='Syllable';   //namespace
    $base_dir = DIR . '/IO/Syllable/';  // path
    $len = strlen($prefix);
    if(strncmp($prefix, $className, $len) !== 0) {
        return;
    }
    $relative_class = substr($className, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
       require $file;
    }

});







