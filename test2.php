<?php
function chargerClasse($classe)
{
	require $classe . '.php';
}
spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelee des qu'on instanciera une classe non declaree.

$perso1 = new Personnage(20, 0);
$perso2 = new Personnage(40, 10);

$perso1->frapper($perso2);
$perso1->gagnerExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();

echo 'Le personnage 1 a ',$perso1->force(),' de force, contrairement au personnage 2 qui a ',$perso2->force(),' de force <br />';
echo 'Le personnage 1 a ',$perso1->experience(),' d\'experience contrairement au personnage 2 qui a ',$perso2->experience(),' d\'experience <br />';
echo 'Le personnage 1 a ',$perso1->degats(),' de degat contrairement au personnage 2 qui a ',$perso2->degats(),' de degats <br />';
?>
