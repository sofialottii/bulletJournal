<?php

require_once("bootstrap.php");

$templateParams["titolo"] = "Home";
$templateParams["nome"] = "contenutoIndex.php";

$templateParams["noteOggi"] = $dbh->getNoteOggi();
$templateParams["diarioOggi"] = $dbh->getDiarioOggi();
$templateParams["tasksScadenzaSettimana"] = $dbh->getTasksScadenzaSettimana();



require_once("../template/base.php");

?>