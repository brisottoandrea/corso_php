<?php


namespace MiniCms\DB;


class Article {

    protected $id;
    protected $title = "";
    protected $text = "";
    protected $created = 0;
    
    /**
     * Article constructor.
     */
    public function __construct($articleData=[]) {
        if(isset($articleData['id'])) {
            $this->id = $articleData['id'];
        }
        
        if(isset($articleData['title'])) {
            $this->title = $articleData['title'];
        }

        if(isset($articleData['text'])) {
            $this->text = $articleData['text'];
        }

        if(isset($articleData['created'])) {
            $this->created = $articleData['created'];
        }
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text) {
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * @param int $created
     */
    public function setCreated($created) {
        $this->created = $created;
    }
}