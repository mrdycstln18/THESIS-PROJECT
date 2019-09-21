<?php  
    include ('config.php');
    $job_order_control_no = $date_created = $job_desc = $supplier_name = $instruction = $status ="";
    $job_order_control_noErr = $date_createdErr = $job_descErr = $supplier_nameErr = $instructionErr = $statusErr ="";
                        if(isset($_POST['submit'])){

                            if(empty ($_POST["job_order_control_no"])){
                            $job_order_control_noErr = "Required Field";   
                            }
                        else{
                            $job_order_control_no = $_POST["job_order_control_no"];
                        }
                        if(empty ($_POST["date_created"])){
                            $date_createdErr = "Required Field";    
                            }
                        else{
                            $date_created = $_POST["date_created"];
                        }
                        if(empty ($_POST["job_desc"])){
                            $job_descErr = "Required Field";    
                            }
                        else{
                            $job_desc = $_POST["job_desc"];
                        }
                        if(empty ($_POST["supplier_name"])){
                            $supplier_nameErr = "Required Field";    
                            }
                        else{
                            $supplier_name = $_POST["supplier_name"];
                        }
                        if(empty ($_POST["instruction"])){
                            $instructionErr = "Required Field";    
                            }
                        else{
                            $instruction = $_POST["instruction"];
                        }
                        if(empty ($_POST["status"])){
                            $statusErr = "Required Field";    
                            }
                        else{
                            $status = $_POST["status"];
                        }
                    }

                    if($job_order_control_no && $date_created && $job_desc && $supplier_name && $instruction && $status){
                       $check_job_desc= mysqli_query($connections, "SELECT * FROM work_order WHERE job_desc='$job_desc'");
                                        $check_job_desc_row = mysqli_num_rows($check_job_desc);
                                        if($check_job_desc_row > 0){
                                          echo "<script language='JavaScript'>alert('not registered!') </script>";
                                          echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                                        $job_descErr ="job description Already Registered!";
                                        }
                            else{
                        
                       mysqli_query($connections, "INSERT INTO work_order(job_order_control_no,date_created,job_desc,supplier_name,instruction ,status) VALUES ('$job_order_control_no','$date_created','$job_desc','$supplier_name','$instruction','$status')");

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
    
    <!-- WorkOrderModal -->
    <div id="AddWorkOrder" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
      <i class="#"></i><span><h2>&nbsp Add Work Order</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="720">
       <tr>
          <td colspan="2"><input type="text" placeholder="job order control no: " value = "<?php  //echo $first_name; ?>" name="job_order_control_no" class="form-control"><?php echo $job_order_control_noErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="date" placeholder="date created: " value = "<?php  //echo $first_name; ?>" name="date_created " class="form-control"><?php echo $date_createdErr ; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="job description: " value = "<?php  //echo $first_name; ?>" name="job_desc" class="form-control"><?php echo $job_descErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="supplier name: " value = "<?php  //echo $first_name; ?>" name="supplier_name" class="form-control"><?php echo $supplier_nameErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="instruction: " value = "<?php  //echo $first_name; ?>" name="instruction" class="form-control"><?php echo $instructionErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="status: " value = "<?php  //echo $first_name; ?>" name="status" class="form-control"><?php echo $statusErr; ?></td>
        </tr>
        
      </table>
       <div class="modal-footer">
         <button name="submit" type="submit" class="btn btn-primary btn-lg">Add</button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
       </div>       
         </form>
