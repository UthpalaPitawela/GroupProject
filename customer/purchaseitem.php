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
  </head>

  <body class="nav-md">
    
  <?php
    include("dbConfig.php");
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1 class="hfont">Purchased Items</h1>
    <center>
        <h3>Invoice No. 
            <?php 
                $id = $_GET['p_id'];
                echo $id;
            ?></h3>
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
    $sql= "select * from order_items where order_id = '$id'";
    $result = $db->query($sql);
        
    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><center><?php echo $row['product_id'] ?></center></td>
                    <td><center><?php echo 'name' ?></center></td>
                    <td><center><?php echo 'brand' ?></center></td>
                    <td><center><?php echo $row['quantity'] ?></center></td>
                </tr>
                <?php } ?>

        
    </table>
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
