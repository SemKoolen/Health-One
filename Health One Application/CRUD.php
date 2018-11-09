<?php
    if(isset($_POST["add"])) {
        insert();
    }
    if (isset($_POST["update"])) {
        $db = new PDO("mysql:host=localhost;dbname=health_one","root", "root");
        $naam = $_POST["naam"];
        $beschrijving = $_POST["beschrijving"];
        $bijwerkingen = $_POST["bijwerkingen"];
        $vergoed = $_POST["vergoed"];
        $query = $db->prepare("UPDATE medicijnen SET naam = :naam, 
                                                               beschrijving = :beschrijving, 
                                                               bijwerkingen = :bijwerkingen, 
                                                               vergoed = :vergoed 
                                        WHERE id = :id)");
        $query->bindParam("naam", $naam);
        $query->bindParam("beschrijving", $beschrijving);
        $query->bindParam("bijwerkingen", $bijwerkingen);
        $query->bindParam("vergoed", $vergoed);
        $query->bindParam("id", $_POST["rowid"]);

        if($query->execute()) {
            echo "Succes";
        } else {
            echo "Error";
        }
    }
    if (isset($_POST["load"])){
        $db = new PDO("mysql:host=localhost;dbname=health_one","root", "root");
        $query = $db->prepare("SELECT * FROM medicijnen WHERE id = :id");
        $query->bindParam("id", $_POST["rowid"]);
        $id = $_POST["rowid"];
        echo "$id";
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $data){
            $naam = $data["naam"];
            $beschrijving = $data["beschrijving"];
            $bijwerkingen = $data["bijwerkingen"];
            $vergoed = $data["vergoed"];
            echo "$vergoed";
            if ($vergoed = 1) {$selected1 = "selected";
            } else {
                $selected2 = "selected";
            }
            echo "
            <div id=\"editEmployeeModal\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <form method=\"post\" action=\"medicijnen.php\">
                            <div class=\"modal-header\">
                                <h4 class=\"modal-title\">Klant aanpassen</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"form-group\">
                                    <label>Naam</label>
                                    <input type=\"text\" class=\"form-control\" required value='$naam' ?>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"comment\">Beschrijving</label>
                                    <textarea class=\"form-control\" rows=\"3\">$beschrijving</textarea>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"comment\">Bijwerkingen</label>
                                    <textarea class=\"form-control\" rows=\"3\">$bijwerkingen</textarea>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"sel1\" </label>
                                    <select class=\"form-control\">
                                        <option value=\"1\" $selected1>Ja</option>
                                        <option value=\"2\" $selected2>Nee</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                <input type=\"submit\" name=\"update\" class=\"btn btn-info\" value=\"Save\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            ";
            echo "<script>
                $('#editForm a')[0].click();
              </script>";
        }

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


?>
