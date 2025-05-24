<?php

require_once("bootstrap.php");

$templateParams["titolo"] = "Lista Task";
$templateParams["nome"] = "contenutoListaTasks.php";

$templateParams["tasks"] = $dbh->getTasks();

require_once("../template/base.php");

?>