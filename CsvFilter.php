<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12.07.17
 * Time: 9:53
 */
class CsvFilter
{

}

function import_csv($fileName)
{
    $file = fopen($fileName, "r");
    //echo var_dump($file), "</br>";
    while (!feof($file)) {
        $buffer = fgets($file, 4096);
        echo var_dump($buffer), "<br>", $buffer, "<br>";
    }
    fclose($file);
}

import_csv("f.csv");
