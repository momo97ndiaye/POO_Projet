<?php 
    class Professeur extends User{
        public function classes():array{
            return[];
        }
        public function __construct()
        {
            self::$role="ROLE_PROFESSEUR";
        }

        public static function findAll():array{
            $sql="select * from ".parent::table()."where role like 'ROLE_PROFESSEUR' ";
            return[];
        }
    }
?>