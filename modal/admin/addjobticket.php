<?php  
    include ('config.php');
    $item_name = $item_desc = $category = $quantity = $size = $unit_of_measure ="";
    $item_nameErr = $item_descErr = $categoryErr = $quantityErr = $sizeErr = $unit_of_measureErr ="";
                        if(isset($_POST['submit'])){

                            if(empty ($_POST["item_name"])){
                            $machine_nameErr = "Required Field";   
                            }
                        else{
                            $machine_name = $_POST["item_name"];
                        }
                        if(empty ($_POST["item_desc"])){
                            $machine_divisionErr = "Required Field";    
                            }
                        else{
                            $machine_division = $_POST["item_desc"];
                        }
                        if(empty ($_POST["category"])){
                            $maximum_sizeErr = "Required Field";    
                            }
                        else{
                            $maximum_size = $_POST["category"];
                        }
                        if(empty ($_POST["quantity"])){
                            $minimum_sizeErr = "Required Field";    
                            }
                        else{
                            $minimum_size = $_POST["quantity"];
                        }
                        if(empty ($_POST["size"])){
                            $maximum_printing_areaErr = "Required Field";    
                            }
                        else{
                            $maximum_printing_area = $_POST["size"];
                        }
                        if(empty ($_POST["unit_of_measure"])){
                            $max_speedErr = "Required Field";    
                            }
                        else{
                            $max_speed = $_POST["unit_of_measure"];
                        }
                    }

                    if($item_name && $item_desc && $category && $quantity && $size && $unit_of_measure){
                       $check_machine_name= mysqli_query($connections, "SELECT * FROM materials WHERE item_name='$item_name'");
                                        $check_item_name_row = mysqli_num_rows($item_name);
                                        if($check_item_name_row > 0){
                                          echo "<script language='JavaScript'>alert('not registered!') </script>";
                                          echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                                        $item_nameErr = "Machine Name Already Registered!";
                                        }
                            else{
                        
                       mysqli_query($connections, "INSERT INTO materials(item_name,item_desc,category,quantity,size,unit_of_measure) VALUES ('$item_name', '$item_desc', '$category', '$quantity', '$size', '$unit_of_measure')");

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
    <div id="AddJobTicket" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
      <i class="#"></i><span><h2>&nbsp Add Job Ticket</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="720">
        <tr>
          <td colspan="2"><input type="text" placeholder="Job Order No.:" name="joborderno" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Machine Name:" name="macname" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Delivery Date:" name="deldate" class="form-control"></td>
          <td><input type="text" placeholder="Client Name:" name="clientname" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Project Title:" name="projtitle" class="form-control"></td>
          <td><input type="text" placeholder="Quantity:" name="jobquant" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Actual Size:" name="actualsize" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Pages:" name="pages" class="form-control"></td>
          <td><input type="text" placeholder="Paper:" name="paper" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Color: " name="color" class="form-control"></td>
          <td><input type="text" placeholder="Binding Method: " name="bindmethod" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Lamination: " name="lamination" class="form-control"></td>
          </td>
        <tr>
          <td colspan="2"><textarea rows="5" placeholder="Remarks: " name="remarks" class="form-control"></textarea> </td>
        </tr>
      </table>
       <div class="modal-footer">
         <button name="addjoborder" type="submit" class="btn btn-primary btn-lg"><a href="../index_admin.php">Add</a></button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><a href="../index_admin.php">Close</a></button>
       </div>       
         </form>
