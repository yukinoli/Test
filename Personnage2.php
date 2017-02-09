<?php
class Personnage
{
	// Attribut
	private $_force;
	private $_localisation;
	private $_experience;
	private $_degats;

	// Constante
	const FORCE_PETITE = 20;
	const FORCE_MOYENNE = 50;
	const FORCE_GRANDE = 80;

	// Attribut statique privee
	private static $_parler = 'Je vais tous vous tuer !';
	
	// Methode
	public function __construct()
	{

	}

	public function deplacer()
	{

	}

	public function frapper()
	{

	}

	public function gagnerExperience()
	{

	}

	public function setForce($force)
	{
		if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
		{
			$this->_force = $force;
		}
	{

	public static function parler()
	{
		echo self::$_parler;
	}
}
$perso = new Personnage(Personnage::FORCE_MOYENNE);
Personnage::parler();
?>
