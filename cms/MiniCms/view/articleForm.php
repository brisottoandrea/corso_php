<?php include_once __DIR__ . "/header.php"; ?>
<div class="container-fluid">
    <h2>Form Articoli</h2>
    <form action="admin.php?act=save" method="post">
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="<?=isset($article)?$article->getTitle():''?>"> 
        </div>
        <div class="form-group">
            <label for="text">Testo</label>
            <textarea class="form-control" rows="3" id="text" name="text"><?=isset($article)?$article->getText():''?></textarea>
        </div>

        <input type="hidden" name="id" value="<?=isset($article)?$article->getId():''?>"/>
        <button type="submit" class="btn btn-primary">Invia</button>
        <a href="admin.php" class="btn btn-danger">Annulla</a>
    </form>
</div>
<?php include_once __DIR__ ."/footer.php";