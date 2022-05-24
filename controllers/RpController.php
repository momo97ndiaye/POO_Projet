<?php

namespace App\Controller;

use App\Core\Role;
use App\Model\User;
use App\Core\Controller;
use App\Model\RP;
use App\Core\Request;

class RpController extends Controller{

    public function listeRp(){
        if ($this->request->isGet()) {
            /*  if (!Role::isConnect()) {
                 $this->redirectToRoute('login');
             } else { */
                 $rp=RP::findAll();
         $data=[
             "titre"=>"Liste des Responsables",
             "rp"=>$rp
          ];
 
         $this->render('rp/liste.rp.html.php',$data);
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