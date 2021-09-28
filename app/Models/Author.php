<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Author extends CoreModel {


    private $name;
    private $author_id;
    private $author;
    private $couvpicture;
    private $title;
    private $summary;
    private $bookid;

/* ------------
--- METHODES ---
-------------*/   

    /**
     * Méthode permettant de récupérer tous les enregistrements de la table author
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
     */
    public static function find($authorId)
    {

        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `author` WHERE `id` =' . $authorId;
        $pdoStatement = $pdo->query($sql);
        $author = $pdoStatement->fetchObject('App\Models\Author');
        return $author;
    }

        /**
     * Méthode permettant de récupérer un enregistrement de la table Book en fonction d'un author donné
     */
    public static function artwork($authorId)
    {

        $pdo = Database::getPDO();
        $sql = 'SELECT `book`.* , `author`.`id`, `type` . `typename` , `rate`. `ratename`, `rate`. `ratepicture`, `author`. `name` as authorName
        FROM `book`
        INNER JOIN `author` ON `book`.`author` = `author`.`id` 
        INNER JOIN `type` ON `book`.`type` = `type`.`id`
        INNER JOIN `rate` ON `book`.`rate` = `rate`.`id`
        WHERE `book`.`author` = ' .$authorId;
        $pdoStatement = $pdo->query($sql);
        $artworks = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\Models\Author');
        return $artworks;
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

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of couvpicture
     */ 
    public function getCouvpicture()
    {
        return $this->couvpicture;
    }

    /**
     * Set the value of couvpicture
     *
     * @return  self
     */ 
    public function setCouvpicture($couvpicture)
    {
        $this->couvpicture = $couvpicture;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of summary
     */ 
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     *
     * @return  self
     */ 
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get the value of bookid
     */ 
    public function getBookid()
    {
        return $this->bookid;
    }

    /**
     * Set the value of bookid
     *
     * @return  self
     */ 
    public function setBookid($bookid)
    {
        $this->bookid = $bookid;

        return $this;
    }
}
