<?php

namespace App\Controller;

use App\Core\Role;
use App\Model\User;
use App\Core\Controller;
use App\Model\AC;
use App\Core\Request;

class AcController extends Controller{

    public function listerAc(){
        if ($this->request->isGet()) {
            /*  if (!Role::isConnect()) {
                 $this->redirectToRoute('login');
             } else { */
                 $ac=AC::findAll();
         $data=[
             "titre"=>"Liste des Attachés",
             "ac"=>$ac
          ];
 
         $this->render('ac/liste.ac.html.php',$data);
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