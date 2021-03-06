<?php

namespace App\Model;

class Etudiant extends User
{
  public string $matricule;
  private string $adresse;
  public function __construct()
  {
    self::$role = "ROLE_ETUDIANT";
  }
  /**
   * Get the value of matricule
   */
  public function getMatricule()
  {
    return $this->matricule;
  }

  /**
   * Set the value of matricule
   *
   * @return  self
   */
  public function setMatricule($matricule)
  {
    $this->matricule = $matricule;

    return $this;
  }



  /**
   * Get the value of adresse
   */
  public function getAdresse()
  {
    return $this->adresse;
  }

  public function setAdresse($adresse)
  {
    $this->adresse = $adresse;

    return $this;
  }

  public static function getRole()
  {
    return parent::$role = 'ROLE_ETUDIANT';
  }
  public static function findAll(): array
  {
   /*  $db = self::database();
    $db->connexionBD();
    $sql = "select * from " . parent::table()." where role like '". parent::role()."'" ;
    echo $sql;
    $result = $db->executeSelect($sql);
     $db->closeConnexion();
     return $result; */
    $sql = "select * from " . parent::table() . " where role  like ? and etat=1";
    return parent::findBy($sql, [self::getRole()]);
  }


  public function insert(): int
  {
    $db = self::database();
    $db->connexionBD();
    $sql = "INSERT INTO " .parent::table()." (`nom_complet`, `role`,`sexe`,`login`,`password`,`adresse`) VALUES (?,?,?,?,?,?);";
    $result =  $db->executeUpdate($sql, [$this->nomComplet, parent::$role,$this->sexe,$this->login,$this->password],$this->adresse);
    $db->closeConnexion();
/*     echo $sql;
 */    return $result;
  }

  public function inscriptions():array
  {
    $sql = "select i.* from " . self::table() . " p,inscription i
        where  p.id=i.etudiant_id
        and p.id=?";
       return parent::findBy($sql, [$this->id]);
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
