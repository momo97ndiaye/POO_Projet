<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

use App\Model\AC;
use App\Model\RP;
use App\Core\Role;
use App\Model\User;
use App\Model\Classe;
use App\Model\Demande;
use App\Model\Etudiant;
use App\Model\Personne;
use App\Model\Professeur;
use App\Model\Inscription;
use App\Model\AnneeScolaire;


require("../vendor/autoload.php");
/* $Personne = Personne::findAll();
var_dump($Personne); */
/* $AC = new AC();
$AC->setNomComplet('Fama Diop');
$AC->setSexe('F');
$AC->setLogin('fama@gmail.com');
$AC->setPassword('passer');
$AC->insert();

$et = new Etudiant();
$et->setNomComplet('Mouhamed Diop');
$et->setSexe('M');
$et->setLogin('podiop@gmail.com');
$et->setPassword('passer');
$et->insert(); */

/* $rp = new RP();
$rp->setNomComplet('Khadija Faye');
$rp->setSexe('F');
$rp->setLogin('dija@gmail.com');
$rp->setPassword('passer');
$rp->insert(); */

$res =Etudiant::findAll();

echo'<pre>';
var_dump($res);
echo'</pre>';

 ?>
