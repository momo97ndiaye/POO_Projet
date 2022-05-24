<?php
namespace App\Controller;

use App\Model\Etudiant;
use App\Core\Controller;

class EtudiantController extends Controller{

    public function lister(){
        $etu=Etudiant::findAll();
        $data=[
            "titre"=>"Liste des Étudiants",
            "etu"=>$etu
         ];

        $this->render('etudiant/lister.etudiant.html.php',$data);
    }

    public function inscrire(){
        if ($this->request->isGet()) {

            $this->render("etudiant/ins.html.php");
        }else{
        extract($_POST);
        $etu = new Etudiant();
        $etu->setNomComplet($nomComplet);
        $etu->setLogin($login);
        $etu->setPassword($password);
        $etu->setAdresse($adresse);
        $etu->setMatricule($matricule);
        $etu->setSexe($sexe);
        $etu->setAdresse($adresse);
        $etu->insert();
        $this->redirectToRoute('ins');
        }

    }


}