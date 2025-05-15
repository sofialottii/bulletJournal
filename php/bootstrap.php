<?php

require_once("../db/database.php");

$dbh = new DatabaseHelper("localhost", "root", "", "bulletJournalDatabase", 3306);
define("UPLOAD_DIR", __DIR__ . "/../uploads/");

?>