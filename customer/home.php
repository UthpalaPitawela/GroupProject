<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css" type="text/css">
  </head>

  <body class="nav-md">
    
  <?php
    session_start();
    include("../config/customermenu.php");  
      
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1 align="center">Welcome to Online Shop!</h1>
    <div id = info>
                <div class="panel panel-primary">
                    <div class="panel-heading" align="center">Here you are!</div>
                    <div class="panel-body">
                        <table>
                            <form method="get">
                                <tr>
                                    <td><h3>Customer name :
                                        <?php
                                        echo $_SESSION['fname'];
                                        ?>
                                    </h3></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><h3>Customer ID :
                                        <?php
                                        echo $_SESSION['csid'];
                                        ?>
                                        </h3></td>
                                </tr>
                                <tr>
                                    <td><h3>Company name :
                                        <?php
                                        echo $_SESSION['company'];
                                        ?>
                                        </h3></td>
                                    <td></td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
        </div>

    <div id="dashbutton">
         <a href="#" class="myButton">Make a Purchase</a>
         <a href="#" class="myButton">Order Rent Item</a>
         <a href="#" class="myButton">Request Delivery</a>
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
