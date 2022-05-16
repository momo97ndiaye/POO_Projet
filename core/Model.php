<?php 
    abstract class Model implements IModel{
        public static function table():string{
            $table= get_called_class();
            $table= str_replace("App\\Model\\","",$table);
            $table = ($table=="User" or $table=="RP" or $table=="AC" or $table="Professeur")?"personne":strtolower($table);
            return $table;
        }
        public static function insert():int{
            return 0;
        }
        public static function update():int{
            return 0;
        }
        public static function delete():int{
            $sql="delete from '".self::$table."'where id=$id";
            return 0;
        }
        public static function findAll():array{
            $sql="select * from '".self::$table."'";
            return[];
        }
        public static function findById():object|null{
            $sql="select * from '".self::$table."'where id=$id";
            return null;
        }     
        public static function findBy(string $sql,array $data=null,$single=false):object|null|array{
            return null;
        }  
    }
?>