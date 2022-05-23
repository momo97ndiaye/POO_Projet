<?php
namespace App\Controller;

use App\Model\Etudiant;
use App\Core\Controller;

class PersonneController extends Controller{
    
    public function lister(){
       /*  $res =Etudiant::findAll(); */

/* echo'<pre>';
var_dump($res);
echo'</pre>'; die; */
        $this->render('security/login.html.php');
    }
}