<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Book extends CoreModel {
    

    private $title;
    private $author;
    private $bookpicture;
    private $editor;
    private $published_in;
    private $type;
    private $rate;
    private $summary;
    private $review;
    protected $created_at;
    private $updated_at;
    protected $id;
    private $name;
    private $typename;
    private $ratename;
    private $ratepicture;
    private $bookid;
    private $couvpicture;

/* ------------
--- METHODES ---
-------------*/

    /**
     * Récupérer tous les enregistrements de la table book
     */
    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT `book`.* , `author`.`name` , `type` . `typename` , `rate`. *
        FROM `book`
        INNER JOIN `author` ON `book`.`author` = `author`.`id`
        INNER JOIN `type` ON `book`.`type` = `type`.`id`
        INNER JOIN `rate` ON `book`.`rate` = `rate`.`id`
        ";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Book');
        
        return $results;
    }
    
    /**
     * Récupérer la fiche livre à la une
     */
    public static function findBookHomepage()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT `book`.* , `author`.`name` , `type` . `typename` , `rate`. *
        FROM `book`
        INNER JOIN `author` ON `book`.`author` = `author`.`id`
        INNER JOIN `type` ON `book`.`type` = `type`.`id`
        INNER JOIN `rate` ON `book`.`rate` = `rate`.`id`
            ORDER BY created_at DESC
            LIMIT 1
        ";
        $pdoStatement = $pdo->query($sql);
        $book = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Book');
        
        return $book;
    }

    /**
     * Récupérer un enregistrement de la table book par un ID défini pour la page review
     */
    public static function find($id)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT `book`.* , `author`.`name` , `type` . `typename` , `rate`. `ratename`, `rate`. `ratepicture`
        FROM `book`
        INNER JOIN `author` ON `book`.`author` = `author`.`id` 
        INNER JOIN `type` ON `book`.`type` = `type`.`id`
        INNER JOIN `rate` ON `book`.`rate` = `rate`.`id`
        WHERE `book`. `bookid` =" . $id ;
        $pdoStatement = $pdo->query($sql);
        $book = $pdoStatement->fetchObject('App\Models\Book');
        
        return $book;
    }


/* ------------
--- GETTERS ET SETTERS ---
-------------*/

    /**
     * Get the value of title
     *
     * @return  string
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param  string  $title
     */ 
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get the value of author
     *
     * @return  string
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @param  string  $author
     */ 
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }


    /**
     * Get the value of editor
     *
     * @return  string
     */ 
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set the value of editor
     *
     * @param  string  $editor
     */ 
    public function setEditor(string $editor)
    {
        $this->editor = $editor;
    }

    /**
     * Get the value of rate
     *
     * @return  int
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @param  int  $rate
     */ 
    public function setRate(int $rate)
    {
        $this->rate = $rate;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of published_in
     */ 
    public function getPublished_in()
    {
        return $this->published_in;
    }

    /**
     * Set the value of published_in
     *
     * @return  self
     */ 
    public function setPublished_in($published_in)
    {
        $this->published_in = $published_in;

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
     * Get the value of review
     */ 
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Set the value of review
     *
     * @return  self
     */ 
    public function setReview($review)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Get the value of typename
     */ 
    public function getTypename()
    {
        return $this->typename;
    }

    /**
     * Set the value of typename
     *
     * @return  self
     */ 
    public function setTypename($typename)
    {
        $this->typename = $typename;

        return $this;
    }

    /**
     * Get the value of ratename
     */ 
    public function getRatename()
    {
        return $this->ratename;
    }

    /**
     * Set the value of ratename
     *
     * @return  self
     */ 
    public function setRatename($ratename)
    {
        $this->ratename = $ratename;

        return $this;
    }

    /**
     * Get the value of ratepicture
     */ 
    public function getRatepicture()
    {
        return $this->ratepicture;
    }

    /**
     * Set the value of ratepicture
     *
     * @return  self
     */ 
    public function setRatepicture($ratepicture)
    {
        $this->ratepicture = $ratepicture;

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
     * Get the value of bookpicture
     */ 
    public function getBookpicture()
    {
        return $this->bookpicture;
    }

    /**
     * Set the value of bookpicture
     *
     * @return  self
     */ 
    public function setBookpicture($bookpicture)
    {
        $this->bookpicture = $bookpicture;

        return $this;
    }
}
