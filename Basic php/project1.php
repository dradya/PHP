<?php

  $a=10;
  $b=2;
  echo"ARITHMETIC OPERATORS";
  echo"\n";
  $c=$a+$b;
  echo $c;
  echo"\n";
  $d=$a-$b;
  echo $d;
  echo"\n";
  $e=$a*$b;
  echo $e;
  echo"\n";
  $f=$a/$b;
  echo $f;
  echo"\n";
  
  echo"RELATIONAL OPERATORS";
  echo"\n";
  $g=$a>$b;
  echo $g;
  echo"\n";
  $h=$a<$b;
  echo $h;
  echo"\n";
  $i=$a==$b;
  echo $i;
  echo"\n";
  $j=$a!=$b;
  echo $j;
  echo"\n";
  $k=$a<=$b;
  echo $k;
  echo"\n";
  $l=$a>=$b;
  echo $l;
  echo"\n";
  
  echo"LOGICAL OPERATORS";
  echo"\n";
  $m=(($a>$b) && ($a<$b));
  echo $m;
  echo"\n";
  $n=$a<$b || $a!=$b;
  echo $n;
  echo"\n";
  $o=!($a<$b);
  echo $o;
  echo"\n";
  
  echo"bitwise OPERATORS";
	// Bitwise AND 
	$answer = $a & $b; 
	echo $answer; 
	
	echo("\n"); 
	
	// Bitwise OR 
	$answer = $a | $b; 
	echo$answer; 
	
	echo("\n"); 
	
	// Bitwise XOR 
	$answer = $a ^ $b; 
	echo$answer; 
	
	echo("\n"); 
	
	// Bitwise NOT 
	$answer = ~$a; 
	echo$answer; 
	
	echo("\n"); 
	
	// Bitwise Left shift 
	$b = 1; 
	$answer = $a << $b; 
	echo$answer; 
	
	echo("\n"); 
	
	// Bitwise Right shift 
	$answer = $a >> $b; 
	echo$answer; 
	
	echo("\n"); 

   echo"string OPERATORS";
   echo ("\n");
   $xy="Hello";
   $yx=" ";
   $yz="PHP";
   $str=$xy . $yx . $yz;
   echo $str;
   echo ("\n");
   echo ("\n");

   echo"increment and decrement OPERATORS";
   echo ("\n");
    $a++;
    $b--;
    echo $a;
    echo ("\n");
    echo $b;
    ?>
    