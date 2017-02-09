<?php
class Personnage
{
	//attributs
	private $_force;
	private $_experience;
	private $_degats;

	//constructeur
	public function __construct($force, $degats)
	{
		$this->setForce($force);  // Initialisation de la force
		$this->setDegats($degats);  // Initialisation des degats
		$this->_experience = 1;
	}	

	//methodes
	public function frapper(Personnage $persoAFrapper)
	{
		$persoAFrapper->_degats += $this->_force;
	}

	public function gagnerExperience()
	{
	$this->_experience++;
	}

	//mutateurs ou setters
	public function setDegats($degats)
	{
		if (!is_int($degats)) // S'il ne sagit pas d'un nombre entier
		{
			trigger_error('Le niveau de degats d\'un personnage doit etre un nombre entier', E_USER_WARNING);
			return;
		}
		$this->_degats = $degats;
	}

	public function setForce($force)
	{
		if (!is_int($force))  // S'il ne s'agit pas d'un nombre entier
		{
			trigger_error('La force d\'un personnage doit etre un nombre entier', E_USER_WARNING);
			return;
		}

		if ($force > 100)  // Pas superieure a 100
		{
			trigger_error('La force d\'un personnage ne peut depasser 100', E_USER_WARNING);
			return;
		}

		$this->_force = $force;
	}

	public function setExperience($experience)
	{
		if (!is_int($experience))
		{
			trigger_error('L\'experience d\'un personnage doit etre un nombre entier', E_USER_WARNING);
			return;
		}

		if ($experience > 100)
		{
			trigger_error('L\'experience d\'un personnage ne peut depasser 100', E_USER_WARNING);
			return;
		}
	
		$this->_experience = $experience;
	}

	// accesseur ou getters
	public function degats()
	{
		return $this->_degats;  // Retourne la valeur de l'attribut degats
	}

	public function force()
	{
		return $this->_force;  // Retourne la valeur de l'attribut force
	}

	public function experience()
	{
		return $this->_experience;  // Retourne la valeur de l'attribut experience
	}
}
