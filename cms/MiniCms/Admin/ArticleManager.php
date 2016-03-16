<?php namespace MiniCms\Admin;

use MiniCms\DB\Article;
use MiniCms\DB\DatabaseConnector;

include_once __DIR__."/../DB/DatabaseConnector.php";
include_once __DIR__."/../DB/Article.php";

class ArticleManager {

    protected $db;

    /**
     * ArticleManager constructor.
     */
    public function __construct() {
        $this->db = new DatabaseConnector();
    }
    
    public function showList() {
        $articles = $this->db->getArticles();
        include VIEWDIR."articlesList.php";
    }

    public function showCreate() {
        include VIEWDIR . "articleForm.php";
    }

    public function showEdit() {
        if(!isset($_GET['id']) || (int)$_GET['id'] < 1) {
            echo "Non son stati passati parametri validi";
            return;
        }

        $article = $this->db->getArticle((int)$_GET['id']);
        if(!$article instanceof Article) {
            echo "Articolo non esistente";
            return;
        }

        include VIEWDIR . "articleForm.php";
    }

    public function save() {
        if(isset($_POST['id']) && (int)$_POST['id'] > 0) {
            $article = $this->db->getArticle((int)$_POST['id']);
            if(!$article instanceof Article) {
                echo "Articolo non esistente";
                return;
            }
        } else {
            $article = new Article();
        }

        if(isset($_POST['title'])) {
            $article->setTitle($_POST['title']);
        }

        if(isset($_POST['text'])) {
            $article->setText($_POST['text']);
        }

        var_dump($this->db->saveArticle($article));

        header("Location: admin.php");
    }
    
}