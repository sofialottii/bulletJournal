<?php 

require_once("bootstrap.php");

$templateParams["titolo"] = "Pagina di diario";
$templateParams["nome"] = "formCreaDiario.php";

if(isset($_POST["crea"])){
    $titolo = $_POST["titolo"];
    $contenuto = $_POST["contenuto"] ?? "";
    $privacy = isset($_POST["privacy"]) ? "S" : "N"; // Se il checkbox è selezionato, privacy è "S", altrimenti "N"

    if($dbh->creaDiario($titolo, $contenuto, $privacy)){
        header("Location: index.php");
        exit();
    } else {
        echo "Errore nella creazione del diario.";
    }
} else {
    // Se non è stato inviato il modulo, mostra il form
    $templateParams["form"] = true;
}


require_once("../template/base.php");
?>