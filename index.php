<?php 
echo 'step1';
$chiffre = 0;

while($chiffre<=10){
	echo $chiffre.'<br />';
	$chiffre++;
}

echo 'step2: ';

$foo=0;
$bar=5;

$multi=$foo*$bar;

echo '$foo='.$foo;
echo '$bar='.$bar;

while($foo<=30){
	$foo++;
	
	if ($foo<=20){
	echo $multi;	
	}
	else{
		echo $foo;
	}
}

?>