<?php
 class Personne extends Model{

    protected int $id;
    protected string $nomComplet;
    protected static string $role; 

    public static function Role(string $className){
        $className = get_called_class();
        $role = "ROLE_".strtoupper($className);
        return $role;
    }

    //2- constructeur par defaut
    public function  __construct()
    {
        parent::$table='personne';
    }

    //==========Getter accesseur de ID_personne
      public function getId():int
        {
            return $this->id;
        }

    //==========Getter accesseur de NomComplet_personne
    public function getNomComplet() : string
        {
            return $this->nomComplet;
        }    

        //==========Getter accesseur de nbrepersonne

   

    //==========Setter modificateur de ID_personne
    public function setId($id) : void
        {
            $this->id = $id;
        }

    //==========Setter modificateur de NomComplet_personne
    public function setNomComplet($nomComplet) : self
        {
            $this->nomComplet = $nomComplet;
            return $this;
        }
    //les methodes abstraites
    //==========Setter  modificateur de nbrepersonne

   

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

   /*  public function findAll():array{
        $sql="select * from personne where role like".self::$role;
        return[];
    } */
}