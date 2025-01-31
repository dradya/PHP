<?php
echo ("USE OF PHP strpos");
echo "\n";
echo strpos("I love php, I love php too!","php");
echo "\n";

echo ("USE OF PHP str_word_count");
echo "\n";
echo str_word_count("hello good morning!");
echo "\n";

echo ("USE OF PHP substr");
echo "\n";
echo substr("hello world!",7);
echo "\n";

echo ("USE OF PHP trim");
echo "\n";
echo trim("good pizza","ga");
echo "\n";

echo ("USE OF PHP explode");
echo "\n";
$text="hello good morning";
print_r(explode(" ",$text));
echo "\n";

echo ("USE OF PHP strcmp");
echo "\n";
echo strcmp("hello","hello");
echo "\n";
echo strcmp("gello","hello");
echo "\n";
echo strcmp("iello","hello");
echo "\n";

echo ("USE OF PHP str_shuffle");
echo "\n";
echo str_shuffle("Hello world");
echo "\n";

echo ("USE OF PHP str_split");
echo "\n";
$x=str_split("monkeyman");
print_r($x);

?>