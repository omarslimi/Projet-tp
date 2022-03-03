<?php
class categories extends database
{
    public $id;
    public $name;
    private $db;

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function selectCategoriesList()
    {
        $query = 'SELECT id, name
        FROM up24p_categories;';
        $queryPrepare = $this->db->query($query);
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }
}