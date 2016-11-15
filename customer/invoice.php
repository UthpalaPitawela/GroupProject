<?php
session_start();
?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/purchaseReport.css" type="text/css">
    <link rel="stylesheet" href="css/invoice.css" type="text/css">  
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h4>Your Purchase Invoice!</h4>
<?php
    include("dbConfig.php");
    
  ?>
    <table>
        <tr>
            <td>Company Name </td>
            <td><?php echo ' - '.$_SESSION['company']?></td>
        </tr>
        <tr>
            <td>Customer ID </td>
            <td><?php echo ' - '.$_SESSION['csid']?></td>
        </tr>
        <tr>
            <td>Customer Address </td>
            <td><?php echo ' - '.$_SESSION['add']?></td>
        </tr>
        <tr>
            <td>Email Address </td>
            <td><?php echo ' - '.$_SESSION['email']?></td>
        </tr>
    </table>
<!-- page content -->
<div class="center_col" role="main">
    <center>
        <h5>Invoice No. 
            <?php 
                $id = $_GET['p_id'];
                echo $id;
            ?></h5>
    </center>
    <table class="table table-hover">
        <tr>
            <th><center>Product ID</center></th>
            <th><center>Product Name</center></th>
            <th><center>Product Brand</center></th>
            <th><center>Quantity</center></th>
        </tr>
        
<?php
    $id = $_GET['p_id'];
    $sql= "select product_id,itemName,brand,quantity from item,order_items where item.item_id=order_items.product_id && order_id=$id";
    $result = $db->query($sql);
        
    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><center><?php echo $row['product_id'] ?></center></td>
                    <td><center><?php echo $row['itemName'] ?></center></td>
                    <td><center><?php echo $row['brand'] ?></center></td>
                    <td><center><?php echo $row['quantity'] ?></center></td>
                </tr>
                <?php } ?>

        
    </table>
</div>
    <div id="amount">
        <table>
        <tr>
            <td><p><b>Sub Total </b></p></td>
            <td><p align="right"><?php echo '10000.00'?></p></td>
        </tr>
        <tr>
            <td><p><b>Discount </b></p></td>
            <td><p align="right"><?php echo '1000.00'?></p></td>
        </tr>
        <tr>
            <td><p><b>Vat(%5) </b></p></td>
            <td><p align="right"><?php echo '450.00'?></p></td>
        </tr>
        <tr>
            <td><p><b>Grand Total </b></p></td>
            <td><p align="right"><?php echo '9450.00'?></p></td>
        </tr>
    </table>
    </div>
    
    <div id="contect">
        <table>
        <tr>
            <td colspan="2"><p><b><center>Contect Details </center></b></p></td>
        </tr>
        <tr>
            <td><p><b>PO Box </b></p></td>
            <td><p align="left">:- No 57, Borelesgamauwa, New road, Colombo 8</p></td>
        </tr>
        <tr>
            <td><p><b>Phone </b></p></td>
            <td><p align="left">:- 011-5555556</p></td>
        </tr>
        <tr>
            <td><p><b>Fax </b></p></td>
            <td><p align="left">:- 011-5555526</p></td>
        </tr>
        <tr>
            <td><p><b>Email </b></p></td>
            <td><p align="left">:- ga.kumara@priyantaent.com</p></td>
        </tr>
    </table>
    </div>
    <div id="note">
        <p><b><h5>NOTE :- </h5></b>option lets you add additional contextual notes to the invoices, for better clarity. Invoice Notes specific to each customer or subscription can be ... </p>
    </div>
    <div id="action">
        <button type="button" class="btn btn-primary">Print</button>
        <button type="button" class="btn btn-success">Reply vai Email</button>
    </div>
</div>
</body>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
  <!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
</html>
