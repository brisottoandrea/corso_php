<?php

namespace MiniCms\DB;

include_once __DIR__."/Article.php";
include_once __DIR__."/Carrello.php";

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
        $qry = $this->connector->query("SELECT * FROM carrello ORDER BY {$orderBy} {$order}");
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
    
    
    public function getCarrellos($orderBy="created",$order="DESC") {
        $orderBy = ($orderBy == "numeroCarrello" || $orderBy == "aula" || $orderBy == "professore" || $orderBy == "data") ? $orderBy : "data";
        $order = $order == "ASC" ? "ASC" : "DESC";
        $qry = $this->connector->query("SELECT * FROM carrello ORDER BY {$orderBy} {$order}");
        $carrellos = [];
        while ($carrelloData = $qry->fetch_assoc()) {
            if(!isset($carrelloData['id']))
                continue;
            
            $carrellos[] = new Carrello($carrelloData);
        }
        
        return $carrellos;
    }


    public function getCarrelli($orderBy="data",$order="DESC", $numeroCarrello) {
        $orderBy = ($orderBy == "numeroCarrello" || $orderBy == "aula" || $orderBy == "professore" || $orderBy == "data") ? $orderBy : "data";
        $order = $order == "ASC" ? "ASC" : "DESC";
        $qry = $this->connector->query("SELECT * FROM carrello WHERE numeroCarrello = $numeroCarrello ORDER BY {$orderBy} {$order}");
        $carrellos = [];
        while ($carrelloData = $qry->fetch_assoc()) {
            if(!isset($carrelloData['id']))
                continue;

            $carrellos[] = new Carrello($carrelloData);
        }

        return $carrellos;
    }
    
    public function getCarrello($id) {
        $qry = $this->connector->query("SELECT * FROM carrello WHERE id = $id");
        $carrelloData = $qry->fetch_assoc();
        if(empty($carrelloData) || !isset($carrelloData['id'])) {
            return null;
        }
        
        return new Carrello($carrelloData);
    }
    
    public function saveCarrello(Carrello $carrello) {
        $ora = $carrello->getOra();
        $numeroCarrello = $carrello->getNumeroCarrello();
        $aula = $carrello->getAula();
        $professore = $carrello->getProfessore();
        $data = $carrello->getData();
        $id = $carrello->getId();

        if($id > 0) {
            $query = $this->connector->prepare("UPDATE carrello SET `ora` = ?, `numeroCarrello` = ?, `aula` = ?, `professore` = ?, `data` = ? WHERE id = ?");
            $query->bind_param("ssi",$ora, $numeroCarrello, $aula, $professore, $data ,$id);
            return $query->execute();
        } else {
            $query = $this->connector->prepare("INSERT INTO carrello (`ora`,`numeroCarrello`, `aula`, `professore`, `data`) VALUES (?,?, ?, ?, ?)");
            $query->bind_param("ssi",$ora, $numeroCarrello, $aula, $professore, $data);
            return $query->execute();
        }
    }
}