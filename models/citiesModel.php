<?php
class cities extends database
{
    public $id;
    public $zip_code;
    public $name;
    private $db;

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function selectZip_codeList()
    {
        $query = 'SELECT `id`, `zip_code`, `name`
        FROM up24p_cities
        WHERE zip_code LIKE :zip_code;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':zip_code', $this->zip_code  . '%', PDO::PARAM_STR);
        $queryPrepare->execute();
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }
    
}