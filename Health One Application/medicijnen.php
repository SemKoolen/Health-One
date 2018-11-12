<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="assets/fonts/varela-round.css">
    <link rel="stylesheet" href="assets/icons/material-icons.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/crud.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/checkboxes.js"></script>

</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">HealthOne</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="patients.php">Klanten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artsen.php">Artsen</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Medicijnen <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="index.php">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Uit</button>
            </form>
        </div>
    </nav>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Medicijnen<b> beheren</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Medicijn toevoegen</span></a>
                    <a hidden href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Verwijder</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th class="text-center">
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                </th>
                <th>ID</th>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>bijwerkingen</th>
                <th class="text-center">Vergoed?</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include("dbConnect.php");
            include("CRUD.php");
            $query = $db->prepare("SELECT * FROM medicijnen");
            $query->execute();
            $counter = 0;
            $result = $query->fetchAll (PDO::FETCH_ASSOC);
            foreach($result as &$data) {
                $counter++;
                $checkbox = $data["id"];
                echo "<tr>";
                echo "<td class='text-center'>
                          <span class=\"custom-checkbox\">
                          <input type=\"checkbox\" id=\"$checkbox\" name=\"options[]\" value=\"1\">
                              <label for=\"$checkbox\"></label>
                          </span>
                          </td>";
                echo "<td>" . $data["id"] . "</td>";
                $id = $data["id"];
                echo "<td>" . $data["naam"] . "</td>";
                echo "<td>" . $data["beschrijving"] . "</td>";
                echo "<td>" . $data["bijwerkingen"] . "</td>";
                if ($data["vergoed"] == 1) {
                    echo "<td class='text-center'>Ja</td>";
                } else if ($data["vergoed"] == 2){
                    echo "<td class='text-center'>Nee</td>";
                }
                echo "<td class='crudforms'>
                          <form method='post' class='form1'>
                             <input type='submit' name='loadForm' value='&#xE254' data-toggle='tooltip' title='Edit' class='material-icons edit'>    
                             <a hidden href='#editEmployeeModal' id='editLink$id' class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a> 
                             <input type='text' name='editid' value='$id' hidden>   
                          </form>  
                          <form method='post'>
                             <input type='submit' name='loadDelete' value='&#xE872' data-toggle='tooltip' title='Delete' class='material-icons delete'>       
                             <a hidden href='#deleteEmployeeModal' id='deleteLink$id' class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                             <input type='text' name='deleteid' value='$id' hidden> 
                          </form>  
                      </td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <div class="clearfix">
            <?php echo "<div class=\"hint-text\">Showing <b>$counter</b> out of <b>$counter</b> entries</div>"?>
        </div>
    </div>
</div>
<?php if (isset($_POST["loadForm"])){ $string = returnString(); echo "$string";}?>
<?php if (isset($_POST["loadDelete"])){ $delete = returnDelete(); echo "$delete";}?>
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="">
                <div class="modal-header">
                    <h4 class="modal-title">Medicijn toevoegen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Naam</label>
                        <input type="text" name="naam" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Beschrijving</label>
                        <textarea class="form-control" rows="3" name="beschrijving"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="comment">Bijwerkingen</label>
                        <textarea class="form-control" rows="3" name="bijwerkingen"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Vergoed?</label>
                        <select class="form-control" name="vergoed">
                            <option value="1">Ja</option>
                            <option value="2">Nee</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" name="add" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>