<?php

class DatabaseHelper {

    private $db;
    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if($this->db->connect_error){
            die("Connesione fallita al db");
        }
    }

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

    public function getTasksScadenzaSettimana(){
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE DataScadenza BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}

?>