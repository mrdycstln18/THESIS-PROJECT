<?php  
    //include ('config.php'); 
    $sales_number = $client_name = $item_desc_and_title = $costing_run = $finishing_required = $packaging_required = $date_to_warehouse = $requested_delivery = $quantity = $size = $pages = $pages = $paper = $remarks = "";
    $sales_numberErr = $client_nameErr = $item_desc_and_titleErr = $costing_runErr = $finishing_requiredErr = $packaging_requiredErr = $date_to_warehouseErr = $requested_deliveryErr = $quantityErr = $sizeErr = $pagesErr = $pagesErr = $paperErr = $remarksErr = "";
                        if(isset($_POST['submit'])){

                        if(empty ($_POST["sales_number"])){
                            $sales_numberErr = "Required Field";   
                            }
                        else{
                            $sales_number = $_POST["sales_number"];
                        }
                        if(empty ($_POST["client_name"])){
                            $client_nameErr = "Required Field";   
                            }
                        else{
                            $client_name = $_POST["client_name"];
                        }
                        if(empty ($_POST["item_desc_and_title"])){
                            $item_desc_and_titleErr = "Required Field";    
                            }
                        else{
                            $item_desc_and_title = $_POST["item_desc_and_title"];
                        }
                        if(empty ($_POST["costing_run"])){
                            $costing_runErr = "Required Field";    
                            }
                        else{
                            $costing_run = $_POST["costing_run"];
                        }
                        if(empty ($_POST["finishing_required"])){
                            $finishing_requiredErr = "Required Field";    
                            }
                        else{
                            $finishing_required = $_POST["finishing_required"];
                        }
                        if(empty ($_POST["packaging_required"])){
                            $packaging_requiredErr = "Required Field";    
                            }
                        else{
                            $packaging_required = $_POST["packaging_required"];
                        }
                        if(empty ($_POST["date_to_warehouse"])){
                            $date_to_warehouseErr = "Required Field";    
                            }
                        else{
                            $date_to_warehouse = $_POST["date_to_warehouse"];
                        }
                        if(empty ($_POST["requested_delivery"])){
                            $requested_deliveryErr = "Required Field";    
                            }
                        else{
                            $requested_delivery = $_POST["requested_delivery"];
                        }
                        if(empty ($_POST["quantity"])){
                            $quantityErr = "Required Field"; 
                            }
                        else{
                            $quantity = $_POST["quantity"];
                        }
                        if(empty ($_POST["size"])){
                            $sizeErr = "Required Field"; 
                            }
                        else{
                            $size = $_POST["size"];
                        }
                        if(empty ($_POST["pages"])){
                            $pagesErr = "Required Field"; 
                            }
                        else{
                            $pages = $_POST["pages"];
                        }
                        if(empty ($_POST["paper"])){
                            $paperErr = "Required Field"; 
                            }
                        else{
                            $paper = $_POST["paper"];
                        }
                        if(empty ($_POST["remarks"])){
                            $remarksErr = "Required Field"; 
                            }
                        else{
                            $remarks = $_POST["remarks"];
                        }
                    }

                    if($sales_number && $client_name && $item_desc_and_title && $costing_run && $finishing_required && $packaging_required && $date_to_warehouse && $requested_delivery && $quantity && $size && $pages && $pages && $paper && $remarks){
                       $check_sales_number= mysqli_query($connections, "SELECT * FROM job_order WHERE sales_number='$sales_number'");
                                        $check_sales_number_row = mysqli_num_rows($check_sales_number);
                                        if($check_sales_number_row > 0){
                                          echo "<script language='JavaScript'>alert('not registered!') </script>";
                                          echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                                        $sales_numberErr = "Sales Number Already Registered!";
                                        }
                            else{
                        
                       mysqli_query($connections, "INSERT INTO job_order(sales_number,client_name,item_desc_and_title,costing_run,finishing_required,packaging_required,date_to_warehouse,requested_delivery,quantity,size,pages,pages,paper,remarks) VALUES ('$sales_number','$client_name','$item_desc_and_title','$costing_run','$finishing_required','$packaging_required','$date_to_warehouse','$requested_delivery','$quantity','$size','$pages','$pages','$paper','$remarks')");

                       echo "<script language='JavaScript'>alert('New Record has benn successfully added!') </script>";
                       echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                   
                   }
                 }
                   ?>
 <style>
                        .error{
                            color:red;
                            font-size: 10px;
                        }
                        </style>
  
    
    <!-- OperatorModal -->
    <div id="AddJobOrder" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
      <i class="#"></i><span><h2>&nbsp Add Job Order</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="720">
        <tr>
          <td colspan="2"><input type="text" placeholder="Sales No.:" value = "<?php  //echo $first_name; ?>" name="sales_number" class="form-control"><span class="error"><?php echo $sales_numberErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Client Name:" value = "<?php  //echo $first_name; ?>" name="client_name" class="form-control"><span class="error"><?php echo $client_nameErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Item Description and Title:" value = "<?php  //echo $first_name; ?>" name="item_desc_and_title" class="form-control"><span class="error"><?php echo $item_desc_and_titleErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Costing Based on Machine run by:" value = "<?php  //echo $first_name; ?>" name="costing_run" class="form-control"><span class="error"><?php echo $costing_runErr; ?> </span></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Finishing required:" value = "<?php  //echo $first_name; ?>" name="finishing_required" class="form-control"><span class="error"><?php echo $finishing_requiredErr; ?> </span></td>
          <td><input type="text" placeholder="Packaging required:" value = "<?php  //echo $first_name; ?>" name="packaging_required" class="form-control"><span class="error"><?php echo $packaging_requiredErr; ?> </span></td>
        </tr>
        <tr>
          <td><label>Estimate Transmittal Data to Warehouse:</label><input type="date" placeholder="Estimate Transmittal Data to Warehouse: " value = "<?php  //echo $first_name; ?>" name="date_to_warehouse" class="form-control"><span class="error"><?php echo $date_to_warehouseErr; ?></span></td>
          <td><label>Client Requested Delivery Date:</label><input type="date" placeholder="Client Requested Delivery Date: " value = "<?php  //echo $first_name; ?>" name="requested_delivery" class="form-control"><span class="error"><?php echo $requested_deliveryErr; ?></span></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Quantity:" value = "<?php  //echo $first_name; ?>" name="quantity" class="form-control"><span class="error"><?php echo $quantityErr; ?> </span></td>
          <td><input type="text" placeholder="Size of Final Output:" value = "<?php  //echo $first_name; ?>" name="size" class="form-control"><span class="error"><?php echo $sizeErr; ?> </span></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="No. of Pages:" value = "<?php  //echo $first_name; ?>" name="pages" class="form-control"><span class="error"><?php echo $pagesErr; ?> </span></td>
          <td><input type="text" placeholder="Paper to be used:" value = "<?php  //echo $first_name; ?>" name="paper" class="form-control"><span class="error"><?php echo $paperErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><textarea rows="5" placeholder="Remarks: " value = "<?php  //echo $first_name; ?>" name="remarks" class="form-control"></textarea><span class="error"><?php echo $remarksErr; ?> </span></td>
        </tr>
      </table>
       <div class="modal-footer">
         <button name="submit" type="submit" class="btn btn-primary btn-lg">Add</button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
       </div>       
         </form>
