<?php
    if(isset($_POST["add"])) {
        insert();
    }

    if (isset($_GET["delete"])) {
        $db = new PDO("mysql:host=localhost;dbname=health_one1", "root", "root");
        $id = $_GET["id"];
        $query = $db->prepare("DELETE FROM medicijnen WHERE id = $id");
        $query->bindParam("id", $id);
        $query->execute();
    }


    global $delete;
    function returnDelete(){
        global $delete;
        return $delete;
    }

    if (isset($_POST["loadDelete"])) {
        $db = new PDO("mysql:host=localhost;dbname=health_one1", "root", "root");
        $query = $db->prepare("SELECT * FROM medicijnen WHERE id = :id");
        $query->bindParam("id", $_POST["deleteid"]);
        $id = $_POST["deleteid"];
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $data) {
            $naam = $data["naam"];
            global $delete;
            $delete = "
                        <div id=\"deleteEmployeeModal\" class=\"modal fade\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <form method='get'>
                                        <div class=\"modal-header\">
                                            <input hidden type='text' name='id' required value='$id'>
                                            <h4 class=\"modal-title\">Medicijn verwijderen</h4>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>Weet je zeker dat je het medicijn: $naam wilt verwijderen?</p>
                                            <p class=\"text-warning\"><small>Deze actie kan niet ongedaan worden</small></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                            <input type=\"submit\" name='delete' class=\"btn btn-danger\" value=\"Delete\">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <script>
                        $('#deleteLink$id')[0].click();
                        </script>";
        }
    }

    if (isset($_GET["update"])) {
        $db = new PDO("mysql:host=localhost;dbname=health_one1", "root", "root");
        $naam = $_GET["naam"];
        $beschrijving = $_GET["beschrijving"];
        $bijwerkingen = $_GET["bijwerkingen"];
        $vergoed = $_GET["vergoed"];
        $id = $_GET["id"];

        $query = $db->prepare("UPDATE medicijnen SET naam='$naam', beschrijving = '$beschrijving', bijwerkingen ='$bijwerkingen', vergoed ='$vergoed' WHERE id = $id");
        $query->bindParam("naam", $naam);
        $query->bindParam("beschrijving", $beschrijving);
        $query->bindParam("bijwerkingen", $bijwerkingen);
        $query->bindParam("vergoed", $vergoed);
        $query->bindParam("id", $id);
        $query->execute();
    }

    global $string;
    function returnString(){
        global $string;
        return $string;
    }

    if (isset($_POST["loadForm"])){
        $db = new PDO("mysql:host=localhost;dbname=health_one1","root", "root");
        $query = $db->prepare("SELECT * FROM medicijnen WHERE id = :id");
        $query->bindParam("id", $_POST["editid"]);
        $id = $_POST["editid"];
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $data){
            $naam = $data["naam"];
            $beschrijving = $data["beschrijving"];
            $bijwerkingen = $data["bijwerkingen"];
            $vergoed = $data["vergoed"];
            global $selected1;
            global $selected2;
            if ($vergoed == 1) {
                $selected1 = "selected";
            } else if($vergoed == 2) {
                $selected2 = "selected";
            }
            global $string;
            $string = "
            <div id=\"editEmployeeModal\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <form method=\"get\">
                            <div class=\"modal-header\">
                                <h4 class=\"modal-title\">Klant aanpassen</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"form-group\">
                                    <label>Naam</label>
                                    <input hidden type='text' name='id' required value='$id'>
                                    <input type=\"text\" class=\"form-control\" name='naam' required value='$naam'>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"comment\">Beschrijving</label>
                                    <textarea class=\"form-control\" rows=\"3\" name='beschrijving'>$beschrijving</textarea>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"comment\">Bijwerkingen</label>
                                    <textarea class=\"form-control\" rows=\"3\" name='bijwerkingen'>$bijwerkingen</textarea>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"sel1\" </label>
                                    <select class=\"form-control\" name='vergoed'>
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
            
            <script>
                $('#editLink$id')[0].click();
              </script>";
        }
    }

    function insert(){
        $db = new PDO("mysql:host=localhost;dbname=health_one1","root", "root");
        $naam = $_POST["naam"];
        $beschrijving = $_POST["beschrijving"];
        $bijwerkingen = $_POST["bijwerkingen"];
        $vergoed = $_POST["vergoed"];
        $query = $db->prepare("INSERT INTO medicijnen(naam,beschrijving,bijwerkingen,vergoed) VALUES(:naam, :beschrijving, :bijwerkingen, :vergoed)");
        $query->bindParam("naam", $naam);
        $query->bindParam("beschrijving", $beschrijving);
        $query->bindParam("bijwerkingen", $bijwerkingen);
        $query->bindParam("vergoed", $vergoed);
        $query->execute();
    }


?>
