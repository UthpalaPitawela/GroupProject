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
            <div class="1">
                <h1 class="page-header">Customers</h1>
            </div>
            <div class="2">
                <form>
                    <div class="col-xs-3">
                        <input type="text" name="customer_id" placeholder="Search by id" class="form-control" size="35">
                    </div>
                    <div>
                        <button type="submit" id="button2" class="btn btn-default">Search</button>
                    </div>


                    <br>
            </div>
        </div>
        
    </div>
    <div class="row">
        <?php
            include('database_connection.php');

            $sql = "SELECT customer_id, nic, fullname, designation, companyname, address, email, mobile, tele FROM customer";
            $result = $dbcon->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-striped' style='border: solid 2px black;'>";
                echo"<tr>
                    <th style='border: solid 2px black;'>Customer ID </th>
                    <th style='border: solid 2px black;'>NIC </th>
                    <th style='border: solid 2px black;'>Full Name </th>
                    <th style='border: solid 2px black;'>Designation </th>
                    <th style='border: solid 2px black;'>Company Name </th>
                    <th style='border: solid 2px black;'>Address </th>
                    <th style='border: solid 2px black;'>e-mail </th>
                    <th style='border: solid 2px black;'>Mobile </th>
                    <th style='border: solid 2px black;'>Telephone </th>
                </tr>";

                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td style='border: solid 2px black;'>" . $row["customer_id"]. "</td>
                        <td style='border: solid 2px black;'>" . $row["nic"]. "</td>
                        <td style='border: solid 2px black;'>" . $row["fullname"]. "</td>
                        <td style='border: solid 2px black;'>" . $row["designation"]. "</td>
                        <td style='border: solid 2px black;'>" . $row["companyname"]. "</td>
                        <td style='border: solid 2px black;'>" . $row["address"]. "</td>
                        <td style='border: solid 2px black;'>" . $row["email"]. "</td>
                        <td style='border: solid 2px black;'>" . $row["mobile"]. "</td>
                        <td style='border: solid 2px black;'>" . $row["tele"]. "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            $dbcon->close();

        ?>

    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php

