<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Role;
use App\Core\Request;
use App\Core\Constantes;
use App\Model\User;

class SecurityController extends Controller{
    public function authentification(){
         if ($this->request->isGet()) {
           //$this->render("security/login.html.php");
           $this->render("security/login.html.php");
        }else {
//dd($_POST);
            extract($_POST);
            /* if ($this->request->isPost()) { */
                //validation
                $user_connect = User::findUserByLoginAndPassword($login, $password);
                dd($user_connect);
            //dd($user_connect);
            //if ($user_connect != NULL) {
                //$this->session->setSession('user', $user_connect);
                $this->render('personne/acceuil.html.php');
            /* } else {
                dd('error');
            } */
        //}
        }
    }

    public function deconnexion()
    {
        session_destroy();
        session_unset();
        $this->redirectToRoute('login');
    }
}
