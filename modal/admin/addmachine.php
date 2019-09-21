<?php  
    include ('config.php');
    $machine_name = $machine_division = $maximum_size = $minimum_size = $maximum_printing_area = $max_speed = $min_speed = $machine_status ="";
    $machine_nameErr = $machine_divisionErr = $maximum_sizeErr = $minimum_sizeErr = $maximum_printing_areaErr = $max_speedErr = $min_speedErr = $machine_statusErr ="";
                        if(isset($_POST['submit'])){

                            if(empty ($_POST["machine_name"])){
                            $machine_nameErr = "Required Field";   
                            }
                        else{
                            $machine_name = $_POST["machine_name"];
                        }
                        if(empty ($_POST["machine_division"])){
                            $machine_divisionErr = "Required Field";    
                            }
                        else{
                            $machine_division = $_POST["machine_division"];
                        }
                        if(empty ($_POST["maximum_size"])){
                            $maximum_sizeErr = "Required Field";    
                            }
                        else{
                            $maximum_size = $_POST["maximum_size"];
                        }
                        if(empty ($_POST["minimum_size"])){
                            $minimum_sizeErr = "Required Field";    
                            }
                        else{
                            $minimum_size = $_POST["minimum_size"];
                        }
                        if(empty ($_POST["maximum_printing_area"])){
                            $maximum_printing_areaErr = "Required Field";    
                            }
                        else{
                            $maximum_printing_area = $_POST["maximum_printing_area"];
                        }
                        if(empty ($_POST["max_speed"])){
                            $max_speedErr = "Required Field";    
                            }
                        else{
                            $max_speed = $_POST["max_speed"];
                        }
                        if(empty ($_POST["min_speed"])){
                            $min_speedErr = "Required Field";    
                            }
                        else{
                            $min_speed = $_POST["min_speed"];
                        }
                        if(empty ($_POST["machine_status"])){
                            $machine_statusErr = "Required Field"; 
                            }
                        else{
                            $machine_status = $_POST["machine_status"];
                        }
            
                    }

                    if($machine_name && $machine_division && $maximum_size && $minimum_size && $maximum_printing_area && $max_speed && $min_speed && $machine_status){
                       $check_machine_name= mysqli_query($connections, "SELECT * FROM machine WHERE machine_name='$machine_name'");
                                        $check_machine_name_row = mysqli_num_rows($check_machine_name);
                                        if($check_machine_name_row > 0){
                                          echo "<script language='JavaScript'>alert('not registered!') </script>";
                                          echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                                        $machine_nameErr = "Machine Name Already Registered!";
                                        }
                            else{
                        
                       mysqli_query($connections, "INSERT INTO machine(machine_name,machine_division,maximum_size,minimum_size,maximum_printing_area,max_speed,min_speed,machine_status) VALUES ('$machine_name','$machine_division','$maximum_size','$minimum_size','$maximum_printing_area','$max_speed','$min_speed','$machine_status')");

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
  
    
    <!-- MachineModal -->
    <div id="AddMachine" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
       <i class="#"></i><span><h2>&nbsp Add Machine</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br> 
       <form action="" method="POST">
      <table width="720">
        <tr>
          <td colspan="2"><input type="text" placeholder="Machine Name:" value="<?php //echo $uname; ?>" name="machine_name" class="form-control"><span class="error"><?php echo $machine_nameErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Machine Division:" value="<?php //echo $uname; ?>" name="max_speed" class="form-control"><span class="error"><?php echo $machine_divisionErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Maximum Speed:" value="<?php //echo $uname; ?>" name="min_speed" class="form-control"><span class="error"><?php echo $maximum_sizeErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Minimum Speed:" value="<?php //echo $uname; ?>" name="machine_division" class="form-control"><span class="error"><?php echo $minimum_sizeErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Machine Max Size:" value="<?php //echo $uname; ?>" name="maximum_size" class="form-control"><span class="error"><?php echo $maximum_printing_areaErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Machine Min Size:" value="<?php //echo $uname; ?>" name="minimum_size" class="form-control"><span class="error"><?php echo $max_speedErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Maximum Printing Area:" value="<?php //echo $uname; ?>" name="maximum_printing_area" class="form-control"><span class="error"><?php echo $min_speedErr; ?> </span></td>
        </tr>
         <tr>
          <td colspan="2"><input type="text" placeholder="Machine Status:" value="<?php //echo $uname; ?>" name="machine_status" class="form-control"><span class="error"><?php echo $machine_statusErr; ?> </span></td>
        </tr>
      </table>
       <div class="modal-footer">
         <button name="submit" type="submit" class="btn btn-primary btn-lg">Add</button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
       </div>       
         </form>
