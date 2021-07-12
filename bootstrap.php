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

require DIR . 'Syllable/App/Application.php';
require DIR . 'Syllable/IO/PatternExtractorInterface.php';
require DIR . 'Syllable/IO/PatternResult.php';
require DIR . 'Syllable/IO/PatternExtractor.php';
require DIR . 'Syllable/IO/Input/UserInput.php';
require DIR . 'Syllable/Service/SyllableAlgorithmInterface.php';
require DIR . 'Syllable/Service/SyllableAlgorithm.php';
require DIR . 'Syllable/Service/SyllableResult.php';


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










//pl_autoload_register(function ($class) {
//
//    // project-specific namespace prefix
//    $prefix = 'Foo\\Bar\\';
//
//    // base directory for the namespace prefix
//    $base_dir = __DIR__ . '/src/';
//
//    // does the class use the namespace prefix?
//    $len = strlen($prefix);
//    if (strncmp($prefix, $class, $len) !== 0) {
//        // no, move to the next registered autoloader
//        return;
//    }
//
//    // get the relative class name
//    $relative_class = substr($class, $len);
//
//    // replace the namespace prefix with the base directory, replace namespace
//    // separators with directory separators in the relative class name, append
//    // with .php
//    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//
//    // if the file exists, require it
//    if (file_exists($file)) {
//        require $file;
//    }
//});








