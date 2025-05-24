<?php

require_once("bootstrap.php");
$templateParams["titolo"] = "Diario";
$templateParams["nome"] = "contenutoListaDiario.php";

$templateParams["diari"] = $dbh->getDiario();

require_once("../template/base.php");

?>