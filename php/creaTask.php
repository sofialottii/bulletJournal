<?php

require_once("bootstrap.php");

$templateParams["titolo"] = "Crea Task";
$templateParams["nome"] = "formCreaTask.php";

if (isset($_POST["creaTask"])) {
    $templateParams["errore"] = $dbh->creaTask($_POST["nome"], $_POST["descrizione"], $_POST["scadenza"], $_POST["priorita"], $_POST["colore"]);
    if ($templateParams["errore"] === true) {
        header("Location: listaTasks.php");
        exit();
    } else {
        $templateParams["errore"] = "Errore nella creazione del task.";
    }
}

require_once("../template/base.php");

?>