<?php include_once __DIR__ . "/header.php"; ?>
<div class="container-fluid">
    <h2>Lista Articoli</h2>
    <ul>
        <?php
        foreach ($articles as $article) {
            echo '<li><a href="admin.php?act=edit&id=' . $article->getId() . '">' . $article->getTitle() . '</a></li>';
        }
        ?>
    </ul>

    <a href="admin.php?act=create" class="btn btn-primary">Crea Nuovo</a>
    <a href="admin.php?act=logout" class="btn btn-danger">Logout</a>
</div>
<?php include_once __DIR__ . "/footer.php";