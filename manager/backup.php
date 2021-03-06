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
    //manager menu
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">Backup</h4>
        </div>
        
    </div>
    <div class="row">
        <h3 align="center">You can take your database as a backup by clicking this button.</h3>
    </div>  
    </br>
    </br>
    </br>
    </br>
    <!-- button -->
    <div id="backup">
        <form method="post" action="getbackup.php"
        <center><button name="backup" id="buttonbackup"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Take Backup </button></center>
        </form> 
    </div>
    
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
