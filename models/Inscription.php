<?php 
    class Inscription extends Model{

        public function __construct()
        {
            self::$table="inscription";
        }

        public function ac():AC
        {
            $sql="select p.* from inscription i, personne p where p.id=i.ac_id and p.role like 'ROLE_AC' and i.id=".this->id;
            return new AC();
        }

        public function anneeScolaire():AnneeScolaire
        {
            $sql="select a.* from inscription i, anneescolaire a where a.id=i.annee_id and i.id=".this->id;
            return new AnneeScolaire();
        }
    }
?>