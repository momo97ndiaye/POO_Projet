<?php

namespace App\Model;


class AC extends User
{

 
  public function __construct()
  {
    parent::$role = "ROLE_AC";
  }
  public static function getRole()
  {
    return parent::$role = 'ROLE_AC';
  }
  public static function findAll(): array
  {
    $db = self::database();
    $db->connexionBD();
    $sql = "select * from " . parent::table()." where role like '". parent::role()."' and etat=1" ;
    //echo $sql;
    $result = $db->executeSelect($sql);
     $db->closeConnexion();
     return $result;
    //return parent::findBy($sql, [self::getRole()]);
    /* $sql = "select * from " . parent::table() . " where role  like ?";
    return parent::findBy($sql, [self::getRole()]); */
  }

  public function insert(): int
  {
    $db = self::database();
    $db->connexionBD();
    $sql = "INSERT INTO " .parent::table()." (`nom_complet`, `role`,`sexe`,`login`,`password`) VALUES (?,?,?,?,?);";
    $result =  $db->executeUpdate($sql, [$this->nomComplet, parent::$role,$this->sexe,$this->login,$this->password]);
    $db->closeConnexion();
    return $result;
  }

  public function inscriptions(): array
  {
    $sql = "select i.* from " . parent::table() . " p,inscription i 
    where  p.id=i.ac_id
    and p.role like ?
    and p.id=?";
      return parent::findBy($sql, [$this->id,AC::getRole()]);
  }

  public static function update(int $id): int{
    $db = self::database();
    $db->connexionBD();
    $sql ="UPDATE ".parent::table()." SET etat = 0 WHERE id = ?";
    $result =  $db->executeUpdate($sql, [$id]);
    $db->closeConnexion();
    return $result;
  }
}
