<?php 
namespace MiniCms;

include_once(__DIR__."/DB/DatabaseConnector.php"); 
$db = new \MiniCms\DB\DatabaseConnector();

include_once "view/header.php";
?>

<h1>Articoli</h1>
<hr />

<?php foreach ($db->getArticles() as $article): ?>
<div class="article">
    <h3><?=$article->getTitle()?></h3>
    <?php echo $article->getText(); ?>
</div>
<?php endforeach; ?>


<?php require "view/footer.php"; ?>