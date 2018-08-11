<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

require_once __DIR__ . '/../src/HrisExcelFormat.php'; 


use Treon\HrisExcelFormat;

echo HrisExcelFormat::test();