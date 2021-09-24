<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Author extends CoreModel {


    private $name;
    private $author_id;

/* ------------
--- METHODES ---
-------------*/   

    /**
     * Méthode permettant de récupérer tous les enregistrements de la table author
     * 
     * @return Author[]
     */
    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `author` ORDER BY `name` ASC';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Author');
        
        return $results;
    }

    /**
     * Méthode permettant de récupérer un enregistrement de la table Author en fonction d'un id donné
     * @return Author
     */
    public static function find($authorId)
    {

        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `author` WHERE `id` =' . $authorId;
        $pdoStatement = $pdo->query($sql);
        $author = $pdoStatement->fetchObject('App\Models\Author');
        return $author;
    }


/* ------------
--- GETTERS ET SETTERS ---
-------------*/

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of author_id
     */ 
    public function getAuthor_id()
    {
        return $this->author_id;
    }

    /**
     * Set the value of author_id
     *
     * @return  self
     */ 
    public function setAuthor_id($author_id)
    {
        $this->author_id = $author_id;

        return $this;
    }
}
