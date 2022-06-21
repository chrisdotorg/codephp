<?php
$num = 0 ;
$n1  = 0 ;
$n2  = 1 ;
echo " <h3> suite de fibonacci des 40 premiers nombres </h3> </br>";
echo $n1 ."    " .$n2;
while ($num < 40 ) {
	$n3 = $n1 + $n2 ;
	echo "   " .$n3;
	$n1 = $n2;
	$n2 = $n3;
	$num ++ ;
}
echo "</br> je pense que c'est fini";

echo "</br> maintenant nous allons aller avec une fonction recursive </br>";

function fibanacci($par){
	if($par == 0){
		return 0;
	}else if ($par == 1){
		return 1;
	}else {
		return (fibanacci($par - 1) +  fibanacci($par - 2));
	}
}
for ($i = 0 ; $i < $num ; $i++){
	echo fibanacci($i);
	echo "\n";
}
?>