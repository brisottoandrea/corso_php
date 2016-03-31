<?php 
namespace MiniCms;

include_once(__DIR__."/DB/DatabaseConnector.php"); 
$db = new \MiniCms\DB\DatabaseConnector();

include_once "view/header.php";

?>

    <a class="button-fab" id="divPrenotazione">
        <img src="view/images/prenotazione_icon.svg" width="70%" title="Prenota Carrello">
    </a>

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="index.php" method="post">
                            <input type="text" name="login" class="form-control" /><br>
                            <button type="submit" class="btn btn-primary">Invia</button><br><br>
                            <p class="no-margin">Il valore inviato è <strong><?= $_POST['login'];?></strong></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <!-- Carrello 1 -->
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="no-margin">Carrello <span class="strong">1</span></h1>
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>Data</th>
                        <th>1<sup>a</sup> ora</th>
                        <th>2<sup>a</sup> ora</th>
                        <th>3<sup>a</sup> ora</th>
                        <th>4<sup>a</sup> ora</th>
                        <th>5<sup>a</sup> ora</th>
                        <th>6<sup>a</sup> ora</th>
                        <th>7<sup>a</sup> ora</th>
                        <th>8<sup>a</sup> ora</th>
                    </tr>


                    <?php foreach ($db->getCarrelli("data", "DESC", 1) as $carrello): ?>
                        <tr>
                            <td></td>
                            <td><?php if ($carrello->getOra() == 1){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 2){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 3){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 4){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 5){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 6){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 7){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 8){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                        </tr>
                    <?php endforeach; ?>

                    <?php
                    /*$number_of_days = intval(date("t"));
                    for($i = 0; i < $number_of_days; $i++)
                    {
                        //$dayLetter = date("D");
                        $month_num = date("m");
                        $day = $i + 1;
                        $date = $day . "/" . $month_num;*/
                        ?>
                        <?php
                        /*if($i >= $number_of_days - 1)
                            break;
                    }*/
                    ?>

                </table>
            </div>
        </div>

        <!-- Carrello 2 -->
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="no-margin">Carrello <span class="strong">2</span></h1>
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>Data</th>
                        <th>1<sup>a</sup> ora</th>
                        <th>2<sup>a</sup> ora</th>
                        <th>3<sup>a</sup> ora</th>
                        <th>4<sup>a</sup> ora</th>
                        <th>5<sup>a</sup> ora</th>
                        <th>6<sup>a</sup> ora</th>
                        <th>7<sup>a</sup> ora</th>
                        <th>8<sup>a</sup> ora</th>
                    </tr>


                    <?php foreach ($db->getCarrelli("data", "DESC", 2) as $carrello): ?>
                        <tr>
                            <td></td>
                            <td><?php if ($carrello->getOra() == 1){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 2){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 3){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 4){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 5){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 6){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 7){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 8){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        </div>

        <div class="row">
        <!-- Carrello 3 -->
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="no-margin">Carrello <span class="strong">3</span></h1>
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>Data</th>
                        <th>1<sup>a</sup> ora</th>
                        <th>2<sup>a</sup> ora</th>
                        <th>3<sup>a</sup> ora</th>
                        <th>4<sup>a</sup> ora</th>
                        <th>5<sup>a</sup> ora</th>
                        <th>6<sup>a</sup> ora</th>
                        <th>7<sup>a</sup> ora</th>
                        <th>8<sup>a</sup> ora</th>
                    </tr>


                    <?php foreach ($db->getCarrelli("data", "DESC", 3) as $carrello): ?>
                        <tr>
                            <td></td>
                            <td><?php if ($carrello->getOra() == 1){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 2){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 3){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 4){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 5){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 6){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 7){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 8){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

        <!-- Carrello 4 -->
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="no-margin">Carrello <span class="strong">4</span></h1>
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>Data</th>
                        <th>1<sup>a</sup> ora</th>
                        <th>2<sup>a</sup> ora</th>
                        <th>3<sup>a</sup> ora</th>
                        <th>4<sup>a</sup> ora</th>
                        <th>5<sup>a</sup> ora</th>
                        <th>6<sup>a</sup> ora</th>
                        <th>7<sup>a</sup> ora</th>
                        <th>8<sup>a</sup> ora</th>
                    </tr>


                    <?php foreach ($db->getCarrelli("data", "DESC", 4) as $carrello): ?>
                        <tr>
                            <td></td>
                            <td><?php if ($carrello->getOra() == 1){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 2){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 3){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 4){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 5){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 6){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 7){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                            <td><?php if ($carrello->getOra() == 8){ echo $carrello->getAula() . " " . $carrello->getProfessore();}?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        </div>

        <div class="col-sm-12" id="overlay">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="panel-prenotazione" id="panelPrenotazione">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a class="close" aria-label="Close" id="closeDivPrenotazione"><span aria-hidden="true">&times;</span></a>
                            <h1>Test Pannello</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require "view/footer.php"; ?>