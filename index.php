<?php
/**
 * Created by PhpStorm.
 * User: 4infa
 * Date: 14/03/16
 * Time: 11.38
 */

//$var = 10;
//$string = $var / 2;

//echo $string;
//
//if($var === 10.0)
//{
//    echo "<br>Vero";
//}else
//{
//    echo "<br>Falso";
//}

$array = ["ciao", 12, 100];
foreach ($array as $chiave=>$item)
{
    echo $chiave.") ".$item."<br>";
}

function somma($val1, $val2)
{
    return $val1 + $val2;
}

echo somma(10,20);

$cane = new Animal("Cane", "Labrador");
//$cane->setNome("Labrador");
//$cane->setSpecie("Cane");
$cane->printAnimal();

class Animal
{
    protected $nome = "";
    public $specie;

    public function __construct($nome, $specie)
    {
        $this->setNome($nome);
        $this->setSpecie($specie);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setSpecie($specie)
    {
        $this->specie = $specie;
    }

    public function getSpecie()
    {
        return $this->specie;
    }

    public function printAnimal()
    {
        echo "<br>Nome: ".$this->getNome() . "<br>Specie: " . $this->getSpecie();
    }
}

?>

<html>
    <head>
        <title>Test PHP</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
        <style>
            body {
                font-family: 'Roboto', serif;
                font-size: 18px;
            }
        </style>
    </head>
</html>
