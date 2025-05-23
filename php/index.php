<?php

require_once("bootstrap.php");

$templateParams["titolo"] = "Home";
$templateParams["nome"] = "contenutoIndex.php";

$templateParams["noteOggi"] = $dbh->getNoteOggi();
$templateParams["diarioOggi"] = $dbh->getDiarioOggi();
$templateParams["tasksScadenzaSettimana"] = $dbh->getTasksScadenzaSettimana();

$templateParams["noteTotali"] = $dbh->getNoteTotali()["Totale"];
$templateParams["diarioTotali"] = $dbh->getDiarioTotali()["Totale"];
$templateParams["taskCompletati"] = $dbh->getTasksTotaliCompletati()["Totale"];
$templateParams["taskScadenzaSettimana"] = $dbh->getTasksScadenzaSettimanaTotale()["Totale"];



require_once("../template/base.php");

?>