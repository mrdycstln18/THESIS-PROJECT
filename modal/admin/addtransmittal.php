<?php  
    include ('config.php');
    $prepared_by = $pre_press = $press = $post_press = $others = $job_order_control_no = $quantity = $description = $status ="";
    $prepared_byErr = $pre_pressErr = $pressErr = $post_pressErr = $othersErr = $job_order_control_noErr = $quantityErr = $descriptionErr = $statusErr ="";
                        if(isset($_POST['submit'])){

                            
                        if(empty ($_POST["prepared_by"])){
                            $prepared_byErr = "Required Field";    
                            }
                        else{
                            $prepared_by = $_POST["prepared_by"];
                        }
                        if(empty ($_POST["pre_press"])){
                            $pre_pressErr = "Required Field";    
                            }
                        else{
                            $pre_press = $_POST["pre_press"];
                        }
                        if(empty ($_POST["press"])){
                            $pressErr = "Required Field";    
                            }
                        else{
                            $press = $_POST["press"];
                        }
                        if(empty ($_POST["post_press"])){
                            $post_pressErr = "Required Field";    
                            }
                        else{
                            $post_pressErr = $_POST["post_press"];
                        }
                        if(empty ($_POST["others"])){
                            $othersErr = "Required Field";    
                            }
                        else{
                            $others = $_POST["others"];
                        }
                        if(empty ($_POST["job_order_control_no"])){
                            $job_order_control_noErr = "Required Field";    
                            }
                        else{
                            $job_order_control_no = $_POST["job_order_control_no"];
                        }
                        if(empty ($_POST["quantity"])){
                            $quantityErr = "Required Field";    
                            }
                        else{
                            $quantity = $_POST["quantity"];
                        }
                        if(empty ($_POST["description"])){
                            $descriptionErr = "Required Field";    
                            }
                        else{
                            $description = $_POST["description"];
                        }
                        if(empty ($_POST["status"])){
                            $statusErr = "Required Field";    
                            }
                        else{
                            $status = $_POST["status"];
                        }
                    }

                    if($prepared_by && $pre_press && $press  && $post_press  && $others && $job_order_control_no && $quantity && $description && $status){
                       $check_prepared_by= mysqli_query($connections, "SELECT * FROM transmittal_slip WHERE transmittal_slip_id='$transmittal_slip_id'");
                                        $check_prepared_by_row = mysqli_num_rows($prepared_by);
                                        if($check_prepared_by_row > 0){
                                          echo "<script language='JavaScript'>alert('not registered!') </script>";
                                          echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                                        $prepared_byErr = "Slip ID Already Registered!";
                                        }
                            else{
                        
                       mysqli_query($connections, "INSERT INTO transmittal_slip(prepared_by,pre_press,press ,post_press ,others,job_order_control_no,quantity,description,status) VALUES ('$prepared_by', '$pre_press', '$press', '$post_press', '$others', '$job_order_control_no', '$quantity', '$description', '$status')");

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
    <div id="AddTransmittal" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
      <i class="#"></i><span><h2>&nbsp Add Transmittal</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="720">
        <tr>
          <td colspan="2"><input type="text" placeholder="prepared_by: " value = "<?php  //echo $first_name; ?>" name="prepared_by " class="form-control"><?php echo $prepared_byErr ; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="pre_press: " value = "<?php  //echo $first_name; ?>" name="pre_press" class="form-control"><?php echo $pre_pressErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="press " value = "<?php  //echo $first_name; ?>" name="press  " class="form-control"><?php echo $pressErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="post_press: " value = "<?php  //echo $first_name; ?>" name="post_press  " class="form-control"><?php echo $post_pressErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="others: " value = "<?php  //echo $first_name; ?>" name="others " class="form-control"><?php echo $othersErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="job_order_control_no: " value = "<?php  //echo $first_name; ?>" name="job_order_control_no" class="form-control"><?php echo $job_order_control_noErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="quantity  " value = "<?php  //echo $first_name; ?>" name="quantity " class="form-control"><?php echo $quantityErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="description: " value = "<?php  //echo $first_name; ?>" name="description " class="form-control"><?php echo $descriptionErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="status: " value = "<?php  //echo $first_name; ?>" name="status " class="form-control"><?php echo $statusErr; ?></td>
        </tr>
      </table>
       <div class="modal-footer">
         <button name="submit" type="submit" class="btn btn-primary btn-lg">Add</button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
       </div>       
         </form>
