<?php

use App\Core\Role;
function dd($data): void
{
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die();
}
 function showNav()
{
  return !isset($_SESSION['user-connect'])?"d-none":"";
}


function hidden(array $except, $hidden=true)
{
foreach($except as $personne_connect){
  if(Role::getRole()==$personne_connect){
    return $hidden?"d-none":"disabled";
  }
}
return "";
}

