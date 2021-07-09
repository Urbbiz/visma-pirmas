<?php

session_start();

define('INSTALL_DIR', '/home/internalandriusurbonas/php/visma-pirmas/');
define('DIR', __DIR__ . '/');   //constants case sensitive

//spl_autoload_register('myAutoLoader');

//function myAutoLoader($className) {
//    $path = "IO/old-Syllable/";
//    $extension = ".php";
//    $fullpath = $path . $className . $extension;
//
//    include_once $fullpath;
//
//}

//
require DIR . 'Syllable/app/Application.php';
require DIR . 'Syllable/IO/ExtractionValues.php';
require DIR . 'Syllable/service/SyllableAlgorithmInterface.php';
require DIR . 'Syllable/service/SyllableAlgorithm.php';


//spl_autoload_register(function($className){
//
//    $prefix ='old-Syllable';   //namespace
//    $base_dir = DIR . '/IO/old-Syllable/';  // path
//    $len = strlen($prefix);
//    if(strncmp($prefix, $className, $len) !== 0) {
//        return;
//    }
//    $relative_class = substr($className, $len);
//    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//    if (file_exists($file)) {
//       require $file;
//    }
//
//});







