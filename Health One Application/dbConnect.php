<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=health_one","root", "root");
    } catch(PDOException $e) {
        die("Error!: Could not connect to database");
    }

?>