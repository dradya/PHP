<?php 

$city_temp=array("moscow"=>30,"tokyo"=>22,"osaka"=>40,"vasco"=>15,"mumbai"=>20,"mexicocity"=>60,"porvorim"=>20,"miramar"=>18,"paris"=>10,"delhi"=>12);
echo "Display using echo";
echo "\n";
foreach($city_temp as $i=>$j)
{
    echo "$i-$j";
    echo "\n";
}
echo "\n";
echo("Display using print_r");
print_r($city_temp);

?>