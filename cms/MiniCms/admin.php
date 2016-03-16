<?php namespace MiniCms;

use MiniCms\Admin\ArticleManager;

$secretKey = "1q2w3e4r5t";
$password = "11111";
define("VIEWDIR",__DIR__."/view/");

include_once(__DIR__."/Admin/login.php");
$login = new \MiniCms\Admin\login($secretKey, $password);

$act = $_GET['act'];

if($act == "login") {
    if(!$login->checkPassword()){
        $login->showLogin(true);
        die();
    }
} elseif(!$login->userIsLogged()) {
    $login->showLogin(false);
    die();
}

include_once(__DIR__."/Admin/ArticleManager.php");
$articleManager = new ArticleManager();
switch ($act) {
    case "create":
        $articleManager->showCreate();
        break;
    
    case "edit":
        $articleManager->showEdit();
        break;
    
    case "save":
        $articleManager->save();
        break;

    case "logout":
        $login->logout();
        header("Location: admin.php");
        break;
    
    default:
        $articleManager->showList();
}