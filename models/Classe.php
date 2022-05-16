<?php 
    class Classe extends Model{

        public function professeurs():array{
            return[];
        }

        public function __construct()
        {
            self::$table="classe";
        }

/* 
        public function insert():int{
            return 0;
        }
        public function update():int{
            return 0;
        }
        public function delete():int{
            return 0;
        }
        public function findAll():array{
            return[];
        }
        public function findById():object|null{
            return null;
        }     
        public function findBy(string $sql,array $data=null,$single=false):object|null|array{
            return null;
        }   */
    }
?>