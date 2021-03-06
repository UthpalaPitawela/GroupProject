<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- header -->
    <title>Manager Admin</title>
    <!-- link css,bootstrap -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    
</head>

<body>

<!-- get manager's menu -->
<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">Manage Customer</h4>
        </div>
    </div>
    

        <!-- display new customers in a table-->
        <table class='table table-hover' >
            <tr bgcolor='#C0C0C0' width = '10px'>
                    <th >Customer ID </th>
                    <th >NIC </th>
                    <th >Full Name </th>
                    <th >Designation </th>
                    <th >Company Name </th>
                    <th >Address </th>
                    <th >e-mail </th>
                    <th >Mobile </th>
                    <th >Telephone </th>
                    <th colspan="2">Action</th>
                
                </tr>

        <?php
        //include database connection
        //include('database_connection.php');

        //select query for display
        $sql = "SELECT customer_id, nic, fullname, designation, companyname, address, email, mobile, tele FROM customer where status ='false'";
        $result = $dbcon->query($sql);
        while ($row = $result->fetch_assoc()) {
        ?>
            
            


            <tr>
                        <td><h6 align='center'><?php echo $row['customer_id'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['nic'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['fullname'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['designation'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['companyname'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['address'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['email'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['mobile'] ?></h6></td>
                        <td><h6 align='center'><?php echo $row['tele'] ?></h6></td>
                <td class="bt"><form method="get"><button type="button" name="accept" id="button" class="btn btn-info" onclick="location.href='ManageUser-Manage_Customer.php?cst_id=<?php echo $row['customer_id'] ?>'"><i class="fa fa-check" aria-hidden="true"></i></button></form></td>
                
                        <td class="bt"><button type="button" id="button" class="btn btn-success" value="Reject" onclick="location.href='ManageUser-Manage_Customer.php?customer_id=<?php echo $row['customer_id'] ?>'"><i class="fa fa-user-times" aria-hidden="true"></i></button></td>
            </tr>
        <?php } ?>
    </table>


<!-- code for delete customer from customer table-->
<?php
    if(isset($_GET['customer_id'])){

    $id = $_GET['customer_id'];
    $sql= "delete from customer where customer_id = '$id'";
    $result=mysqli_query($dbcon,$sql);

        if($result){
            echo'<script language ="javascript">';
            echo "swal({  title: 'Customer deleted successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Customer.php'});";
            echo'</script>';
            
            $to = $row['email'];
            $subject ='Regarding request to join with Priyantha Enterprises';
            $message ='accepted your request to join with us. Log in to view details. Thank you';
            $headers = 'From: Appareltech@priyantha.com' . "\r\n" .
                       'Reply-To: Appareltech@priyantha.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

             mail($to, $subject, $message, $headers); 
            
            }
        else{
            echo'<script language ="javascript">';
            echo "swal({  title: 'Error occurs while deleting!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Customer.php'});";
            echo'</script>';
            
            $to = $row['email'];
            $subject ='Regarding request to join with Priyantha Enterprises';
            $message ='Your request rejected';
            $headers = 'From: Appareltech@priyantha.com' . "\r\n" .
                       'Reply-To: Appareltech@priyantha.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

             mail($to, $subject, $message, $headers);
        }
    }
?>

<!-- code for insert customer to user table and update status-->
    <?php
    if(isset($_GET['cst_id'])){
    $cid=$_GET['cst_id'];

        $copy_query = "INSERT INTO user (user_id,username,password,accessLevel)
    SELECT customer.customer_id, customer.username, customer.password,0
    FROM customer
    WHERE customer_id=$cid";

        $update_query = "UPDATE customer SET status = 'true' WHERE customer_id=$cid";

        $result1=mysqli_query($dbcon,$copy_query);
        $result2=mysqli_query($dbcon,$update_query);

        if($result1 && $result2){
            echo'<script language ="javascript">';
            echo "swal({  title: 'Details of customer saved successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Customer.php'});";
            echo'</script>';
            
            
        }
        else{
            echo'<script language ="javascript">';
            echo "swal({  title: 'Error occurs while saving data!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Customer.php'});";
            echo'</script>';
        }
    }
    ?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>

</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
