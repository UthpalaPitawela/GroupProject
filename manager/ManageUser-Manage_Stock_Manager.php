<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
    <title>Manager Admin</title>
    <!-- css files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    
</head>

<body>

<?php
include ("../config/managermenu.php");
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">Manage Admin</h4>
        </div>

    </div>
    <div class="row1">
        <!-- form -->
        <form name="form1"  method="POST" action="ManageUser-Manage_Stock_Manager.php">
            <table  class="ui definition table"  border="0" class="tb1">
                <tr></tr>
                <tr>
                    <td id="table-font" width="60%">User ID*</td>
                    <td><input id="input1" type="text" name="userid" class="form-control" required></td>
                </tr>
                <tr>
                    <td id="table-font" width="60%">User name*</td>
                    <td><input id="input1" type="text" name="username" class="form-control" required></td>
                </tr>
                
                <tr>
                    <td id="table-font" width="60%">password*</td>
                    <td><input id="input1" type="password" name="password" class="form-control" required></td>
                </tr>
                <tr>
                    <td id="table-font" width="60%">Confirm password*</td>
                    <td><input id="input1" type="password" name="cpassword" class="form-control" required></td>
                </tr>
                <br><br>
                <tr>
                    <td id="table-font" width="60%">Access level</td>
                    <td>
                        <select class="form-control" name="acclevel" id="acclevel">
                            <option type="text" value="1">Manager</option>
                            <option type="text" value="2">Stock Manager</option>
                        </select>
                    
                    </td>
                </tr>
            </table>
            <br><br><br>
            
                      <input type="submit" id="button1"  name="add" value="Add"/>
			
             <br><br><br>
        </form>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>

    <?php
//get database connection
//include('database_connection.php');
//define variables
if(isset($_POST["add"])){
    $userid=$_POST['userid'];
    $usern=$_POST['username'];
    $pwd1=$_POST['password'];
    $pwd=sha1($pwd1);
    $cpwd=$_POST['cpassword'];
    $al=$_POST['acclevel'];

    $sql = "INSERT INTO user(user_id,username,password,accessLevel) VALUES ('$userid','$usern', '$pwd', '$al')";
    
    if($pwd1 == $cpwd){
        if (mysqli_query($dbcon, $sql) == TRUE){
            echo "<script>";
            echo "swal({  title: 'successfully added', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Stock_Manager.php'});";
            echo "</script>";
            header("location:ManageUser-Manage_Stock_Manager.php");
        }
        else{
           echo'<script language ="javascript">';
            echo "swal({  title: 'Error occurs while inserting data!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Stock_Manager.php'});";
            echo'</script>';
        }
    }
    else{
       echo'<script language ="javascript">';
        echo "swal({  title: 'Password not matching!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Stock_Manager.php'});";
        echo'</script>';
    }
    
    mysqli_close($dbcon);
}

?>
    
<!-- include js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
