<?php
$student=array(array("tom","jerry","nobita","shinchan","ninja","kitretsu","bheem","krish","pinky","marsha"),
array(21,13, 2,5,7,8,15,21,11,14),
array(21,4,25,16,18,12,20,21,5,17));
for($i=0;$i<10;$i++)
{
    $total=0;
    for($j= 1; $j<3; $j++)
    {
        $total +=$student[$j][$i];
    }
    $avg=$total/2;  
    echo "The average marks of ".$student[0][$i]." = ".$avg."\n";
} 
?>

