<?php

class DatabaseHelper {

    private $db;
    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if($this->db->connect_error){
            die("Connesione fallita al db");
        }
    }

    /* getters */

    public function getNoteOggi(){
        $stmt = $this->db->prepare("SELECT * FROM note WHERE CreatoIl = CURDATE()");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getNote(){
        $stmt = $this->db->prepare("SELECT * FROM note");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDiarioOggi(){
        $stmt = $this->db->prepare("SELECT * FROM diario WHERE CreatoIl = CURDATE()");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDiario(){
        $stmt = $this->db->prepare("SELECT * FROM diario");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTasks(){
        $stmt = $this->db->prepare("SELECT * FROM tasks");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTasksScadenzaSettimana(){
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE DataScadenza BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*creazione */

    public function creaNota($titolo, $contenuto){
        $stmt = $this->db->prepare("INSERT INTO note (Titolo, Contenuto, CreatoIl) VALUES (?, ?, CURDATE())");
        $stmt->bind_param("ss", $titolo, $contenuto);
        return $stmt->execute();
    }

    public function creaDiario($titolo,$contenuto,$passwordAttiva = "N"){ 
        $stmt = $this->db->prepare("INSERT INTO diario (Titolo, Descrizione, PasswordAttiva) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $titolo, $contenuto, $passwordAttiva);
        return $stmt->execute();
    }

    public function creaTask($nome, $descrizione, $dataInizio = Null, $dataScadenza, $stato = "In Corso", $priorita = "Bassa", $colore = "#FFFFFF"){
        $stmt = $this->db->prepare("INSERT INTO tasks (Nome, Descrizione, DataInizio, DataScadenza, Stato, Priorita, Colore)
        VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $nome, $descrizione, $dataInizio, $dataScadenza, $stato, $priorita, $colore);
        return $stmt->execute();
    }

    /* dati per statistiche */
    public function getNoteTotali(){
        $stmt = $this->db->prepare("SELECT COUNT(*) as Totale FROM note");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function getDiarioTotali(){
        $stmt = $this->db->prepare("SELECT COUNT(*) as Totale FROM diario");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function getTasksTotali(){
        $stmt = $this->db->prepare("SELECT COUNT(*) as Totale FROM tasks");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function getTasksTotaliCompletati(){
        $stmt = $this->db->prepare("SELECT COUNT(*) as Totale FROM tasks WHERE Stato = 'Completato'");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function getTasksScadenzaSettimanaTotale(){
        $stmt = $this->db->prepare("SELECT COUNT(*) as Totale FROM tasks WHERE DataScadenza BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}

?>