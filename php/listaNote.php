<?php

require_once("bootstrap.php");

$templateParams["titolo"] = "Note";
$templateParams["nome"] = "contenutoListaNote.php";

$templateParams["note"] = $dbh->getNote();

require_once("../template/base.php");



?>