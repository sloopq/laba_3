<?php   
$str = 'a1b2c3';
$regexp = '/[0-9]/u';
$Cube = function($matches){
    return pow((int)$matches[0],3);
};
$result = preg_replace_callback($regexp, $Cube, $str);
echo $result;
echo "\n";

