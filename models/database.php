<?php
class database
{
    public function __construct()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=devlop\'s; charset=UTF8', 'root', 'OM12');
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }
}