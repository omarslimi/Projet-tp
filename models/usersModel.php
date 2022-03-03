<?php
class users extends database
{
    public $id;
    public $lastName;
    public $firstName;
    public $adress;
    public $siret;
    public $businessName;
    public $mail;
    public $password;
    public $biography;
    public $blocked;
    public $unblockedDate;
    public $verified;
    public $id_types;
    public $id_roles;
    public $id_cities;
    private $db;

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertUser()
    {
        $query = 'INSERT INTO up24p_users (lastName, firstName, adress, siret, businessName, mail, password, blocked, verified, id_types, id_roles, id_cities, biography) 
        VALUES (:lastName, :firstName, :adress, :siret, :businessName, :mail, :password, 0, 0,:id_types, 3, :id_cities, :biography)';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':adress', $this->adress, PDO::PARAM_STR);
        $queryPrepare->bindValue(':siret', $this->siret, PDO::PARAM_STR);
        $queryPrepare->bindValue(':businessName', $this->businessName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryPrepare->bindValue(':password', $this->password, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_types', $this->id_types, PDO::PARAM_INT);
        $queryPrepare->bindValue(':id_cities', $this->id_cities, PDO::PARAM_INT);
        $queryPrepare->bindValue(':biography', $this->biography, PDO::PARAM_STR);
        return $queryPrepare->execute();
    }

    //cette méthode sert a verifier si le siret existe deja dans la base de données
    public function checkIfSiretExist()
    {
        $query = 'SELECT COUNT(*) AS exist
        FROM up24p_users
        WHERE siret = :siret;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':siret', $this->siret, PDO::PARAM_STR);
        $queryPrepare->execute();
        $queryResult = $queryPrepare->fetch(PDO::FETCH_OBJ);
        return $queryResult->exist;
    }

    //cette méthode sert a verifier si le mail existe deja dans la base de données
    public function checkIfMailExist()
    {
        $query = 'SELECT COUNT(*) AS exist
        FROM up24p_users
        WHERE mail = :mail;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryPrepare->execute();
        $queryResult = $queryPrepare->fetch(PDO::FETCH_OBJ);
        return $queryResult->exist;
    }

    //cette methode sert a selectionner le mot de passe en fonction de l'adresse mail entrer dans la connection 
    public function selectPasswordByMail()
    {
        $query = 'SELECT password
        FROM up24p_users
        WHERE mail = :mail;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryPrepare->execute();
        return $queryPrepare->fetch(PDO::FETCH_OBJ);
    }

    //cette methode sert a remplir mon $_SESSION et de garder ces informations partout ou la session existe
    public function selectUserByMail()
    {
        $query = 'SELECT id, firstName, id_roles 
        FROM up24p_users
        WHERE mail = :mail;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryPrepare->execute();
        return $queryPrepare->fetch(PDO::FETCH_OBJ);
    }

    public function selectUserById()
    {
        $query = 'SELECT lastName, firstName, adress, siret, businessName, mail, biography, id_types, id_cities, biography, zip_code
        FROM up24p_users AS u
        INNER JOIN up24p_cities AS c
        ON id_cities = c.id
        WHERE u.id = :id;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryPrepare->execute();
        return $queryPrepare->fetch(PDO::FETCH_OBJ);
    }

    public function selectNameOfTypes()
    {
        $query = 'SELECT name 
        FROM up24p_types as ty
        INNER JOIN up24p_users ON ty.id = up24p_users.id_types
        WHERE up24p_users.id = :id;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryPrepare->execute();
        return $queryPrepare->fetch(PDO::FETCH_OBJ);
    }

    public function modifyPersonalInformations()
    {
        $query = 'UPDATE up24p_users
        SET lastName = :lastName, firstName = :firstName, adress = :adress, id_cities = :id_cities
        WHERE id = :id;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryPrepare->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':adress', $this->adress, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_cities', $this->id_cities, PDO::PARAM_INT);
        return $queryPrepare->execute();
    }

    public function modifyProfessionalInformations()
    {
        $query = 'UPDATE up24p_users
        SET id_types = :id_types, businessName = :businessName, siret = :siret
        WHERE id = :id;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryPrepare->bindValue(':id_types', $this->id_types, PDO::PARAM_INT);
        $queryPrepare->bindValue(':businessName', $this->businessName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':siret', $this->siret, PDO::PARAM_STR);
        return $queryPrepare->execute();
    }

    public function modifyMail()
    {
        $query = 'UPDATE up24p_users
        SET mail = :mail
        WHERE id = :id;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        return $queryPrepare->execute();
    }

    public function modifyBiography()
    {
        $query = 'UPDATE up24p_users
        SET biography = :biography
        WHERE id = :id;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryPrepare->bindValue(':biography', $this->biography, PDO::PARAM_STR);
        return $queryPrepare->execute();
    }

    public function selectUserSiret()
    {
        $query = 'SELECT siret 
        FROM up24p_users
        WHERE id = :id;';
        $queryPrepare = $this->db->prepare($query);
        $queryPrepare->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryPrepare->execute();
        $queryResult = $queryPrepare->fetch(PDO::FETCH_OBJ);
        return $queryResult->siret;
    }
}