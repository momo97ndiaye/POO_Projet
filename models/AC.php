<?php 
    class AC extends User{
        private array $inscriptions;

        public function inscriptions():array{
            return[];
        }
        
        public function __construct()
        {
            self::$role="ROLE_AC";
            //$this->inscription=[];
        }

        public static function findAll():array{
            $sql="select * from ".parent::table()."where role like 'ROLE_AC' ";
            return[];
        }
       
    }
?>