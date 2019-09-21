<?php  
    include ('config.php');
    $producing_unit = $operator_unit = $operator_name = $report_date = $job_title = $quantity = $type_of_job = $no_of_signatures = $types_of_activity = $time_started = $time_finished = $spoilage = $good_copies = $remarks ="";
    $producing_unitErr = $operator_unitErr = $operator_nameErr = $report_dateErr = $job_titleErr = $quantityErr = $type_of_jobErr = $no_of_signaturesErr = $types_of_activityErr = $time_startedErr = $time_finishedErr = $spoilageErr = $good_copiesErr = $remarksErr ="";
                        if(isset($_POST['submit'])){

                            if(empty ($_POST["producing_unit"])){
                            $producing_unitErr = "Required Field";   
                            }
                        else{
                            $producing_unit = $_POST["producing_unit"];
                        }
                        if(empty ($_POST["operator_unit"])){
                            $operator_unitErr = "Required Field";    
                            }
                        else{
                            $operator_unit = $_POST["operator_unit"];
                        }
                        if(empty ($_POST["operator_name"])){
                            $operator_nameErr = "Required Field";    
                            }
                        else{
                            $operator_name = $_POST["operator_name"];
                        }
                        if(empty ($_POST["report_date"])){
                            $report_dateErr = "Required Field";    
                            }
                        else{
                            $report_date = $_POST["report_date"];
                        }
                        if(empty ($_POST["type_of_job"])){
                            $type_of_jobErr = "Required Field";    
                            }
                        else{
                            $type_of_job = $_POST["type_of_job"];
                        }
                        if(empty ($_POST["no_of_signatures"])){
                            $no_of_signaturesErr = "Required Field";    
                            }
                        else{
                            $no_of_signatures = $_POST["no_of_signatures"];
                        }
                        if(empty ($_POST["types_of_activity"])){
                            $types_of_activityErr = "Required Field";    
                            }
                        else{
                            $types_of_activity = $_POST["types_of_activity"];
                        }
                        if(empty ($_POST["time_started"])){
                            $time_startedErr = "Required Field";    
                            }
                        else{
                            $time_started = $_POST["time_started"];
                        }
                        if(empty ($_POST["time_finished"])){
                            $time_finishedErr = "Required Field";    
                            }
                        else{
                            $time_finished = $_POST["time_finished"];
                        }
                        if(empty ($_POST["spoilage"])){
                            $spoilageErr = "Required Field";    
                            }
                        else{
                            $spoilage = $_POST["spoilage"];
                        }
                        if(empty ($_POST["good_copies"])){
                            $good_copiesErr = "Required Field";    
                            }
                        else{
                            $good_copies = $_POST["good_copies"];
                        }
                        if(empty ($_POST["remarks"])){
                            $remarksErr = "Required Field";    
                            }
                        else{
                            $remarks = $_POST["remarks"];
                        }
                    }

                    if($producing_unit && $operator_unit && $operator_name && $report_date && $job_title && $quantity && $type_of_job && $no_of_signatures && $types_of_activity && $time_started && $time_finished && $spoilage && $good_copies && $remarks){
                       $check_producing_unit= mysqli_query($connections, "SELECT * FROM daily_production_report WHERE producing_unit='$producing_unit'");
                                        $check_item_name_row = mysqli_num_rows($item_name);
                                        if($check_producing_unit_row > 0){
                                          echo "<script language='JavaScript'>alert('not registered!') </script>";
                                          echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                                        $producing_unitErr = "Machine Name Already Registered!";
                                        }
                            else{
                        
                       mysqli_query($connections, "INSERT INTO daily_production_report(producing_unit,operator_unit,operator_name,report_date,job_title,quantity,type_of_job,no_of_signatures,types_of_activity,time_started,time_finished,spoilage,good_copies,remarks) VALUES ('$producing_unit','$operator_unit','$operator_name','$report_date','$job_title','$quantity','$type_of_job','$no_of_signatures','$types_of_activity','$time_started','$time_finished','$spoilage','$good_copies','$remarks')");

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
    <div id="AddReport" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
      <i class="#"></i><span><h2>&nbsp Add Report</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="720">
        <tr>
          <td colspan="2"><input type="text" placeholder="Producing Unit: " value = "<?php  //echo $first_name; ?>" name="producing_unit" class="form-control"><?php echo $producing_unitErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Operator Unit: " value = "<?php  //echo $first_name; ?>" name="operator_unit " class="form-control"><?php echo $operator_unitErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Operator Name: " value = "<?php  //echo $first_name; ?>" name="operator_name" class="form-control"><?php echo $operator_nameErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="date" placeholder="Report Date: " value = "<?php  //echo $first_name; ?>" name="report_date" class="form-control"><?php echo $report_dateErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Job Title: " value = "<?php  //echo $first_name; ?>" name="job_title" class="form-control"><?php echo $job_titleErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Quantity: " value = "<?php  //echo $first_name; ?>" name="quantity" class="form-control"><?php echo $quantityErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Type of Job: " value = "<?php  //echo $first_name; ?>" name="type_of_job" class="form-control"><?php echo $type_of_jobErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="No. of Signatures: " value = "<?php  //echo $first_name; ?>" name="no_of_signatures" class="form-control"><?php echo $no_of_signaturesErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Types of Activity: " value = "<?php  //echo $first_name; ?>" name="types_of_activity" class="form-control"><?php echo $types_of_activityErr; ?></td>
        </tr>
        <tr>
          <td colspan="2"><input type="time" placeholder="Time Started: " value = "<?php  //echo $first_name; ?>" name="time_started" class="form-control"><?php echo $time_startedErr; ?></td>
        </tr> 
        <tr>
          <td colspan="2"><input type="time" placeholder="Time Finished: " value = "<?php  //echo $first_name; ?>" name="time_finished" class="form-control"><?php echo $time_finishedErr; ?></td>
        </tr> 
        <tr>
          <td colspan="2"><input type="text" placeholder="Spoilage: " value = "<?php  //echo $first_name; ?>" name="spoilage" class="form-control"><?php echo $spoilageErr; ?></td>
        </tr> 
        <tr>
          <td colspan="2"><input type="text" placeholder="Good Copies: " value = "<?php  //echo $first_name; ?>" name="good_copies" class="form-control"><?php echo $good_copiesErr; ?></td>
        </tr> 
        <tr>
          <td colspan="2"><input type="text" placeholder="Remarks: " value = "<?php  //echo $first_name; ?>" name="remarks" class="form-control"><?php echo $remarksErr; ?></td>
        </tr> 
      </table>
       <div class="modal-footer">
         <button name="submit" type="submit" class="btn btn-primary btn-lg">Add</button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
       </div>       
         </form>
