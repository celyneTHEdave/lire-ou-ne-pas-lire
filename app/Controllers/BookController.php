<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Type;

class BookController extends CoreController {


    private $title;
    private $author;
    private $bookpicture;
    private $editor;
    private $published_in;
    private $type;
    private $rate;
    private $summary;
    protected $created_at;
    private $updated_at;
    protected $id;
    private $name;
    private $typename;
    private $ratename;
    private $ratepicture;
    private $bookid;
    private $couvpicture;

    /* Méthode s'occupant de la liste des livres */

    public function list()
    {
        $allBooks = Book::findAll();

        $this->show('book/list', [
            'pageTitle' => 'Liste des livres',
            'bookList' => $allBooks,
        ]);
    }


    /* Méthode s'occupant de la page de review */

    public function review($id)
    {
        $bookToDisplay = Book::find($id);

        $this->show('book/review', [
            'pageTitle' => 'Revue du livre',
            'bookReview' => $bookToDisplay,
        ]);
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

    /**
     * Get the value of editor
     */ 
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set the value of editor
     *
     * @return  self
     */ 
    public function setEditor($editor)
    {
        $this->editor = $editor;

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
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;

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
}
