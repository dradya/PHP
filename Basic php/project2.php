<?php
$a=3;
$b=2;
if($a%2==0 and $b%2==0)
{
$product=$a*$b;
echo $product;
}
else
    if($a%2!=0 and $b%2!=0)
    {
    $div=$a/$b;
    echo $div;
    }
else
    if($a%2==0 and $b%2!=0)
    {
    $add=$a+$b;
    echo $add;
    }

else
    $sub=$a-$b;
    echo $sub;
?>