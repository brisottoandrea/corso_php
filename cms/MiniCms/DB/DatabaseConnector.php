<?php

namespace MiniCms\DB;

include_once __DIR__."/Article.php";

class DatabaseConnector {
    protected $connector;

    /**
     * DatabaseConnector constructor.
     */
    public function __construct() {
        include_once __DIR__."/config.php";
        $this->connector = new \mysqli($dbServer,$dbUser,$dbPass,$dbDatabase);
    }

    public function getArticles($orderBy="created",$order="DESC") {
        $orderBy = ($orderBy != "title" || $orderBy != "created") ? $orderBy : "created";
        $order = $order == "ASC" ? "ASC" : "DESC";
        $qry = $this->connector->query("SELECT * FROM articles ORDER BY {$orderBy} {$order}");
        $articles = [];
        while ($articleData = $qry->fetch_assoc()) {
            if(!isset($articleData['id']))
                continue;
            
            $articles[] = new Article($articleData);
        }
        
        return $articles;
    }
    
    public function getArticle($id) {
        $qry = $this->connector->query("SELECT * FROM articles WHERE id = $id");
        $articleData = $qry->fetch_assoc();
        if(empty($articleData) || !isset($articleData['id'])) {
            return null;
        }
        
        return new Article($articleData);
    }
    
    public function saveArticle(Article $article) {
        $title = $article->getTitle();
        $text = $article->getText();
        $id = $article->getId();

        if($id > 0) {
            $query = $this->connector->prepare("UPDATE articles SET title = ?, text = ? WHERE id = ?");
            $query->bind_param("ssi",$title, $text,$id);
            return $query->execute();
        } else {
            $query = $this->connector->prepare("INSERT INTO articles (`title`, `text`, `created`) VALUES (?, ?, ?)");
            $query->bind_param("ssi",$title,$text,time());
            return $query->execute();
        }
    }
}