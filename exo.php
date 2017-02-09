<?php
class Nouveau
{
	private static $_compteur = 0;

	public function __construct($compteur)
	{
		self::$_compteur++;
	}
	
	public static function getCompteur()
	{
		return self::$_compteur;
	}
}
$test1 = new Nouveau;
$test2 = new Nouveau;
$test3 = new Nouveau;

echo Nouveau::getCompteur();
?>	
