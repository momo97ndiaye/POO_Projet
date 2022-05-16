<?php 
    class AnneeScolaire extends Model{
/*         private array $inscriptions;
 */

public function __construct()
{
    self::$table="anneescolaire";
}

        public function inscriptions():array{
            return[];
        }

       /*  public function __construct()
        {
            $this->role="ROLE_AC";
            $this->inscription=[];
        } */
    }
?>