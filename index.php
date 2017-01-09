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

echo 'step3';

// #Exercice 3
// Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
// Tant que la première variable n'est pas inférieur ou égale à 10 :
// - multiplier la première variable avec la deuxième
// - afficher le résultat
// - décrémenter la première variable

$varTroisUn=10;
$varTroisDeux=4;
$sommeTrois=$varTroisUn*$varTroisDeux;

echo 'variable 1='.$varTroisUn;
echo 'variable 2='.$varTroisDeux;

while($varTroisUn<=30){
	$varTroisUn++;
	echo $varTroisUn.'';
	if ($varTroisUn<=10){
	echo $sommeTrois;	
	}
	else{
		
	}

}


?>
