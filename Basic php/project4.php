<?php

$str ="panjim is the best city in goa.";

echo "Strings In PhP";
echo "\n";
echo "First letter capital";
$up=ucfirst($str);
echo "\n";
echo $up;
echo "\n";
echo "String in UPPER CASE=";

$a=strtoupper($str);
echo $a;
echo "\n";

$str1=["best","in"];
$str2=["capital","of"];
echo "Replaced words = " .str_replace($str1, $str2, $str). "\n";

echo "Total number of characters =".strlen($str)."\n";

echo "Position of word 'goa' =".strpos($str, "goa"). "\n";

echo "Reverse of string =".strrev($str);

?>