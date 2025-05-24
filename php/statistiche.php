<?php


require_once("bootstrap.php");
$templateParams["titolo"] = "Statistiche";
$templateParams["nome"] = "contenutoStatistiche.php";

$templateParams["noteTotali"] = $dbh->getNoteTotali()["Totale"];
$templateParams["diarioTotali"] = $dbh->getDiarioTotali()["Totale"];
$templateParams["taskCompletati"] = $dbh->getTasksTotaliCompletati()["Totale"];
$templateParams["taskScadenzaSettimana"] = $dbh->getTasksScadenzaSettimanaTotale()["Totale"];



require_once("../template/base.php");

?>