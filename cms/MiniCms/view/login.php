<?php include_once __DIR__ . "/header.php"; ?>
    <h2>È necessario collegarsi per vedere l'amministrazione</h2>
    <?php if ($showError): ?><p class="bg-danger">Credenziali Errate</p><?php endif; ?>
    <form action="admin.php?act=login" method="post" class="form">
        <input name="password" type="password"/><input type="submit" value="Invia"/>
    </form>

<?php include_once __DIR__ . "/footer.php";