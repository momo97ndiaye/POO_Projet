<?php 
    class RP extends User{

      /*   public function inscriptions():array{
            return[];
        } */
        
        public function __construct()
        {
            self::$role="ROLE_RP";
        }

        public function findAll():array{
            $sql="select * from ".parent::table()."where role like 'ROLE_RP' ";
            return[];
        }
    }
?>