<?php

namespace App\Core;


abstract class Model implements IModel
{
  protected static string $table;


  protected  static function database(): Database
  {
    return new Database;
  }

  public static function table()
  {
    return self::$table = '';
  }

  public static function role(){
    $role=get_called_class();   
    $role ="ROLE_".strtoupper(str_replace("App\\Model\\",'',$role));
    return $role;
}
  //Redefinition des Fonction IModel  
  public function insert(): int
  {
    $db = self::database();
    $db->connexionBD();
    
    return 0;
  }
  public static function update(int $id): int
  {
    return 0;
  }
  public static function delete(int $id): int
  {

    $db = self::database();
    $db->connexionBD();
    $sql = "delete from " . self::table() . " where id=?";
    $result =  $db->executeUpdate($sql, [$id]);
    $db->closeConnexion();
    return $result;
  }
  public static function findAll():array
  {
    $db = self::database();
    $db->connexionBD();
    $sql = "select * from " . self::table()." where role like '". self::role()."'" ;
    echo $sql;
    $result = $db->executeSelect($sql);
     $db->closeConnexion();
     return $result;
  /*   $sql = "select * from " . self::table();
    return self::findBy($sql) */;
  }
  public static function findById(int $id): object|null
  {
    $sql = "select * from '" . self::table() . "'where id=?";
    return self::findBy($sql,[$id]);
  }
  public static function findBy(string $sql, array $data = [], $single = false): object|null|array
  {
    $db = self::database();
    $db->connexionBD();
    $result =  $db->executeSelect($sql, $data, $single);
    $db->closeConnexion();
    return $result;
  }
}
