<?php

require_once("bootstrap.php");


$templateParams["titolo"] = "Crea nuova nota";
$templateParams["nome"] = "formCreaNota.php";

if (isset($_POST["crea"])) {
    $titolo = $_POST["titolo"];
    $contenuto = $_POST["contenuto"] ?? "";

    if ($dbh->creaNota($titolo, $contenuto)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Errore nella creazione della nota.";
    }
} else {
    // Se non è stato inviato il modulo, mostra il form
    $templateParams["form"] = true;
}

require_once("../template/base.php");

?>