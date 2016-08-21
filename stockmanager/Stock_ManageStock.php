<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>                        
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                    <h2>Page Heading here!</li></h2>
                </ul>
<div class = "panel">
        <div class="panel-heading"> Manage Stock</div>
            <div class="panel-body">
                <div id="manage_stock_content">
  
                    <div id ="manage_stock_top_section">
            
                        <div id = "manage_stock_top_left_section">
                            <form method="post">
                                <table border="0" >
                                    <tr></tr>
                                    <tr>
                                        
                                        <td id="table_font"  width="60%"> 
                                            Category Name   
                                        </td> 
                                        
                                        <td>
                                            
                                            <select name="categoryname">
                                                <option value="volvo">Machine</option>
                                                <option value="saab">Machine Spare Part</option>
                                                <option value="saab">Tool</option>
             
                                            </select><br><br>
              
                                        </td>
                                            
                                            
                                         
                                    </tr>
                                    <tr>
                                        
                                        <td id="table_font" width="55%">
                                            Item Name
                                        </td> 
                                        
                                        <td>
                                            <input type="text" class="form-control" name="itemname"><br><br>
                                        </td>
                                    </tr>
                                    
                                   
                                   <tr>
                                        
                                        <td id="table_font"  width="55%">
                                            Brand
                                        </td> 
                                          
                                        <td>
                                            <input type="text" class="form-control"  name="brand"><br><br>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        
                                        <td id="table_font" width="55%">
                                            Price
                                        </td> 
                                         
                                        <td>
                                            <br><br>
                                        </td>
                                    </tr>
                                    
                                     <tr>
                                        
                                        <td id="table_font" width="55%" align="right">
                                            Cost                            
                                        </td> 
                                         
                                        <td>
                                            <input type="text" class="form-control"  name="cost" ><br><br>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        
                                        <td id="table_font" width="55%" align="right" >
                                            Selling Price                
                                        </td> 
                                         
                                        <td>
                                            <input type="text" class="form-control" name="sellingprice" ><br><br>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        
                                        <td id="table_font" width="55%">
                                            Quantity
                                        </td> 
                                         
                                        <td>
                                            <input type="text" class="form-control" name="quantity" ><br><br>
                                        </td>
                                    </tr>
                                    
                                    
                                </table> 
                             
                        </div>
                        
                        <div id="manage_stock_top_right_section">
                            
                                 <input type="submit" id="button_effect" name="btnManageStockInsert" value="Insert"  /><br><br>
                                 <input type="submit" id="button_effect" name="btnManageStockSearch" value="Search" /><br><br>
                                 <input type="submit" id="button_effect" name="btnManageStockDelete" value="Delete" /><br><br>
                                 
                                 
                                 <button type="button" id="button_effect">Update</button> <br><br>
                                 <button type="button" id="button_effect">Clear</button> <br><br>
                                 <button type="button" id="button_effect">Refresh</button>
                            </form>
                            
                            <?php
                                
                                include ('Item.php');
                                if(isset($_POST['btnManageStockInsert'])){
                                    
                                    $itemname = $_POST['itemname'];
                                    $brand = $_POST['brand'];
                                    $sellingprice = $_POST['sellingprice'];
                                    $cost = $_POST['cost'];
                                    $categoryname = $_POST['categoryname'];
                                
                                    $quantity = $_POST['quantity'];
                                    $myItem = new Item();
                                    $myItem -> addItem($itemname, $brand,$sellingprice,$cost, $categoryname,$quantity );
                                }
                                
                                if(isset($_POST['btnManageStockDelete'])){
                                    $itemname = $_POST['itemname'];
                                    $myItem = new Item();
                                    $myItem -> deleteItem($itemname);
                                    }
                            
                            ?>
                        
                        </div>
                    </div>
                    
                    <div id="manage_stock_below_section">
                        <br><br>
                        <?php
                        
                            if(isset($_POST['btnManageStockSearch'])){
                                    
                                    $itemname = $_POST['itemname'];
                                    $myItem = new Item();
                                    $myItem -> searchItem($itemname);
                                    }
                            
                        ?>
                        
            
                    </div>
                </div>
             </div>
    </div>
        

    
    <div id="footer"></div>
</div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






