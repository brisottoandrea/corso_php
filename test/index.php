<?php
/**
 * Created by PhpStorm.
 * User: 4infa
 * Date: 14/03/16
 * Time: 11.38
 */

$div_response = "";

if(isset($_POST["submitBtn"]))
{
    $name = $_POST["name"];
    $surname = $_POST["surname"];

    $div_response = "<div class='div-material'><p>Name: $name<br>Surname: $surname</p></div>";
}
?>
<html>
    <head>
        <title>Test PHP</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Test PHP</h1>
        <div class="div-material">
            <form action="" method="post">
                <input type="text" id="name" placeholder="Name"><br><br>
                <input type="text" id="surname" placeholder="Surname"><br><br>
                <button type="submit" id="submitBtn" class="btn">SUBMIT</button>
            </form>
        </div>

        <?= $div_response; ?>
    </body>
</html>