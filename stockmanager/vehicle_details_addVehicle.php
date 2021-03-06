<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
    </head>
<body>
        
<?php
    include("../config/stockmgrmenu.php");
 ?>
<style type="text/css">
    #vehicledisplaytb{
        width: 600px;
        height: 550px;
        }
    .btn{
        width: 200px;
    }
</style>

<div id="content">
        
        <div id ="top_section">

            <div id = "top_left_vehicle">  <!--add vehicle form -->
                <form method="post" name = "InputForm" onSubmit = "return validateform();" action="vehicle_details_addVehicle.php">
                     <div class="panel-heading-vehicle" align="center">Add Vehicle</div>
                    <table class="ui definition table"  id="vehicletb" border="0" width="800" height="400" >

                        <tr>
                            <td id="table_font">Vehicle Number</td>

                            <td>
                                <input type="text" id="vid" name="vehiclenumber"  class="form-control">
                            </td>

                        </tr>
                        <tr>
                            <td id="table_font">Capacity</td>

                            <td>
                                <input type="text" name="vehiclecapacity"  class="form-control">
                            </td>

                        </tr>

                        <tr>
                            <td id="table_font">Vehicle Type</td>

                            <td>
                                <select name="vehicletype" class="form-control">
                                <option>van</option>
                                <option>lorry</option>
                                </select>
                               
                            </td>
                        </tr>
                        <tr>

                            <td id="table_font">status</td>

                            <td>
                                <select name="status" class="form-control">
                                <option>0</option>
                                <option>1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2"><center><input type="submit" class="btn" name="VehicleInsert" value="Insert"/>
                    
                        </tr>
                    </table>
             </form>
    </div>
    <!---------------------------------------->
</div>
</div>
<div id="bottomvehicle">
    
    
</div>
       
<div id="footer">
        
</div>

<?php

if(isset($_POST["VehicleInsert"])){                //call to addVehicle method in Vehicle class
    include('vehicle.php');
    $myVehicle = new Vehicle();
    $myVehicle -> addVehicle();
    
}

?>

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






