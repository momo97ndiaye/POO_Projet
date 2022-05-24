<?php

namespace App\Controller;

use App\Core\Role;
use App\Model\User;
use App\Core\Controller;
use App\Model\Professeur;
use App\Core\Request;

class ProfesseurController extends Controller{
    public function affecterClasse(){
        
    }
    public function listerProf(){
        if ($this->request->isGet()) {
           /*  if (!Role::isConnect()) {
                $this->redirectToRoute('login');
            } else { */
                $prof=Professeur::findAll();
        $data=[
            "titre"=>"Liste des Professeurs",
            "prof"=>$prof
         ];

        $this->render('professeur/liste.prof.html.php',$data);
            //}
        }
        /* if ($this->request->isPost()) {
            //validation
            $user_connect = User::findUserByLoginAndPassword($_POST['login'], $_POST['password']);
            if ($user_connect != NULL) {
                $this->session->setSession('user', $user_connect);
                $this->render('personne/acceuil.html.php');
            } else {
                dd('error');
            }
        } */
    }
}