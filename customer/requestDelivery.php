<?php
session_start();
include("dbConfig.php");
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
    <link rel="stylesheet" href="css/requestDelivery.css" type="text/css">
       <script src="js/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="js/sweetalert.css">
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>
    
  <?php
    $id = $_GET['p_id'];
    $c_id = $_SESSION['csid'];
    $com = $_SESSION['company'];
  if (isset($_POST['btn'])){
        $add = $_POST['add'];
        $date = $_POST['date'];
        $tele = $_POST['tele'];
        $bank = $_POST['bank'];
        $branch = $_POST['branch'];
        $vid = $_POST['vid'];
        $amount = $_POST['amount'];   
        $status = "Not approved"; 
    
    $sql="INSERT INTO deliveryrequest (cid,poid,company,address,date,telephone,bank,branch,voucher,amount,status) VALUES ('$c_id','$id','$com','$add','$date','$tele','$bank','$branch','$vid','$amount','$status')";
    

if ($db->query($sql) === TRUE) {
            echo'<script language ="javascript">';
                    echo "swal({  title: 'We will give your account authentication soon! Thank you', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='purchaseReport.php'});";
                echo'</script>';
        } else {
             echo'<script language ="javascript">';
                    echo "swal({  title: 'Error!', text: 'You have already requested a delivery for order No. $id ', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='purchaseReport.php'});";
                echo'</script>';
        }

    mysqli_close($db);
    }
    ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1 class="hfont">Request Your Delivery Here!</h1>

    <div id="delivery">
        <form method="post" name = "InputForm" onSubmit = "return validateform();">
         
            <table class="table table-hover">
                <tr>
                    <td>P/O ID</td>
                    <td><input type="text" class="form-control" name="poid" value="<?php echo $id;?>" disabled></td>
                </tr> 
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" class="form-control" name="company" value="<?php echo $com?>" disabled></td>
                </tr>
                <tr>
                    <td>Delivery Address</td>
                    <td><input type="text" class="form-control" name="add"  required></td>
                </tr>
                <tr>
                    <td>Delivery Date</td>
                    <td><input type="date" class="form-control" name="date"  required></td>
                </tr>
                <tr>
                    <td>Telephone No for Delivery</td>
                    <td><input type="text" id="#mob" class="form-control"  name="tele" required></td>
                </tr>
                <tr>
                    <td colspan="2"><h4 align="center">Bank Payment Details</h4> </td>
                </tr>
                <tr>
                    <td>Bank Name</td>
                    <td><input type="text" class="form-control" name="bank"  required></td>
                </tr> 
                <tr>
                    <td>Branch Name</td>
                    <td><input type="text" class="form-control" name="branch"  required></td>
                </tr>
                <tr>
                    <td>Deposit Voucher ID</td>
                    <td><input type="text" class="form-control" name="vid"  required></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="text" class="form-control" name="amount"  requirext></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" class="btn btn-success" name="btn" value="Request Delivery"></center></td>
                </tr>
            </table>

        </form>
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
    <script type="text/javascript">
    function validateform(){
      var phone=document.InputForm.mob;
    var phoneno =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (phone.value == "")
			{
		    	window.alert("Please enter your mobile No.");
		         phone.focus();
		    	return false;
			}
    else if(!phoneno.test($("#mob").val()))  
        {  
        window.alert("wrong mobile phone no");  
        return false;   
        }  
    else{
          return true;
      }
    
    }
        </script>
</html>
