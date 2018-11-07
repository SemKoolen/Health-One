<?php
    if(isset($_POST["add"])) {
        insert();
    } if (isset($_POST["update"])) {
        update();
    }
    function insert(){
        $db = new PDO("mysql:host=localhost;dbname=health_one","root", "root");
        $naam = $_POST["naam"];
        $beschrijving = $_POST["beschrijving"];
        $bijwerkingen = $_POST["bijwerkingen"];
        $vergoed = $_POST["vergoed"];
        $query = $db->prepare("INSERT INTO medicijnen(naam,beschrijving,bijwerkingen,vergoed) VALUES(:naam, :beschrijving, :bijwerkingen, :vergoed)");
        $query->bindParam("naam", $naam);
        $query->bindParam("beschrijving", $beschrijving);
        $query->bindParam("bijwerkingen", $bijwerkingen);
        $query->bindParam("vergoed", $vergoed);
        if($query->execute()) {
            echo "Succes";
        } else {
            echo "Error";
        }
    }

    function update(){
    $db = new PDO("mysql:host=localhost;dbname=health_one","root", "root");
    $query = $db->pepare("SELECT * FROM medicijnen WHERE id = '".$_GET["id"]."'");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $data) {
        $naam = $data["naam"];
        $beschrijvingen = $data["beschrijving"];
        $bijwerkingen = $data["bijwerking"];
        $vergoed = $data["vergoed"];
    }
}
?>
