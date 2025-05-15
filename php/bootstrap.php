<?php

require_once("../db/database.php");

$dbh = new DatabaseHelper("localhost", "root", "", "bullet_journal", 3306);
define("UPLOAD_DIR", __DIR__ . "/../uploads/");

?>