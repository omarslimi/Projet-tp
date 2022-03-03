<?php
class types extends database
{
    public $id;
    public $name;
    private $db;

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function selectTypesList()
    {
        $query = 'SELECT id, name
        FROM up24p_types;';
        $queryPrepare = $this->db->query($query);
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }
    
}