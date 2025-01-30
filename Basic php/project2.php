<?php
$a=5;
$b=8;
if($a%2==0 and $b%2==0)
{
$product=$a*$b;
echo ("Both the numbers are even");
echo("\n");
echo ("$a*$b=$product");
}
elseif($a%2!=0 and $b%2!=0)
    {
    $div=$a/$b;
    echo ("both numbers are odd");
    echo("\n");
    echo ("$a/$b=$div");
    }
elseif($a%2==0 and $b%2!=0)
    {
    $add=$a+$b;
    echo ("a is even, b is odd");
    echo("\n");
    echo ("$a+$b=$add");
    }

else
{
    $sub=$a-$b;
    echo ("a is odd, b is even");
    echo("\n");
    echo ("$a-$b=$sub");
}
?>

