<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 12/05/2017
 * Time: 11:22
 */

class Personnage
{

    private $_force=0;        // La force du personnage
    private $_localisation; // Sa localisation
    private $_experience = 50;   // Son expérience
    private $_degats=20;       // Ses dégâts

    public function deplacer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
    {

    }

    public function gagnerExperience() // Une méthode augmentant l'attribut $experience du personnage.
    {
        $this->_experience += $this->_experience;
    }

    public function afficherExperience(){
        echo  $this->_experience;
    }

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function parler()
    {
        echo 'Je suis un personnage ! <br>';
    }

    public function frapper($persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }
}

//Instancier un classe

$perso1 = new Personnage();

$perso2 = new Personnage();

$perso1->frapper($perso2);

$perso1->gagnerExperience();

$perso1->afficherExperience();






