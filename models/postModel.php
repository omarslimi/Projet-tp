<?php
class projects extends database
{
    public $id;
    public $titre;
    public $description;
    public $publicationDate;
    public $id_users;
    public $id_budgetRanges;
    private $db;

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertPost()
    {
        $query = 'INSERT INTO up24p_users (titre, description, adress, siret, businessName, mail, password, blocked, verified, id_types, id_roles, id_cities) 
        VALUES (:lastName, :firstName, :adress, :siret, :businessName, :mail, :password, 0, 0,:id_types, 3, :id_cities);';
        $queryPrepare = $this->db->query($query);
        $queryPrepare->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':adress', $this->adress, PDO::PARAM_STR);
        $queryPrepare->bindValue(':siret', $this->siret, PDO::PARAM_STR);
        $queryPrepare->bindValue(':businessName', $this->businessName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryPrepare->bindValue(':password', $this->password, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_types', $this->id_types, PDO::PARAM_INT);
        $queryPrepare->bindValue(':id_cities', $this->id_cities, PDO::PARAM_INT);
        return $queryPrepare->execute();
    }

    public function selectBudgetrangesList()
    {
        $query = 'SELECT id, `range`
        FROM up24p_budgetranges;';
        $queryPrepare = $this->db->query($query);
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }
}