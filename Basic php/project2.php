<?php
$a=3;
$b=2;
if($a%2==0 and $b%2==0)
{
$product=$a*$b;
echo ("Both the numbers are even");
echo("\n");
echo $product;
}
else
    if($a%2!=0 and $b%2!=0)
    {
    $div=$a/$b;
    echo ("a is odd, b is even");
    echo("\n");
    echo $div;
    }
else
    if($a%2==0 and $b%2!=0)
    {
    $add=$a+$b;
    echo ("a is even, b is odd");
    echo("\n");
    echo $add;
    }

else
    $sub=$a-$b;
    echo ("both the numbers are odd");
    echo("\n");
    echo $sub;
?>