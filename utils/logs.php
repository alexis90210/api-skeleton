<?php 

function logError($route, $line)
{
     ;
    $date = date('d F Y à H\hi');
    $filename = './public/logs/logs.txt';
    $file = fopen($filename, 'a');

    $errorLine = '[' .$date . '] ' . ' [' . $line . '] '. ' [' . $route .']';

    if ($file) {
        fwrite($file, $errorLine . PHP_EOL);
        fclose($file);
        return true;
    } else {
        return false;
    }
}

/**
 * USAGE
 */

// require_once('./utils/logs.php');
// logError(__FILE__, 'Chargement reussie')