
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
        
<?php
    include("../config/stockmgrmenu.php");
   // require("database_connection.php");
?>
   
<style type="text/css">
    #driverdisplaytb{
        width: 600px;
        height: 550px;}
    .error{
        color: firebrick;
        font-size:10px;
        font-style: oblique;
        }
    .btn{
        width: 200px;
    }
</style>
</head>

<body>
<?php
$error=FALSE;
$Dnameerr=$Licenceerr=$Addresserr=$Vehicleerr=$Mobileerr="";
    
if(isset($_POST['DriverInsert'])){
    
    if(empty($_POST['drivername'])){
        $Dnameerr="<br>drivername is reqired.";
        $error=TRUE;
    }else{
         $DriverName = $_POST["drivername"];
    }
    
    if(empty($_POST['licencenumber'])){
        $Licenceerr="<br>LicenceNo is reqired.";
        $error=TRUE;
    }else{
         $LicenceNumber = $_POST["licencenumber"];
    }
    
    if(empty($_POST['address'])){
        $Addresserr="<br>Address is reqired.";
        $error=TRUE;
    }else{
         $Address=$_POST["address"];
    }
    if(empty($_POST['vehicleID'])){
        $Vehicleerr="<br>Can't assign a Driver.";
        $error=TRUE;
        
       }else{
        $VehicleId=$_POST["vehicleID"];
    }
     if(empty($_POST['mobileNo'])){
        $Mobileerr="<br>MobileNo is required.";
        $error=TRUE;
        
       }else{
         $MobileNo=$_POST["mobileNo"]; 
     }  
        
        
    if($error==FALSE){
        $sqlinsert="INSERT INTO driver(driverName,LicenceNo,driverAddress,vechicle_id,mobileNo)
        VALUES('".$DriverName."','".$LicenceNumber."','".$Address."','".$VehicleId."','".$MobileNo."')";
        $result=mysqli_query($dbcon,$sqlinsert);
            if($result){
                echo'<script language ="javascript">';
                    echo "swal({  title: 'Driver Inserted successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                echo'</script>';}
            else{
                echo'<script language ="javascript">';
                    echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                echo'</script>';
            }
    
        $sqlupdate="UPDATE vehicle SET status=1 WHERE vehicle_id=$VehicleId"; 
        $result1=mysqli_query($dbcon,$sqlupdate);}
    /*
       $sqlinsert1="INSERT INTO drivercontact(contactNo) VALUES('".$Mobile1."')";
        $result1=mysqli_query($dbcon,$sqlinsert1);
        if(!$result1){
            echo "error";}*/
}

?>


</br></br>

<div id="content">
        <div id ="top_section">

            <div id = "top_left_driver">
                <div class="panel-heading-driver" align="center">Add Driver</div>
                <form class="ui form" name = "InputForm" onSubmit = "return validateform();" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?> ">
                    <table class="ui definition table" id="drivertb" border="0" width="800" height="400" >

                        <tr>

                            <td id="table_font">Driver Name<span class="error"><?php echo $Dnameerr;?></span> </td>

                            <td>
                                <input type="text" name="drivername"  class="form-control">
                            </td>
                        </tr>
                        <tr>

                            <td id="table_font">Licence Number<span class="error"><?php echo $Licenceerr;?></span></td>

                            <td>
                                <input type="text" id="nic" name="licencenumber"  class="form-control">
                            </td>
                        </tr>
                        <tr>
                        <td id="table_font" align="center">MobileNo<span class="error"><?php echo $Mobileerr;?></span></td>
                        <td>
                            <input type="text" id="mob"  name="mobileNo"  class="form-control" >
                        </td>
                        </tr>
                        <tr>

                            <td id="table_font">Address<span class="error"><?php echo $Addresserr;?></span></td>

                            <td>
                                <input type="text" name="address"  class="form-control" >
                            </td>
                        </tr>
                        <tr>

                            <td id="table_font">Vehicle ID<span class="error"><?php echo $Vehicleerr;?></span></td>

                            <td>
                                <select name="vehicleID" class="form-control">
                                    <?php
                                        $sql="SELECT vehicle_id FROM vehicle WHERE status=0 ";
                                        $result=mysqli_query($dbcon,$sql);
                                            while($res=mysqli_fetch_array($result)){
                                                echo("<option value = '" . $res['vehicle_id'] . "'>" . $res['vehicle_id'] . "</option>");
                                        
                                            }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2"><center><input type="submit"  class="btn" name="DriverInsert" value="ADD"/>
                        
                        </tr>


                    </table>
             
                
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
function validateform(){
  
    var RegEx =/^[0-9]{9}[VX]$/;
     
    if(!RegEx.test($("#nic").val())){
                window.alert("Please enter valid NIC No.");
                nic.focus();
		    	return false;
            }
    
    var phoneno =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    
     if(!phoneno.test($("#mob").val()))  
        {  
        window.alert("wrong mobile phone no");  
        return false;   
        }  
      else{
          return true;
      }
    
    
}
</script>
<div id="bottomdriver">
    
</div>
       
<div id="footer">
        
</div>


<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
<script type="text/javascript" src="js/settings.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>





