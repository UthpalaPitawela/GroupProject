<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Supplier</h1>
        </div>
        
    </div>
    <div class="row">
        <?php
        $servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
        $username = "b477c41467c518";
        $password = "955eff62";
        $dbname = "apperaltech";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT supplier_id, name, email, address FROM supplier";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table' style='border: solid 2px black;'>";
            echo"<tr>
                <th style='border: solid 2px black;'>Supplier ID </th>
                <th style='border: solid 2px black;'>Name </th>
                <th style='border: solid 2px black;'>e-mail </th>
                <th style='border: solid 2px black;'>Address </th>
            </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td style='border: solid 2px black;'>" . $row["supplier_id"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["name"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["email"]. "</td>
                    <td style='border: solid 2px black;'>" . $row["address"]. "</td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();

        ?>

        <div id="content">
        <div id="top4">
            <tr>
                <td>
                    <input type="text" name="Supplier ID" class="form-control" placeholder="Search by ID">
                </td>
            </tr>

            <button type="button" id="button" class="btn btn-default btn-lg active">Search</button>

	    </div>
        
        <div id="bottom4">
            <table class="table">
                <tr>
                    <th>Supplier ID</th>
                    <th>Supplier Name</th>
                    <th>Company</th>
                    <th>TP Number</th>
                    <th>Address</th>
                    <th>e-mail address</th>
                </tr>
            </table>
        </div>
            
    </div>
    
    
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
